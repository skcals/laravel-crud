@extends('layouts.app')

@section('title', 'Show Tutorial')

@section('content')

<h2>Show Tutorial</h2>
<hr>

<div class="card">
    <div class="card-body">

        <div class="mb-3">
            <b>Title</b>
            <p>{{ $tutorial->title }}</p>
        </div>
        <div class="mb-3">
            <b>Tags</b>
            <p>{{ $tutorial->tags }}</p>
        </div>
        <div class="mb-3">
            <b>Price</b>
            <p>${{ $tutorial->price }}</p>
        </div>
        <div class="mb-3">
            <b>Level</b>
            <p>@include('components.levelBadges', ['level'=> $tutorial->level_name])</p>
        </div>

        <hr>

        <a href="{{ route('tutorials.edit', $tutorial->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ url()->previous() }}" class="btn btn-dark">Back</a>

    </div>
</div>

@endsection