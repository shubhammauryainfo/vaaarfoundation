@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['notice']])
@include('_layouts.partials.footer')
@endsection