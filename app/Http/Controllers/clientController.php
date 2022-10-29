<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
   public function home()
    {
        #code...
        return view('client.home');
    }
    public function cart()
    {
        return view('client.cart');
    }
  public function checkout()
{
    return view('client.checkout');
}
 public function shop()
{
    return view('client.shop');
}

}

  
    
