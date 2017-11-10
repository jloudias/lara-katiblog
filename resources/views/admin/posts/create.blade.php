@extends('layouts.app')

@section('content')
  @include('admin.includes.errors')
  <h2 class="text-center">
    Create a new post
  </h2>
  <div class="panel panel-default">
    <div class="panel-heading">
      Create a new post
    </div>
    <div class="panel-body">
      <form class="" action="{{ route('post.store') }}" method="post"
            enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" value="" class="form-control">
        </div>
        <div class="form_group">
          <label for="category">Select a Category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form_group">
          <label for="tags">Choose tags</label>
          @foreach($tags as $tag)
            <div class="checkbox">
              <label for=""><input type="checkbox" value="{{ $tag->id }}"
                              name="tags[]">{{ $tag->tag }}</label>
            </div>
          @endforeach
        </div>
        <div class="form-group">
          <!-- use summernote -->
          <label for="content">Content</label>
          <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <div class="text-center">
            <button class="btn btn-success" type="submit">Store Post</button>
          </div>
        </div>

      </form>
    </div>
  </div>
@endsection

@section('styles')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@endsection

@section('scripts')
<!-- include summernote css/js-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#content').summernote();
  });
</script>
@endsection
