<?php
/*<!-- This code is a controller for booking page-->
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booknow;
class BooknowController extends Controller
{  
    public function booknow()  <!--Here they can view the page of booknow-->
   {
      return view('customer.booknow');
   }
   public function store(Request $request)<!-- This is to store the user booking details-->
    {
        $request->validate([ <!--It validates the input-->
         'name'=>'required',//jeeva
         'email'=>'required',//jeevaa.21bsr@kongu.edu
         'phone'=>'required',//9865697423
         'adults'=>'required|integer',//1
         'children'=>'required|integer',//2
         'checkin'=>'required|date',//28-10-2023
         'checkout'=>'required|date',//29-10-2023
         'rooms'=>'required|in:standard,duluxe,luxury',//standard
        ]);
        booknow::create([ <!--Storing it in the database-->
            'name'=>$request->input('name'),//jeeva
            'email'=>$request->input('email'),//jeevaa.21bsr@kongu.edu
            'phone'=>$request->input('phone'),//98656974223
            'adults'=>$request->input('adults'),//1
            'children'=>$request->input('children'),//2
            'checkin'=>$request->input('checkin'),//28-10-2023
            'checkout'=>$request->input('checkout'),//29-10-2023
            'rooms'=>$request->input('rooms'),//standard
        ]);
        return redirect()->route('customer.index'); <!--After these process it redirects to the main page-->
    }
}
*/