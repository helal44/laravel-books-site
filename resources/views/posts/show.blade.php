@extends('layouts.app')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Posts</title>
</head>
<body>

   <div class=" container ">

    <div class=" row ">
        <div class=" d-flex my-4">
            <p> posts</p>
            <a href="{{route('addpost')}}" class=" btn btn-primary  mx-5"> Add Post</a>
            <a href="{{route('posts')}}" class=" btn btn-primary  mx-5"> Main</a>
        </div>
       <div class=" col-12">

        <table class=" table table-hover table-responsive">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Descriptions</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($post as $item )

                <tr>
                    <td><img src="{{asset('storage/images/'.$item->image)}}" width="50px" alt="img"></td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->descriptions}}</td>
                    <td><a href="{{route('deletepost',$item->id)}}" class=" btn  btn-danger"> Delete</a></td>
                </tr>

                @endforeach
            </tbody>

        </table>


       </div>
    </div>

    </div>



   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> --}}

@section('content')

<div class="  container ">
    <div class=" d-flex my-4">
        <p> posts</p>
        <a href="{{route('addpost')}}" class=" nav nav-link  mx-5"> Add Post</a>
        <a href="{{route('posts')}}" class="  nav nav-link  mx-5"> Main</a>
    </div>
   <div class=" col-12">

    <table class=" table table-hover table-responsive">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Descriptions</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($post as $item )

            <tr>
                <td><img src="{{asset('storage/images/'.$item->image)}}" width="50px" alt="img"></td>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->descriptions}}</td>
                <td><a href="{{route('deletepost',$item->id)}}" class=" btn  btn-danger"> Delete</a></td>
            </tr>

            @endforeach
        </tbody>

    </table>


   </div>
</div>


@endsection
