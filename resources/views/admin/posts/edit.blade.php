@extends('layouts.app')

@section('content')
  @include('admin.includes.errors')
  <div class="panel panel-default">
    <div class="panel-heading">
      Edit post {{ $post->title }}
    </div>
    <div class="panel-body">
      <form class="" action="{{ route('post.update', ['id' => $post->id]) }}" method="post"
            enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" value="{{$post->title}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" value="" class="form-control">
        </div>
        <div class="form_group">
          <label for="category">Select a Category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
              <option value="{{$category->id}}"
                @if($post->category->id == $category->id)
                  selected
                @endif
              >{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form_group">
          <label for="tags">Choose tags</label>
          @foreach($tags as $tag)
            <div class="checkbox">
              <label for=""><input type="checkbox" value="{{ $tag->id }}"
                              name="tags[]"
                              @foreach($post->tags as $t)
                                @if($tag->id == $t->id)
                                  checked
                                @endif
                              @endforeach
                              >{{ $tag->tag }}</label>
            </div>
          @endforeach
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Update Post</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection
