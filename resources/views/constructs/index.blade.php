@extends('layouts.layout')

@section('title')
    Your Profile
@endsection

@section('content')

@if (Auth::user()->constructs->count() == 0)

<p>You currently have no constructs to display.</p>
<p>Please create one by opening the menu and clicking 'New Construct'!</p>

@else

@foreach(Auth::user()->constructs as $construct)
<div class="card m-5" style="background-color: #444">
    <div class="card-header" style="border-color: #9E937B !important;">
        <div class="row">
            <div class="col">
                <h4 class="siteTitle">{{ $construct->title }}</h4>
                <span>Soul Level: {{ $construct->soul_level }}</span>
            </div>
            <div class="col my-auto">
                <a href="/constructs/{{ $construct->id }}" class="float-right view ml-2 mt-1 mr-1"><i class="far fa-file-alt"></i></a>
                <a href="/constructs/{{ $construct->id }}/edit" class="float-right edit"><i class="fas fa-edit m-2"></i></a>
                <form action="/constructs/{{ $construct->id }}" class="mr-5" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="float-right delete" type="submit"><i class="text-danger fas fa-trash-alt m-2"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p class="m-2">Class: {{ $construct->class }}</p>
                <p class="m-2">Gender: {{ $construct->gender }}</p>
            </div>
            <div class="col">
                <p class="m-2">Burial Gift: {{ $construct->gift }}</p>
                <p class="m-2">Covenant: {{ $construct->covenant }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach

@endif

@endsection
