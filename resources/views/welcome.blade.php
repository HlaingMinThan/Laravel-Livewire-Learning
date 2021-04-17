@extends('layouts')
@section('content')
    {{-- <livewire:contact-form/> --}}
    {{-- <livewire:search/> --}}
    {{-- <livewire:datatable/> --}}
    @foreach ($posts as $post)
        <div class=" mb-10 shadow-md p-10">
            <h1 class="mb-5 text-2xl text-blue-500"><a href="posts/{{$post->id}}">{{$post->title}}</a></h1>
            <p>{{$post->body}}</p>
        </div>
    @endforeach
@endsection
