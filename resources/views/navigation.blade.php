<button class="sticky row openbtn" id="openbtn" type="button" v-on:click="openNav"><i class="fas fa-bars"></i></button>
<div class="leftnav sticky-top" id="myLeftNav">
        <button class="row closebtn" type="button" v-on:click="closeNav"><i class="fas fa-minus"></i></button>
        <button class="row navbtn siteTitle" type="button"><a class="nav-link" href="/">Soul Assembly</a></button>
        <button class="row navbtn" type="button"><a class="nav-link" href="/intro">Introduction</a></button>
        <button class="row navbtn" type="button"><a class="nav-link" href="/constructs/create">New Construct</a></button>
        @guest
            <button class="row navbtn" type="button"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></button>
            @if (Route::has('register'))
                <button class="row navbtn" type="button"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
            @endif
        @else
            <button class="row navbtn"><a id="navbarDropdown" class="nav-link" href="/constructs" role="button" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a></button>

            <button class="row navbtn"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
</div>
