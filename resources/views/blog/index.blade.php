@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-center mt-3" >
        <div class="py-15 border-b border-gray-200" >
            <h1 class="text-6xl" >
                Blog Posts
            </h1>
        </div>
    </div>
@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="bg-green-500 text-gray-100 text-lg font-extrabold py-2 px-3 rounded-3xl">
            Create new post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b  border-gray-200 mt-9 " >
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/03/26/13/09/cup-of-coffee-1280537_960_720.jpg" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{$post->title}}
            </h2>
            <span class="text-gray-500" >
                By <span class="font-bold italic text-gray-800">{{$post->user->name}}
                </span>, created on {{date('jS M Y',strtotime($post->updated_at))}}
            </span>
            <p class="text-xl text-gary-700 pt-8 pb-10 leading-8 font-light " >
                <?php
                    if (strlen($post->desc) > 40) {
                        echo substr($post->desc,0,50) . "....";
                    }else 
                    echo $post->desc
                ?>
                
                {{-- {{$post->desc}} --}}
            </p>
            <a href="/blog/{{$post->id}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Keep reading ..</a>
        </div>
    </div>
    @endforeach

    <div class="m-auto w-4/5">
        {{$posts->links()}}
    </div>
@endsection