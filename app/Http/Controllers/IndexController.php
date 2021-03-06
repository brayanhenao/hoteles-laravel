<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Auth;

class IndexController extends Controller
{
    public function index(){
        if(is_null(Auth::user())){
            return view('auth.login');
        }

        $hotels=Hotel::all();
        return view("index",compact('hotels'));
    }
}
