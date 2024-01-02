<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
  public function index()
  {
    return view('welcome',[
      'reviews' => Review::latest()->filter(request('search'))->get()
    ]);
  }

  public function store()
  {
    $attributes = request()->validate([
      'title' => ['required','min:7','max:60'],
      'excerpt' => ['required','min:7','max:150'],
      'body' => ['required','min:7','max:3000'],
      'category_id' => ['required',Rule::exists('categories','id')]
    ]);
    $attributes['user_id'] = request()->user()->id;

    Review::create($attributes);

    return redirect('/');
  }
}
