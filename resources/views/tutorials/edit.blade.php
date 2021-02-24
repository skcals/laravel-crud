@extends('layouts.app')

@section('title', 'Edit Tutorial')

@section('content')

<h2>Edit Tutorial</h2>
<hr>

<div class="card">
    <div class="card-body">
        <form action="{{ route('tutorials.update', $tutorial->id) }}" method="POST">
            @method('PUT')
            @include('forms.tutorialCreateForm')
        </form>
    </div>
</div>

@endsection