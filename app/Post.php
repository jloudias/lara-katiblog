<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
  use SoftDeletes;

  public function getFeaturedAttribute($featured) {
    return (Storage::cloud()->url($featured));
    // return asset($featured);
  }

  protected $dates = ['deleted_at'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'content', 'category_id','featured', 'slug', 'user_id'
  ];

    //
    public function category() {
      return $this->belongsTo('App\Category');
    }

    public function tags() {
      return $this->belongsToMany('App\Tag');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
