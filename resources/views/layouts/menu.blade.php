<div class=" pt-0 shadow-sm  sticky-top" style="background-color: white;" id="TopMenu">

<nav class="navbar navbar-expand-lg navbar-light ml-5" >
  <a class="navbar-brand" href="#" style="font-size: 30px"><img src="{{Storage::url('food-gly.png')}}" style="height: 50px; width: 50px">Petuk</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      @guest
                            <li class="nav-item nav-itemm">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user fa-lg pr-2"></i>{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item nav-itemm">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item pr-2 pl-2">
        <a class="nav-link" href="#">En</a>
      </li>
                        @endguest


    </ul>

</div>
</nav>
</div>
