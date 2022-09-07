<title>Add Post</title>

@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-center mt-3" >
        <div class="py-15" >
            <h1 class="text-6xl" >
                Add post
            </h1>
        </div>
        @if ($errors->any())
          <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
        @endif
        <div class="w-4/5 m-auto pt-20 mt-5" >
            <form action="/blog" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" required
                name="title" 
                placeholder="Title..."
                class="block border-b-2 w-full h-20 text-6xl outline-none"
                style="background-color: transparent;"
                >
                <textarea name="desc" required
                placeholder="description...."
                class="py-20 block border-b-2 w-full h-60 text-xl outline-none mt-5"
                style="background-color: transparent;"
                ></textarea>
                <label class="block mt-3 bg-white-rounded-lg uppercase cursor-pointer">
                    <input type="file" name="img" required/>
                </label>
                <button type="submit" class="bg-blue-500 text-gray-100 text-lg font-extrabold py-2 px-3 rounded-3xl">Add</button>
            </form>
        </div>
    </div>
@endsection