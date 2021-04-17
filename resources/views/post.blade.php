@extends('layouts')
@section('content')
        <div class=" my-6">
            <h1 class="mb-5 text-2xl text-blue-500"><a href="posts/{{$post->id}}">{{$post->title}}</a></h1>
            <p>{{$post->body}}</p>
            <livewire:comment-box :post="$post"/>
        </div>
@endsection
