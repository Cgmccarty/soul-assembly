@extends('layouts.layout')

@section('title')
    {{ $con->title }}
@endsection

@section('content')

<div class="row">
    <div class="col">
        <h3 class="mb-4">About</h3>
        <p class="divide-bottom pb-3">Created by: <i>{{ $con->user->name }}</i></p>
        <p class="divide-bottom pb-3">Class (Gender): <i>{{ $con->class }} ({{ $con->gender }})</i></p>
        <p class="divide-bottom pb-3">Burial Gift: <i>{{ $con->gift }}</i></p>
        <p>Covenant: <i>{{ $con->covenant }}</i></p>
    </div>
    <div class="col divide-left pl-5">
        <h3 class="mb-4">Attributes</h3>
        <p class="input base px-2">Soul Level: <span class="float-right">{{ $con->soul_level }}</span></p>
        <p class="input base px-2">Vigor: <span class="float-right">{{ $con->Vgr }}</span></p>
        <p class="input base px-2">Attunement: <span class="float-right">{{ $con->Atn }}</span></p>
        <p class="input base px-2">Endurance: <span class="float-right">{{ $con->End }}</span></p>
        <p class="input base px-2">Vitality: <span class="float-right">{{ $con->Vit }}</span></p>
        <p class="input base px-2">Strength: <span class="float-right">{{ $con->Str }}</span></p>
        <p class="input base px-2">Dexterity: <span class="float-right">{{ $con->Dex }}</span></p>
        <p class="input base px-2">Intelligence: <span class="float-right">{{ $con->Int }}</span></p>
        <p class="input base px-2">Faith: <span class="float-right">{{ $con->Fth }}</span></p>
        <p class="input base px-2">Luck: <span class="float-right">{{ $con->Luck }}</span></p>
        <p class="input base px-2">Hollowing: <span class="float-right">{{ $con->Hol }}</span></p>
    </div>
    <div class="col divide-left pl-4">
        <h3 class="mb-4">Armor</h3>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/visored-helm.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->head }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/breastplate.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->chest }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/gauntlet.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->hands }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/leg-armor.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->legs }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/power-ring.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->ring1 }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/power-ring.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->ring2 }}</p>
        <p class="divide-bottom pb-3"><img class="mr-1" src="{{ asset('icons/power-ring.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->ring3 }}</p>
        <p><img class="mr-1" src="{{ asset('icons/power-ring.png') }}" style="width: 40px; height: 40px;"></img> {{ $con->ring4 }}</p>
    </div>
    <div class="col divide-left pl-4">
        <h3 class="mb-4">Arms</h3>
        <p class="divide-bottom pb-3"><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-1.png"></img> {{ $con->rh1 }}</p>
        <p class="divide-bottom pb-3"><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-2.png"></img> {{ $con->rh2 }}</p>
        <p class="divide-bottom pb-3"><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-3.png"></img> {{ $con->rh3 }}</p>
        <p class="divide-bottom pb-3"><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-1.png"></img> {{ $con->lh1 }}</p>
        <p class="divide-bottom pb-3"><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-2.png"></img> {{ $con->lh2 }}</p>
        <p><img class="m-1" style="height: 40px; width: 40px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-3.png"></img> {{ $con->lh3 }}</p>
    </div>







</div>
@endsection
