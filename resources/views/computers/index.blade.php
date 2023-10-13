@extends('layout')
@section('title', 'Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ">
            <h1>Computers</h1>
    </div>
    <div >
        @if (count($computers) > 0)
            @foreach ($computers as $item)
            <p class="computers-list">
                <a href="{{route('computers.show', $item['id'])}}">{{$item['name']}} &nbsp; | &nbsp; Made In {{$item['origin']}} &nbsp; | &nbsp; It's Cost {{$item['price']}}$</a>
            </p>
            @endforeach
        @else
            <p>There Is No Computers Right Now</p>


        @endif
    </div>

@endsection
