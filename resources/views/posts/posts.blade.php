@extends('layouts.app')



@section('content')

<div class=" container container-fluid">
    <div class=" row ">
            @foreach ($post as $item )

                <div class=" col-3 m-1">
                    <div class="card" >
                        <img class="card-img-top" src="{{asset('storage/images/'.$item->image)}}" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title">{{$item->title}}</h2>
                          <h3>Author :{{$item->author}}</h3>
                          <h5 style="color: red;">Price :{{$item->price}}</h5>
                          <p class="card-text">{{$item->descriptions}}</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                      </div>

                </div>
            @endforeach
    </div>


@endsection
