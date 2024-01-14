<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function cheaf()
    {
        $data=foodchef::all();
        return view("foodcheaf",compact("data"));
    }

    public function food()
    {
        $data=food::all();
        return view("food",compact("data"));
    }

    public function redirects()
    {
        $data=food::all();
        $usertype= Auth::user()->usertype;

        if($usertype=='admin')
        {
            return view('admin.adminhome');
        }

        else
        {
            return view('home',compact('data'));
        }
    }
}
