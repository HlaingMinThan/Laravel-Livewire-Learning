@extends('layouts')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Edit Title <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border b-1 border-gray-300 p-2 w-full" name="title" id="title" value="{{$post->title}}" ></input>
                        @error('title')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <label class="text-xl text-gray-600">Edit Body <span class="text-red-500">*</span></label></br>
                        <textarea class="border b-1 border-gray-300 p-2 w-full" name="body" class="border b-1 border-gray-500">{{$post->body}}</textarea>
                        @error('body')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-8">
                        <label class="text-xl text-gray-600">Upload Photo<span class="text-red-500 text-xs ml-3">optional</span></label></br>
                        <input class="mt-3" type="file" name="photo" id="">
                        <div><img src="{{asset($post->photo)}}" class="object-contain h-48 mt-5" alt="post photo"></div>
                        @error('photo')
                        <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="">
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" >Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection