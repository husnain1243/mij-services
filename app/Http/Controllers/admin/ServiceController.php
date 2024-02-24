<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class ServiceController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
                $data = Service::select('id','title','short_description','long_description','created_at')->get();

            return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->start)->format('M d, Y H:i:s');
                })
                ->addColumn('action', function($row){
                    $url = "/admin/services";
                    $btn='';

                    $btn .= ' <a href="'. route('service.edit', $row->id) .'" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
                    $btn .= ' <a href="'. route('service.delete', $row->id) .'" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i></a>';
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

            return view('admin.pages.services.index');


    }

    public function create()
    {
        return view('admin.pages.services.form');
    }
    public function store(Request $request)
    {
            $request->validate([
                'title' => 'required',
                'short_description' => 'required',
                'long_description' => 'sometimes',
                'image' => 'required',
            ]);

            DB::beginTransaction();


            $service = new Service();
            $service->title = $request->input('title');
            $service->short_description = $request->input('short_description');
            $service->long_description = $request->input('long_description');

            $service->save();
            DB::commit();
            if($request->hasFile('image') && $request->file('image')->isValid()){

                $service->addMediaFromRequest('image')->toMediaCollection('images');

            }
            session()->flash('success', 'Successfully save the data!');
            return redirect()->route('service.index');
    }

    public function edit(Request $request, $id)
{
    $service = Service::find($id);
    return view("admin.pages.services.edit", compact("service"));

}

public function update(Request $request)
{
    $service = Service::find($request->id);

    $request->validate([
        'title' => 'required',
        'short_description' => 'required',
        'long_description' => 'sometimes',
    ]);


    DB::beginTransaction();

    $service->title = $request->title;
    $service->short_description = $request->short_description;
    $service->long_description = $request->long_description;

    $service->save();

    DB::commit();
    if($request->hasFile('image') && $request->file('image')->isValid()){
        $service->clearMediaCollection('images');
        $service->addMediaFromRequest('image')->toMediaCollection('images');
    }

    session()->flash('success', 'Successfully Update the data!');
    return redirect()->route('service.index');
}

public function destroy($id)
{
    DB::beginTransaction();
    $service = service::find($id);

    if (!$service) {
        return redirect()->route('admin.pages.services.index')->with('error', 'Not found');
    }

    $service->forceDelete();

    DB::commit();
    session()->flash('success', 'Successfully Delete the data!');

    return view('admin.pages.services.index')->with('success', 'Brand Deleted Successfully');
}


}