@extends('layouts.Master')

@section('title', 'Article')

@section('content')

<!-- Page Content -->
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h1 class="my-4">Kuliner Malang</h1>

    </div>    

    <!-- /.col-lg-3 -->
    <div class="col-lg-9">
      <div class="card mb-3">
        <img src="{{asset('storage/'.$article->imageurl)}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $article->title }}</h5>
          <p class="card-text">{{$article->content}}</p>
          <p class="card-text"><small class="text-muted">{{ $article-> created_at }}</small></p>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
</div>
  <!-- /.container -->
  @endsection