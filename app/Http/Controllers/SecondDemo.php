<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondDemo extends Controller
{
    //
    public function index(){
        return view("home");
    }
    //method for the about page
    public function about(){
        return view("about");
    }
    //method for the contact page
    public function contact(){
        return view("contact");
    }

    // method for the checkoutpage

    public function checkout(){
        return view("checkout");
    }
public function submitform(Request $request){
    //process form data
    $first_name = $request->input("first_name");
    $last_name= $request->input("last_name");
    // Example: Redirect with a success message
    return view('thankyou',compact('first_name','last_name'));
}
}