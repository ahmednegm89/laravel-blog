@extends('layouts.app')
@section('content')


<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b  border-gray-200 mt-5 " >
    <div>
        <img src="{{asset("imgs/$post->img")}}" alt="">
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
            {{$post->desc}}
        </p>
        <a href="/blog/{{$post->id}}/edit" class="uppercase text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl" style="background-color: rgb(131, 5, 64)" >edit</a>
        <form action="/blog/{{$post->id}}" class="mt-5" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class="uppercase  text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl cursor-pointer " style="background-color: red">
        </form>
    </div>
</div>
@endsection