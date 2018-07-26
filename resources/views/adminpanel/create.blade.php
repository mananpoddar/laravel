@extends("layouts.template")

@section("title","add new post")

@section("content")

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{% static "blog/letcode.css" %}">
    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>




<h1> add new post</h1>
<div class="col-sm-8 col-sm-offset-2">
<form action="{{ route("posts.store") }}" method="post">{{ csrf_field() }}
<div class="form-group">
        <label class="control-label col-sm-2" for="Title">title :</label>
        <div class="col-sm-10">
     <input  class="form-control" name="title" placeholder="Enter title" >
        </div>
    </div>
  <br><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="body">body :</label>
        <div class="col-sm-10">
     <textarea name="body" cols="30" rows="10" class="form-control" placeholder="Enter title" ></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
    <a href="{{ route("posts.index") }}" class="btn btn-default pull-right">go back</a>
</form>

@endsection