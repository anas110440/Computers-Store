@extends('layout')
@section('title', 'Create New Item')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 ">
            <h1>Create a New Computer</h1>
    </div>
    <div class="flex justify-center pt-8 ">
        <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1 create-form">
            @csrf

            <div>
                <label for="computer-name" class="text-sm">Computer Name</label>
                <input id="computer-name" type="text" name="computer-name" value="{{old("computer-name")}}" class="text-lg border-1" required >
                @error("computer-name")
                    <p class="error">{{$message}}</p>
                @enderror
            </div>


            <div>
                <label for="computer-origin" class="text-sm">Computer Origin</label>
                <input id="computer-origin" type="text" name="computer-origin" value="{{old("computer-origin")}}" class="text-lg border-1" required >
                @error("computer-origin")
                <p class="error">{{$message}}</p>
            @enderror
            </div>


            <div>
                <label for="computer-price" class="text-sm">Computer Price</label>
                <input id="computer-price" type="text" name="computer-price" value="{{old("computer-price")}}" class="text-lg border-1" required >
                @error("computer-price")
                <p class="error">{{$message}}</p>
            @enderror
            </div>


            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>


@endsection
