@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
<h1>{{$title}}</h1>
@if(!Auth::guest())
<p><a class="btn btn-primary btn-lg" href="posts/create" role="button">Create a Post</a> </p>
@endif
@if(Auth::guest())
<p>Blog posting. Register or login to post and read blogs.</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endif
@endsection
