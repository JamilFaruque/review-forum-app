<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function show()
  {
    return view('login');
  }

  public function store()
  {
    $credentials = request()->validate([
      'email' => 'required',
      'password' => 'required|min:8'
    ]);


    if (auth()->attempt($credentials)) {
      session()->regenerate();
      session()->flash('success',"You have successfully logged in!");
      return redirect('/');
    }

    return back()->withInput()->withErrors(['loginFail' => 'Provided credentials did not match']);
  }

  public function destroy()
  {
    auth()->logout();
    return redirect('/');
  }
}
