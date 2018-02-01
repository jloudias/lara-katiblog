<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
use Log;

// use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    //
    public function index() {
      $setting = Setting::first();
      // debug below
      // $firstpost = Post::orderBy('created_at', 'desc' )->first();
      // $myurl = Storage::disk('s3')->url($firstpost->featured);
      // // $myurl = url($firstpost->featured);
      // dd($firstpost->featured);
      //       dd($myurl);

      return view('index')
        ->with('title', $setting->site_name)
        ->with('categories', Category::take(5)->get())
        ->with('first_post', Post::orderBy('created_at', 'desc' )->first())
        ->with('second_post', Post::orderBy('created_at', 'desc' )->skip(1)->take(1)->get()->first())
        ->with('third_post', Post::orderBy('created_at', 'desc' )->skip(2)->take(1)->get()->first())
        // ->with('laravel', Category::find(1))
        // ->with('vuejs', Category::find(5))
        ->with('settings', Setting::first());
    }

    public function singlePost($slug) {
      $post = Post::where('slug', $slug)->first();

      $next_id = Post::where('id', '>', $post->id)->min('id');
      $prev_id = Post::where('id', '<', $post->id)->max('id');

      return view('single')->with('post', $post)
                          ->with('title', $post->title)
                          ->with('categories', Category::take(5)->get())
                          ->with('settings', Setting::first())
                          ->with('next', Post::find($next_id))
                          ->with('prev', Post::find($prev_id))
                          ->with('tags', Tag::all());
    }

    public function category($id) {

      $category = Category::find($id);
      Log::info('Showing category : '.$category);

      return view('category')->with('category', $category)
                              ->with('title', $category->name)
                              ->with('categories', Category::take(5)->get())
                              ->with('settings', Setting::first());
    }

    public function tag($id) {

      $tag = Tag::find($id);

      return view('tag')->with('tag', $tag)
                              ->with('title', $tag->tag)
                              ->with('categories', Category::take(5)->get())
                              ->with('settings', Setting::first());
    }
}
