<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class FrontendController extends Controller
{
    //
    public function index() {
      $setting = Setting::first();

      return view('index')
        ->with('title', $setting->site_name)
        ->with('categories', Category::take(5)->get())
        ->with('first_post', Post::orderBy('created_at', 'desc' )->first())
        ->with('second_post', Post::orderBy('created_at', 'desc' )->skip(1)->take(1)->get()->first())
        ->with('third_post', Post::orderBy('created_at', 'desc' )->skip(2)->take(1)->get()->first())
        ->with('laravel', Category::find(1))
        ->with('vuejs', Category::find(5))
        ->with('settings', Setting::first());
    }
}
