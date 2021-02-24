@extends('layouts.app')

@section('title', 'Create Tutorial')

@section('content')

<h2>Add New Tutorial</h2>
<hr>

<div class="card">
    <div class="card-body">
        <form action="{{ route('tutorials.store') }}" method="POST">
            @include('forms.tutorialCreateForm')
        </form>
    </div>
</div>

@endsection