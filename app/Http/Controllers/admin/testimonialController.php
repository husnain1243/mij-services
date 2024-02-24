<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Exception;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class testimonialController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
                $data = Testimonial::select('id','title','description','created_at')->get();

            return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->start)->format('M d, Y H:i:s');
                })
                ->addColumn('action', function($row){
                    $url = "/admin/testimonial";
                    $btn='';

                    $btn .= ' <a href="'. route('testimonial.edit', $row->id) .'" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
                    $btn .= ' <a href="'. route('testimonial.delete', $row->id) .'" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i></a>';
                    return $btn;
                })
                ->addColumn('thumbnail', function($row){
                    $src = $row->getFirstMediaUrl('images', 'thumb');
                    $thumbnail = '<img class="img img-fluid" src="'.$src.'">';
                    return $thumbnail;
                })
                ->rawColumns(['thumbnail','created_at','action'])
                ->make();
            }

            return view('admin.pages.testimonials.index');
    }
    public function create()
    {
        return view('admin.pages.testimonials.form');
    }

    public function store(Request $request)
    {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required',


            ]);

            DB::beginTransaction();
            $testimonial = new Testimonial();
            $testimonial->title = $request->input('title');
            $testimonial->description = $request->input('description');
            $testimonial->save();
            DB::commit();

            if($request->hasFile('image') && $request->file('image')->isValid()){
                $testimonial->addMediaFromRequest('image')->toMediaCollection('images');

            }

            session()->flash('success', 'Successfully saved the data!');
                return redirect()->route('testimonial.index');
    }
    public function edit(Request $request, $id)
    {
        $testimonials = Testimonial::find($id);
        return view("admin.pages.testimonials.edit", compact("testimonials"));

    }

    public function update(Request $request)
{
    $testimionals = Testimonial::find($request->id);

    $request->validate([
        'title' => 'required',
        'description' => 'required',

    ]);
    DB::beginTransaction();

    $testimionals->title = $request->title;
    $testimionals->description = $request->description;

    $testimionals->save();

    DB::commit();
    if($request->hasFile('image') && $request->file('image')->isValid()){
        $testimionals->clearMediaCollection('images');
        $testimionals->addMediaFromRequest('image')->toMediaCollection('images');
    }

    session()->flash('success', 'Successfully Update the data!');
    return redirect()->route('testimonial.index');
}

public function destroy($id)
{
    DB::beginTransaction();
    $testimionals = Testimonial::find($id);

    if (!$testimionals) {
        return redirect()->route('admin.pages.testimonials.index')->with('error', 'Not found');
    }

    $testimionals->forceDelete();

    DB::commit();
    session()->flash('success', 'Successfully Delete the data!');

    return view('admin.pages.testimonials.index')->with('success', 'Brand Deleted Successfully');
}


}