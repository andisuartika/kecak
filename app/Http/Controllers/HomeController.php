<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Landing Page";
        // $packages=[(object)[
        //     'package_code'=>'DUmmy Code',
        //     'package_name'=>'DUmmy Name',
        //     'package_desc'=>'DUmmy Desc'
        // ];(object)[
        //     'package_code'=>'DUmmy Code 2',
        //     'package_name'=>'DUmmy Name 3',
        //     'package_desc'=>'DUmmy Desc 4'
        // ]];
        return view('frontpage.landingpage');
    }
}
