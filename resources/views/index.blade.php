@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-11 frase">
      <img src="http://prospects.cabify.zarego.com/img/frase.png" border="0">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5 menu">
      <a href="{{ route('video') }}">
        <img src="http://prospects.cabify.zarego.com/img/video.png" class="img-responsive" border="0">
      </a>
    </div>
    <div class="col-sm-6 menu">
      <a href="{{ route('prospect.index') }}">
        <img src="http://prospects.cabify.zarego.com/img/conocer.png" class="img-responsive" border="0">
      </a>
    </div>
    <div class="col-sm-12">
      <img src="http://prospects.cabify.zarego.com/img/footer.png" class="img-responsive" border="0">
    </div>
  </div>
@endsection
