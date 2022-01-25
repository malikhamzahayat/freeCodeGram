@extends('layouts.app')

@section('content')
<div class="container" style="padding: 150px;">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{ $post->image }}" class="w-100">
		</div>
		<div class="col-4">

			<div class="d-flex align-items-center">
				<div style="padding-right: 20px;">
					<img src="{{ $post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 50px;">
				</div>
				<div>
					<div style="font-weight: bold;">
						<a href="/profile/{{ $post->user->id}}" style="text-decoration: none;">
							<span class="text-dark">{{ $post->user->username }}</span>
						</a> 
						<a href="#" style="text-decoration: none;padding-left: 15px;">Follow</a>
					</div>
				</div>
			</div>
			<hr>

			<p> 
				<span style="font-weight: bold;">
					<a href="/profile/{{ $post->user->id}}" style="text-decoration: none; padding-right: 5px;">
						<span class="text-dark">{{ $post->user->username }}</span>
					</a>
				</span> {{$post->caption}} 
			</p>
		</div>
	</div>
</div>
@endsection