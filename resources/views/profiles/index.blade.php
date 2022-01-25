@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3" style="padding-left: 103px;">
            <img src="{{ $user->profile->profileImage()}}" class="rounded-circle w-100" >
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-3">
                    <div class="h3">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>


                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            
            <div class="d-flex">
                <div style="padding-right: 30px;"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div style="padding-right: 30px;"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div style="padding-right: 30px;"><strong>{{ $user->following->count() }}</strong> followings</div>
            </div>
            <div style="padding-top: 40px; font-weight: bold;"> {{ $user->profile->title }}</div>
            <div>{{$user->profile->description}} </div>
            <div><a href="#">{{$user->profile->url ?? 'N/A' }}</a></div>

        </div>

    </div>
    <div class="row pt-5">
        
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
