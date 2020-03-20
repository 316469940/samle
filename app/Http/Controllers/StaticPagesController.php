<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class StaticPagesController extends BaseController
{
    public function home(){
    	return view('static_pages/home');
    }
    public function help(){
    	return view('static_pages/help');
    }
    public function about(){
    	return view('static_pages/about');
    }
}
