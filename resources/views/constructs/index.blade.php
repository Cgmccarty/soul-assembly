@extends('layouts.layout')

@section('title')
    Your Profile
@endsection

@section('content')

@if (Auth::user()->constructs->count() == 0)

<p>You currently have no constructs to display. Please create one by opening the menu and clicking 'New Construct'!</p>

@else

@foreach(Auth::user()->constructs as $construct)
<div class="card m-5" style="background-color: #444">
    <h4 class="card-header" style="border-color: #9E937B !important;">
        <div class="row">
            <div class="col">
                <span class="siteTitle mb-4">{{ $construct->title }}</span>
                <br/>
                <span>Soul Level: {{ $construct->soul_level }}</span>
            </div>
            <div class="col">
                <a href="/constructs/{{ $construct->id }}/edit" class="float-right edit"><i class="fas fa-edit m-2"></i></a>
                <form action="/constructs/{{ $construct->id }}" class="mr-5" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="float-right delete" type="submit"><i class="text-danger fas fa-trash-alt m-2"></i></button>
                </form>
            </div>
        </div>
    </h4>
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
