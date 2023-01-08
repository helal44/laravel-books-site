@extends('layouts.app')


@section('content')


<div class=" col-10 mx-3">
    <form action="{{route('savepost')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class=" form-group m-3">
            <label for=""> post Title</label>
            <input type="text" name="title" placeholder=" ppost title" class=" form-control">
        </div>

        <div class=" form-group m-3">
            <label for=""> post image</label>
            <input type="file" name="image" class=" form-control">
        </div>

        <div class=" form-group m-3">
            <label for=""> post Title</label>
            <textarea name="discriptions" class=" form-control"> post descriptios</textarea>
        </div>

        <div class=" form-group m-3">
            <label for=""> post Author</label>
            <input type="text" name="author" placeholder=" post Author" class=" form-control">
        </div>

        <div class=" form-group m-3">
            <label for=""> post Price</label>
            <input type="number" name="price" class=" form-control" >
        </div>
        <input type="submit" class=" btn btn-primary m-4" value=" create_post">
        </form>


</div>

@endsection
