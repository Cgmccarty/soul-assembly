@extends('layouts.layout')

@section('title')
    Edit Construct
@endsection

@section('content')
<form class="form" action="/constructs/{{ $con->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="row">

        <div class="col-4">
            <div id="classSelect" class="pb-3">
                <div class="row no-gutters">
                    <label id="titleLabel" for="title_input" class="col my-1">Name</label>
                    <input id="title_input" type="text" name="title_input" placeholder="Name here..." class="input text-truncate text-dark" value="{{ $con->title }}">
                </div>
                <div class="row no-gutters">
                    <label id="classLabel" for="class_input" class="col my-1">Class</label>
                    <select id="class_input" class="input text-dark" name="class_input">
                        <option value="Knight" @if($con->class === "Knight") selected='selected' @endif>Knight</option>
                        <option value="Mercenary" @if($con->class === "Mercenary") selected='selected' @endif>Mercenary</option>
                        <option value="Warrior" @if($con->class === "Warrior") selected='selected' @endif>Warrior</option>
                        <option value="Herald" @if($con->class === "Herald") selected='selected' @endif>Herald</option>
                        <option value="Thief" @if($con->class === "Thief") selected='selected' @endif>Thief</option>
                        <option value="Assassin" @if($con->class === "Assassin") selected='selected' @endif>Assassin</option>
                        <option value="Sorcerer" @if($con->class === "Sorcerer") selected='selected' @endif>Sorcerer</option>
                        <option value="Pyromancer" @if($con->class === "Pyromancer") selected='selected' @endif>Pyromancer</option>
                        <option value="Cleric" @if($con->class === "Cleric") selected='selected' @endif>Cleric</option>
                        <option value="Deprived" @if($con->class === "Deprived") selected='selected' @endif>Deprived</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <label id="genderLabel" for="gender_input" class="col my-1">Gender</label>
                    <select id="gender_input" class="input text-dark" name="gender_input">
                        <option value="M" @if($con->gender === "M") selected='selected' @endif>Male</option>
                        <option value="F" @if($con->gender === "F") selected='selected' @endif>Female</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <label id="giftLabel" for="gift_input" class="col my-1">Gift</label>
                    <select id="gift_input" class="input text-dark" name="gift_input">
                        <option value="null">None</option>
                        <option value="lifering">Life Ring</option>
                        <option value="divineblessing">Divine Blessing</option>
                        <option value="hiddenblessing">Hidden Blessing</option>
                        <option value="blackfirebomb">Black Firebomb</option>
                        <option value="firegem">Fire Gem</option>
                        <option value="sovereignlesssoul">Sovereignless Soul</option>
                        <option value="goldcoin">Gold Coin</option>
                        <option value="crackedredeyeorb">Cracked Red Eye Orb</option>
                        <option value="youngwhitebranch">Young White Branch</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/covenant.png"></img>
                    <label id="covLabel" for="cov_input" class="col ml-1 my-1">Covenant</label>
                    <select id="cov_input" class="input text-truncate text-dark" name="cov_input">
                        <option value="warriorsofsunlight" @if($con->covenant === "warriorsofsunlight") selected = 'selected' @endif>Warriors of Sunlight</option>
                        <option value="wayofblue" @if($con->covenant === "wayofblue") selected = 'selected' @endif>Way of Blue</option>
                        <option value="bluesentinels" @if($con->covenant === "bluesentinels") selected = 'selected' @endif>Blue Sentinels</option>
                        <option value="bladesofthedarkmoon" @if($con->covenant === "bladesofthedarkmoon") selected = 'selected' @endif>Blades of the Darkmoon</option>
                        <option value="rosariasfingers" @if($con->covenant === "rosariasfingers") selected = 'selected' @endif>Rosarias Fingers</option>
                        <option value="moundmaker" @if($con->covenant === "moundmaker") selected = 'selected' @endif>Mound Maker</option>
                        <option value="watchdogsoffarron" @if($con->covenant === "watchdogsoffarron") selected = 'selected' @endif>Watchdogs of Farron</option>
                        <option value="aldrichfaithful" @if($con->covenant === "aldrichfaithful") selected = 'selected' @endif>Aldrich Faithful</option>
                        <option value="spearsofthechurch" @if($con->covenant === "spearsofthechurch") selected = 'selected' @endif>Spears of the Church</option>
                    </select>
                </div>
            </div>

            <div id="parameters" class="mt-2 pb-2">
                <div class="row no-gutters text-left">
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col pl-2 ml-4 pr-2" style="font-size: 8px;">Base/</label>
                    <label class="col" style="font-size: 8px;">Desired</label>
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/level.png"></img>
                    <label id="soulLabel" for="soul_input" class="col ml-1 my-1">Soul Level</label>
                    <input disabled id="soulBase" type="number" value="10" class="input col parameter base mr-2 text-light">
                    <input id="soul_input" name="soul_input" type="number" value="{{ $con->soul_level }}" class="input col parameter base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/vigor.png"></img>
                    <label for="vgr" class="col ml-1 my-1">Vigor</label>
                    <input disabled id="vgrBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="vgr" name="vgr" type="number" value="{{ $con->Vgr }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/attunement.png"></img>
                    <label for="atn" class="col ml-1 my-1">Attunement</label>
                    <input disabled id="atnBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="atn" name="atn" type="number" value="{{ $con->Atn }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/endurance.png"></img>
                    <label for="end" class="col ml-1 my-1">Endurance</label>
                    <input disabled id="end" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="end" name="end" type="number" value="{{ $con->End }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/vitality.png"></img>
                    <label for="vit" class="col ml-1 my-1">Vitality</label>
                    <input disabled id="vitBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="vit" name="vit" type="number" value="{{ $con->Vit }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/strength.png"></img>
                    <label for="str" class="col ml-1 my-1">Strength</label>
                    <input disabled id="strBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="str" name="str" type="number" value="{{ $con->Str }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/dexterity.png"></img>
                    <label for="dex" class="col ml-1 my-1">Dexterity</label>
                    <input disabled id="dexBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="dex" name="dex" type="number" value="{{ $con->Dex }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/intelligence.png"></img>
                    <label for="int" class="col ml-1 my-1">Intelligence</label>
                    <input disabled id="intBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="int" name="int" type="number" value="{{ $con->Int }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/faith.png"></img>
                    <label for="fth" class="col ml-1 my-1">Faith</label>
                    <input disabled id="fthBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="fth" name="fth" type="number" value="{{ $con->Fth }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/luck.png"></img>
                    <label for="luck" class="col ml-1 my-1">Luck</label>
                    <input disabled id="luckBase" value="10" type="number" class="input col parameter base mr-2 text-light">
                    <input id="luck" name="luck" type="number" value="{{ $con->Luck }}" class="input col parameter text-dark">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/hollowing.png"></img>
                    <label for="hol" class="col ml-1 my-1">Hollowing</label>
                    <input disabled id="holBase" value="0" type="number" class="input col parameter base mr-2 text-light">
                    <input id="hol" name="hol" type="number" value="{{ $con->Hol }}" class="input col parameter text-dark">
                </div>
            </div>
            <div id="souls" class="mt-3">
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/souls.png"></img>
                    <label for="soulsheld" class="col ml-1 my-1">Souls</label>
                    <input disabled id="soulsheld" value="50000" type="number" class="input col base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/souls-required.png"></img>
                    <label for="soulsneeded" class="col ml-1 my-1">Required Souls</label>
                    <input disabled id="soulsneeded" value="50000" type="number" class="input col base text-light">
                </div>
            </div>
        </div>

        <div class="col-4">

            <div id="armor">
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/visored-helm.png') }}"></img>
                    <label for="head_input" class="col ml-1 my-1">Head</label>
                    <select id="head_input" name="head_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="armor in armors" :value="armor.name">@{{ armor.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/breastplate.png') }}"></img>
                    <label for="chest_input" class="col ml-1 my-1">Chest</label>
                    <select id="chest_input" name="chest_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="armor in armors" :value="armor.name">@{{ armor.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/gauntlet.png') }}"></img>
                    <label for="hands_input" class="col ml-1 my-1">Hands</label>
                    <select id="hands_input" name="hands_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="armor in armors" :value="armor.name">@{{ armor.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/leg-armor.png') }}"></img>
                    <label for="legs_input" class="col ml-1 my-1">Legs</label>
                    <select id="legs_input" name="legs_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="armor in armors" :value="armor.name">@{{ armor.name }}</option>
                    </select>
                </div>
            </div>

            <div class="mt-2">
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/power-ring.png') }}"></img>
                    <label for="ring1_input" class="col ml-1 my-1">Ring 1</label>
                    <select id="ring1_input" name="ring1_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="ring in rings" :value="ring.name">@{{ ring.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/power-ring.png') }}"></img>
                    <label for="ring2_input" class="col ml-1 my-1">Ring 2</label>
                    <select id="ring2_input" name="ring2_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="ring in rings" :value="ring.name">@{{ ring.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/power-ring.png') }}"></img>
                    <label for="ring3_input" class="col ml-1 my-1">Ring 3</label>
                    <select id="ring3_input" name="ring3_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="ring in rings" :value="ring.name">@{{ ring.name }}</option>
                    </select>
                </div>
                <div class="row no-gutters">
                    <img class="col" src="{{ asset('icons/power-ring.png') }}"></img>
                    <label for="ring4_input" class="col ml-1 my-1">Ring 4</label>
                    <select id="ring4_input" name="ring4_input" class="input armor text-truncate text-dark">
                        <option value="null">None</option>
                        <option v-for="ring in rings" :value="ring.name">@{{ ring.name }}</option>
                    </select>
                </div>
            </div>

            <div id="weapons" class="mt-2 pb-3">
                <div class="row no-gutters">
                    <div class="col left">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-1.png"></img>
                            <label for="lh1_input" class="col ml-1 my-1">LH 1</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="lh1_input" name="lh1_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col right">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-1.png"></img>
                            <label for="rh1_input" class="col ml-1 my-1">RH 1</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="rh1_input" name="rh1_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col left">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-2.png"></img>
                            <label for="lh2_input" class="col ml-1 my-1">LH 2</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="lh2_input" name="lh2_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col right">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-2.png"></img>
                            <label for="rh2_input" class="col ml-1 my-1">RH 2</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="rh2_input" name="rh2_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters mt-1">
                    <div class="col left">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/l-weapon-3.png"></img>
                            <label for="lh3_input" class="col ml-1 my-1">LH 3</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="lh3_input" name="lh3_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col right">
                        <div class="row no-gutters">
                            <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets%3Amenu-icons/r-weapon-3.png"></img>
                            <label for="rh3_input" class="col ml-1 my-1">RH 3</label>
                        </div>
                        <div class="row no-gutters">
                            <select id="rh3_input" name="rh3_input" class="input weapon col text-truncate text-dark">
                                <option value="null">None</option>
                                <option v-for="weapon in weapons" :value="weapon.name">@{{ weapon.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="twohanded row no-gutters mt-2 pb-1">
                    <input type="checkbox" name="2-handed" class="mr-1" id="2-handed" value=""></input>
                    <label for="2-handed">2-handed</label>
                </div>
                <div class="row no-gutters mt-2">
                    <label class="col ml-1 my-1">Active Effects</label>
                </div>
                <div class="row no-gutters">
                    <textarea disabled class="base col" style="border-radius: 3px; border-color: lightgrey; background-color: #444; height: 130px;"></textarea>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div id="basePower">
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/hp.png"></img>
                    <label class="col ml-1 my-1">HP</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/fp.png"></img>
                    <label class="col ml-1 my-1">FP</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/stamina.png"></img>
                    <label class="col ml-1 my-1">Stamina</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/equip-load.png"></img>
                    <label class="col ml-1 my-1">Equip Load</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/weight-ratio.png"></img>
                    <label class="col ml-1 my-1">Weight Ratio</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/poise.png"></img>
                    <label class="col ml-1 my-1">Poise</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/item-discovery.png"></img>
                    <label class="col ml-1 my-1">Item Discovery</label>
                    <input disabled type="number" value="10" class="input col text-right base text-light">
                </div>
            </div>
            <div id="defense" class="mt-2">
                <div class="row no-gutters text-left">
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col pl-2 ml-4 pr-2" style="font-size: 8px;">Defense/</label>
                    <label class="col" style="font-size: 8px;">Absorption</label>
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/physical-def.png"></img>
                    <label class="col ml-1 my-1">Physical</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/strike-def.png"></img>
                    <label class="col ml-1 my-1">VS Strike</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/slash-def.png"></img>
                    <label class="col ml-1 my-1">VS Slash</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/thrust-def.png"></img>
                    <label class="col ml-1 my-1">VS Thrust</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/magic-def.png"></img>
                    <label class="col ml-1 my-1">Magic</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/fire-def.png"></img>
                    <label class="col ml-1 my-1">Fire</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/lightning-def.png"></img>
                    <label class="col ml-1 my-1">Lightning</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/dark-def.png"></img>
                    <label class="col ml-1 my-1">Dark</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
            </div>
            <div id="resistances" class="mt-2">
                <div class="row no-gutters text-left">
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col" style="visibility: hidden;"></label>
                    <label class="col pl-2 ml-4 pr-2" style="font-size: 8px;">Resistances/</label>
                    <label class="col" style="font-size: 8px;">Armor</label>
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/bleed.png"></img>
                    <label class="col ml-1 my-1">Bleed</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/poison.png"></img>
                    <label class="col ml-1 my-1">Poison</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/frost.png"></img>
                    <label class="col ml-1 my-1">Frost</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
                <div class="row no-gutters">
                    <img style="height: 25px; width: 25px; border-radius: 3px;" src="http://darksouls3.wdfiles.com/local--files/image-sets:menu-icons/curse.png"></img>
                    <label class="col ml-1 my-1">Curse</label>
                    <input disabled type="number" value="10" class="input parameter text-right base text-light mr-2">
                    <input disabled type="number" value="10" class="input parameter text-right base text-light">
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-3 mb-5">
        <button class="navbtn" type="submit">Update</button>
    </div>
</form>
@endsection
