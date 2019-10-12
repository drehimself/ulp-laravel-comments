@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->body }}
        </p>

        <div class="mb-5">
            <comments-list></comments-list>
        </div>

        <div>
            @comments(['model' => $post])
        </div>
    </div>
@endsection
