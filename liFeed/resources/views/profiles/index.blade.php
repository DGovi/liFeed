@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fymy1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/87576561_489363241743552_3338024114022514688_n.jpg?_nc_ht=instagram.fymy1-1.fna.fbcdn.net&_nc_ohc=wPoO3_eBUScAX936gUI&oh=3fc4331ddbf2565fb9d2e3036d9b6249&oe=5E9B9A0F" class="rounded-circle">
        </div>

        <div class="row-9 pt-5">
            <div class='d-flex justify-content-between align align-items-baseline'>
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>

            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong> sme number</strong> followers</div>
                <div class="pr-5"><strong>some number</strong>following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4 ">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
