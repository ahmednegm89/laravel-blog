@extends('layouts.app')
@section('content')
    <div  class="background-image grid grid-cols-1 m-auto" >
        <div class=" flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sa:m-auto w-4/5 block text-center" >
                <h1 class="sm: text-white text-5x1 uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/" class="text-center bg-gray-50 text-gray-700 py-2 px-4
                font-bold text-xl uppercase">
                read more
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 mt-10" >
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/03/26/13/09/cup-of-coffee-1280537_960_720.jpg" alt=""
            width="800"
            >
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block" >
            <h2 class="text-3xl font-extrabold text-gray-900" >
                Do you want to become a better developer?
            </h2>
            <p class=" text-gray-700 text-lg" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, ad! O
                dio iste assumenda voluptates.
            </p>
            <p class="py-3 mb-4 font-extrabold text-gray-500 text-s" >
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, ad! O
                dio iste assumenda voluptates ex illum.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s 
            font-extrabold py-3 px-8 rounded-3xl">
                find more 
            </a>
        </div>
    </div>
@endsection