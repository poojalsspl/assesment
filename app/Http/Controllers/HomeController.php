<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Auth;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->hasRole('superadmin') || Auth::user()->hasRole('useradmin') || Auth::user()->hasRole('salesTeam')){

            $users = User::count();
            $products = Product::count();
            $categories = Category::count();
            $roles = Role::count();
            return view('home',compact('users','products','categories','roles'));

        }
        return view('home');
    }
}
