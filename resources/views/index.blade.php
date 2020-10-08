@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-11 frase">
      <img src="{{ asset('img/frase.png') }}" border="0">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5 menu">
      <a href="{{ route('video') }}">
        <img src="{{ asset('img/video.png') }}" class="img-responsive" border="0">
      </a>
    </div>
    <div class="col-sm-6 menu">
      <a href="{{ route('prospect.index') }}">
        <img src="{{ asset('img/conocer.png') }}" class="img-responsive" border="0">
      </a>
    </div>
    <div class="col-sm-12">
      <img src="{{ asset('img/footer.png') }}" class="img-responsive" border="0">
    </div>
  </div>
@endsection
