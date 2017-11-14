@extends('layouts.app')

@section('content')

  <div class="panel panel-default">

    <div class="col-lg-3">
      <div class="panel panel-info text-center">
        <div class="panel-heading">POSTED</div>
        <div class="panel-body">
          <h1 class="text-center">{{$posts_count}}</h1>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="panel panel-danger text-center">
        <div class="panel-heading">TRASHED POSTS</div>
        <div class="panel-body">
          <h1 class="text-center">{{$trashed_count}}</h1>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="panel panel-success text-center">
        <div class="panel-heading">USERS</div>
        <div class="panel-body">
          <h1 class="text-center">{{$users_count}}</h1>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="panel panel-info text-center">
        <div class="panel-heading">CATEGORIES</div>
        <div class="panel-body">
          <h1 class="text-center">{{$categories_count}}</h1>
        </div>
      </div>
    </div>



  </div>
@endsection
<div class="panel-heading">Dashboard</div>

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    You are logged in!
</div>
