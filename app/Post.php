<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
  use SoftDeletes;

  public function getFeaturedAttribute($featured) {
    return asset($featured);
  }

  protected $dates = ['deleted_at'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'content', 'category_id','featured', 'slug'
  ];

    //
    public function category() {
      return $this->belongsTo('App\Category');
    }
}
