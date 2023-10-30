<?php
/*
    //This the admin resgistration controller
namespace App\Http\Controllers\Auth;
use App\Models\useradmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredAdminController extends Controller
{
    public function store(Request $request)   
    //This is to store the admin details
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $user=new useradmin;
        $user->name=$request->input('name');//jeeva
        $user->email=$request->input('email');//jeevaa.21bsr@kongu.edu
        $user->save(); //To save the form using eloquent method
        return redirect('admin');
    }
}
*/