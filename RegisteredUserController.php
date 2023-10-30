<?php
/* 
/      /This the user resgistration controller
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\adminuser;
class RegisteredUserController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        //This is to store the user details
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $user=new adminuser;
        $user->name=$request->input('name');//jeeva
        $user->email=$request->input('email');//jeevaa.21bsr@kongu.edu
        $user->save(); //To save the form
        return redirect('customer');//After the form saved it redirects to the customer page.
    }
}*/
