<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food; 
use App\Models\Chefs;

class HomeController extends Controller
{
    public function index()
    {
        $data=Food::all();
        $data1=Chefs::all();
       return view("home",compact("data","data1")); 
    }
    public function redirects()
    {
      $data=Food::all();
      $usertype= Auth::user()->usertype;
       if ($usertype==1) {
         return view('admin.admin'); 
       }else{
         return view('home',compact("data"));
       }
       
    }
}
