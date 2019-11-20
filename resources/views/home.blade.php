@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($api_response['articles'] as $ars)
                    <div class="card" style="width: 50rem;">
                        <img src="{{$ars['urlToImage']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$ars['title']}}</h5>
                            <p class="card-text">{{$ars['description']}}</p>
                            <a href="{{$ars['url']}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
