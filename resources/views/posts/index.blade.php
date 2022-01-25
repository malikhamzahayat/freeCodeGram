@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($posts as $post)
	<div class="row">
		<div class="col-4 offset-4">
			<a href="/profile/{{$post->user->id}}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
		</div>
	</div>
	<div class="row pt-2 pb-4">
		<div class="col-4 offset-4">

			<p> 
				<span style="font-weight: bold;">
					<a href="/profile/{{ $post->user->id}}" style="text-decoration: none; padding-right: 5px;">
						<span class="text-dark">{{ $post->user->username }}</span>
					</a>
				</span> {{$post->caption}} 
			</p>
		</div>
	</div>
	@endforeach
</div>
@endsection