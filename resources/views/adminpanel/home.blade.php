@extends("layouts.template")

@section("title","blog:Admin Panel")

@section("content")

 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{% static "blog/letcode.css" %}">
    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


<h1>admin panel</h1>
<a href="{{ route("posts.create")  }}" class="btn btn-primary pull-right" >Add new Blog Post</a>
<br><br><br>
<a href="{{ route("home")  }}" class="btn btn-primary pull-right" >logout or go to main page</a>

<table class="table">
<thead>
   <th>id</th>
   <th>title</th>
   <th>body</th>
   
</thead>

<tbody>
    @foreach($posts as $post)
    <tr>
<th>{{ $post->user_id }}</th>
<td> {{ $post->title }}</td>
<td>{{$post->content}}</td>
</tr>
@endforeach
</tbody>
</table>

@endsection