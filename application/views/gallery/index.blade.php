@layout('master')

@section('content')

<div id="gallery">
	<ul class="thumbnails">
	@foreach ($images as $image)
		<li class="span2">
			<a href="/n/{{$image->id}}" class="thumbnail">
				<img src="https://i.mgba.co/thumb/{{$image->file_name}}" alt="">
			</a>
		</li>
	@endforeach
	</ul>
</div>

@endsection