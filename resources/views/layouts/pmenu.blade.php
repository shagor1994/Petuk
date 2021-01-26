
<div class=" pt-0 shadow-sm fixed-top" style="background-color: white">
<!--    <button type="button" class="btn btn-outline-primary c-m">Calorie Meter</button> -->
<button type="button" class="btn-outline-primary c-m btn" data-toggle="modal" data-target="#exampleModalLong">
 Calorie Meter
</button>

<nav class="navbar navbar-expand-lg navbar-light ml-5" >
  <a class="navbar-brand" href="#" style="font-size: 30px"><img src="{{Storage::url('food-gly.png')}}" style="height: 50px; width: 50px">Petuk</a>
 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
    <div class="float-md-left">
     <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      
    </ul>
  </div>

    <div class="ml-auto float-md-left">
    <ul class="navbar-nav">
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
    
</div>
</nav>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>