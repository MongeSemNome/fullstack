@extends('landing')
@section('windowTitle')
{{$windowTitle}}
@endsection
@section('pageTitle')
{{$pageTitle}}
@endsection

@section('service-content')

    @include('components.getquote')

@endsection

