@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           

              <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
</div>
                    @endif
               <div class="container" style="font-size:5em;text-align:center">     Manan,Have A Great Day Today!</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
