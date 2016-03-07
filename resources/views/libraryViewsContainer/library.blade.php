@extends('master');

@section('content');


<body>
    <header class="jumbotron">
     <div class="container">
        <div class="col-md-10">
                <h1>Container</h1>
                <p>reading a Book is like Taking News</p>
        </div>

        <div class="col-md-2">
            {{$date}} <br/> {{$time}}  
        </div>

    </div>

    </header>

    <div class="container">
        <div class="row">

       @foreach($sections as $section)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{asset('image')}}/{{$section->image_name}}" alt="">
                    <h1><a href="" class="btn btn-primary">{{$section->section_name}}</a></h1>
                </div>
            </div>
        @endforeach

        </div>

    </div>
@stop