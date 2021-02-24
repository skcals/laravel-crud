@extends('layouts.app')

@section('title', 'All Tutorials')

@section('content')

<h2>All Tutorials </h2>
<hr>

@if(count($tutorials)>0)
@include('components.dataTable')
@else
<div class="d-flex justify-content-center">
    <a href="{{ route('tutorials.create')}}" class="btn btn-primary"> Create New Tutorial</a>
</div>
@endif

@endsection