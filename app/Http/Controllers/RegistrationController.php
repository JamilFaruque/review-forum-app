<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
  public function show()
  {
    return view('register');
  }

  public function create()
  {
    $attributes = request()->validate([
      'name' => ['required'],
      'username' => ['required', Rule::unique('users', 'username')],
      'email' => ['required', Rule::unique('users', 'email')],
      'password' => ['required', 'min:8', 'max:255']
    ]);

    $user = User::create($attributes);
    auth()->login($user);

    session()->flash('success',"You have successfully registered");
    
    return redirect('/');
  }
}
