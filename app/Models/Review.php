<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function scopeFilter($query,$key) {
    return $query->where('title','Like',"%$key%");
  }

  public function author()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function category()
  {
    $this->belongsTo(Category::class);
  }
}
