<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    //

    // construct middleware done all function and use except to remove function on middleware
    public  function  __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    public  function  index(){
        $data = [];
        $data['name'] = 'Abdallah';
        $data['id'] = 12;
        $data['gender'] = 'male';
        return view('front.index',compact('data'));
    }

    public  function  show(){
        return view('front.show');
    }
}
