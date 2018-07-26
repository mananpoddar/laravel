<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{% static "blog/letcode.css" %}">
    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


.fa {#13011f
  padding: 10px;
  font-size: 100px;
  width: 25px;
  height: 25px;
  text-align: center;
  text-decoration: none;
  margin: 0 0;
  border-radius: 70%;
}

.fa:hover {
    opacity: 1;
}

.fa-facebook {
  background:white;
  color:black;
}
.fa-google {
  background: white;
  color:black;
}

.fa-linkedin {
  background: white;
  color:black;
}
.fa-instagram {
  background: white;
  color:black;
}
.fa-github {
  background: white;
  color:black;
}
 .header {
        background-color: 	#1c1c1d;
        text-align: center;
        
        color:	white;
        height:2em;
        
    }   

        </style>
    </head>
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Logout </a>
                        <a href="{{ route("posts.index") }}">Manage Blog Post</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="https://mananpoddar.github.io">my personal website</a>

                     
              
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title">
                    BLOG<br>MANAN PODDAR<br>
                    <a  href="https://www.facebook.com/manan.poddar.942" class="font"><i  class="fa fa-facebook" style="font-size:25px  ; height: 30px; width: 30px;"></i> </a> 
        <a  href="https://plus.google.com/u/0/111512473305463615972" class="font"  ><i class="fa fa-google" style="font-size:25px  ; height: 30px; width: 30px;"></i></a>
        <a  href="https://www.linkedin.com/in/manan-poddar-59226314a/" class="font" ><i class="fa fa-linkedin" style="font-size:25px  ; height: 30px; width: 30px;"></i></a>
        <a href="https://www.instagram.com/manan_poddar/" class="font"><i class="fa fa-instagram" style="font-size:25px  ; height: 30px; width: 30px;"></i></a>  
        <a href="https://github.com/man-an/" class="font"><i class="fa fa-github" style="font-size:25px  ; height: 30px; width: 30px;"></i></a>  
                         

                </div>
        </div></div>

    @foreach($posts as $post)
    
<div class="container">
    
        <div style="background-color:black; color:white">
        <div style="text-align:center; font-size:3em;">
 {{ $post->title }}<br></div></br>
 <div style="font-size:1.5em;margin-left:1em;">
{{$post->content}}<br>
        </div><br>
        </div><br>
        </div><br>
@endforeach
<div class="header" style="font-size:3em ; margin-top:.5em;">&copy;MANAN PODDAR</div>

      
                </div>
            </div>
        </div>
    </body>
</html>
