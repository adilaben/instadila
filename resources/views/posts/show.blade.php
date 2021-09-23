@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                        style="max-width: 40px;" alt="">
                </div>
                <div>
                    <div class="font-weight-bold">
                        <a class=" text-dark" href="/profile/{{$post->user->id}}">{{$post->user->username}}
                        </a>
                        <span class="pl-1">&diams;</span>
                        <a href="" class="pl-2">Follow</a>


                    </div>
                </div>
            </div>

            <hr>

            <div>
                <p> <span>
                        <span class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100 "
                                style="max-width: 40px;" alt="">
                        </span>
                        <a class="font-weight-bold text-dark"
                            href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>

            <div>
                <div>Posted at: {{$post->created_at}}</div>
            </div>
        </div>

    </div>


</div>
@endsection