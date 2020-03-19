@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fymy1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/87576561_489363241743552_3338024114022514688_n.jpg?_nc_ht=instagram.fymy1-1.fna.fbcdn.net&_nc_ohc=wPoO3_eBUScAX936gUI&oh=3fc4331ddbf2565fb9d2e3036d9b6249&oe=5E9B9A0F" class="rounded-circle">
        </div>

        <div class="row-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>some number</strong> posts</div>
                <div class="pr-5"><strong> sme number</strong> followers</div>
                <div class="pr-5"><strong>some number</strong>following</div>
            </div>
            <div class="pt-4"><strong>Daniel Gauvin</strong></div>
            <div>This is my Bio</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fymy1-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s480x480/67832861_2389499807960825_2968399544299214420_n.jpg?_nc_ht=instagram.fymy1-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=uzSYtuwM26AAX-TPB1P&oh=c781eda8f5ae6d8d6b448257069bd1b5&oe=5E9BEBA8" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fymy1-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s480x480/67832861_2389499807960825_2968399544299214420_n.jpg?_nc_ht=instagram.fymy1-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=uzSYtuwM26AAX-TPB1P&oh=c781eda8f5ae6d8d6b448257069bd1b5&oe=5E9BEBA8" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fymy1-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.135.1080.1080a/s480x480/67832861_2389499807960825_2968399544299214420_n.jpg?_nc_ht=instagram.fymy1-2.fna.fbcdn.net&_nc_cat=105&_nc_ohc=uzSYtuwM26AAX-TPB1P&oh=c781eda8f5ae6d8d6b448257069bd1b5&oe=5E9BEBA8" class="w-100">
        </div>
    </div>
</div>
@endsection
