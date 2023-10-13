@extends('layout')
@section('title', $computer['name'])

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 ">
            <h1>Computers</h1>
    </div>
    <div class="mt-8">
                <p class="single-item">{{$computer['name']}} &nbsp; | &nbsp; Made In {{$computer['origin']}} &nbsp; | &nbsp; It's Cost <strong>{{$computer['price']}}$</strong></p>
        <a href="{{route('computers.edit', $computer->id)}}"  class="edit-item">Edit Item</a>
        <form action="{{route('computers.destroy', $computer->id)}}" method="post">
            @csrf
            @method('DELETE')
        <input type="submit" class="delete-item" value="Delete Item">
        </form>
    </div>

@endsection
