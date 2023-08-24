<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
/* use App\Http\Controllers\Auth; */
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        $user = User->get();
        return view('home',['user'=>$user]);

        $login = Auth::check();
        

        if($login==1){
            return view('home')->with('nombreUser', 'Bienvenido');
        }else {
            return view('home')->with('nombreUser', 'Bienvenido');
        }

    }
    public function show(Request $request, $id)
    {
        
    }
    public function store(Request $request)
    {
        
    }
}
