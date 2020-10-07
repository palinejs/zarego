@extends('layouts/app')

@section('content')

	<div class="row">
		<div class="col-sm-12">
			<div class='embed-container'>
				<iframe src='https://player.vimeo.com/video/288534941?byline=0&portrait=0&title=0' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</div>
		</div>
		<div class="col-sm-4"></div>

		<div class="col-sm-4 menu-video">
			<a href="{{ route('prospect.index') }}">
				<img src="http://prospects.cabify.zarego.com/img/conocer.png" class="img-responsive" border="0">
			</a>
		</div>
		
		<div class="col-sm-4"></div>
		
		<div class="col-sm-12 footer">
			<img src="http://prospects.cabify.zarego.com/img/footer.png" class="img-responsive" border="0">
		</div>
	</div>
@endsection