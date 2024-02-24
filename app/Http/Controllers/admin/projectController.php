<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\projects;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class projectController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
                $data = projects::select('id','title','short_description','long_description','created_at')->get();

            return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->start)->format('M d, Y H:i:s');
                })
                ->addColumn('action', function($row){
                    $url = "/admin/project";
                    $btn='';

                    $btn .= ' <a href="'. route('project.edit', $row->id) .'" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>';
                    $btn .= ' <a href="'. route('project.delete', $row->id) .'" class="btn btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i></a>';
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

            return view('admin.pages.projects.index');
    }
    public function create()
    {
        return view('admin.pages.projects.form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'sometimes',
            'image' => 'required',
        ]);

        // DB::beginTransaction();


        // dd($request->all());
            $projects = new projects();
            $projects->title = $request->input('title');
            $projects->short_description = $request->input('short_description');
            $projects->long_description = $request->input('long_description');
            $projects->save();
            // DB::commit();

            if($request->hasFile('image') && $request->file('image')->isValid()){

                $projects->addMediaFromRequest('image')->toMediaCollection('images');

            }
            session()->flash('success', 'Successfully Save the data!');
            return redirect()->route('project.index');
    }

    public function edit(Request $request, $id)
    {
        $projects = projects::find($id);
        return view("admin.pages.projects.edit", compact("projects"));

    }


public function update(Request $request)
{
    $project = projects::find($request->id);

    $request->validate([
        'title' => 'required',
        'short_description' => 'required',
        'long_description' => 'sometimes',
    ]);


    DB::beginTransaction();

    $project->title = $request->title;
    $project->short_description = $request->short_description;
    $project->long_description = $request->long_description;

    $project->save();

    DB::commit();
    if($request->hasFile('image') && $request->file('image')->isValid()){
        $project->clearMediaCollection('images');
        $project->addMediaFromRequest('image')->toMediaCollection('images');
    }


    session()->flash('success', 'Successfully Update the data!');
    return redirect()->route('project.index');
}

public function destroy($id)
{
    DB::beginTransaction();
    $service = projects::find($id);

    if (!$service) {
        return redirect()->route('admin.pages.projects.index')->with('error', 'Not found');
    }

    $service->forceDelete();

    DB::commit();
    session()->flash('success', 'Successfully Delete the data!');
    return view('admin.pages.projects.index')->with('success', 'Brand Deleted Successfully');
}



}
