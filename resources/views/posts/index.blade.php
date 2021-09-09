@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row pt-2 pb-1">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span class="font-weight-bold">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                        style="max-width: 40px;" alt="">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark h4">{{ $post->user->username }}  </span> 
                        </a>
                        <span class="text-dark h7">|  {{$post->created_at}}  </span> 
                    </span> 
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection