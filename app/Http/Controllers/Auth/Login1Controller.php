<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class Login1Controller extends Controller
{
    //
	public function logiout(Request $request)
	{
		Auth::logout();
          $request->session()->invalidate();
		  return redirect(\URL::previous());
	}
	
}
