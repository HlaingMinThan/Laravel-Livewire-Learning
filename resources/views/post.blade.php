@extends('layouts')
@section('content')
        <div class=" my-6">
            <h1 class="mb-5 text-2xl text-blue-500"><a href="posts/{{$post->id}}">{{$post->title}}</a></h1>
            <p>{{$post->body}}</p>
            <h1 class="text-2xl my-10">Replies</h1>
            
            <div>
                @foreach ($post->comments as $comment)
                    <div class="border b-1 mb-10 shadow-sm p-10">
                        <h1 class=" mb-4">replied by
                            <span class="mb-5 text-lg text-blue-500 ml-2">{{$comment->owner->name}}</span> 
                            <span>{{$comment->created_at->diffForHumans()}}</span></h1>
                        <p class="text-gray-600 flex">
                            {{$comment->body}}
                        </p>
                    </div>
                @endforeach
            </div>

            <form action="{{route('comments.store',$post->id)}}">
                <textarea name="body" id="" cols="20" rows="7" class="border border-gray-100 p-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md"></textarea>
                @error('body')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
                <button type="submit" class="bg-indigo-500 text-white p-3 rounded mt-4">Comment</button>
            </form>
        </div>
@endsection
