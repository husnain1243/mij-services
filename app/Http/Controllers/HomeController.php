<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['services'] = Service::select('id','title','long_description','created_at')->get();

        $data['testimonials'] = Testimonial::select('id','title','description','created_at')->get();


        return view('index', ['home' => 'active'], $data);
        // return view('/admin/dashboard');
    }
    public function services()
    {
        $data['services'] = Service::select('id','title','long_description','created_at')->get();
        
        return view('pagesdetails.services',['servicess'=>'active'], $data);
        // return view('/admin/dashboard');
    }
    public function testimonials()
    {
        $data['testimonials'] = Testimonial::select('id','title','description','created_at')->get();
        return view('pagesdetails.testimonials', $data);
        // return view('/admin/dashboard');
    }
    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/login');
    //   }
}