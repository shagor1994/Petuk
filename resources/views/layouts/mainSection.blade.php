<section class="detail" id="detail">
  <div class=container>
    <div class="row">
      <div class="col-md-2">

        <div class="card" id="sideMenu">
          <div class="card-header" style="background-color: #FFFF;">
            <h4 class="font-weight-bold">Catagory</h4>
          </div>
          <nav class="navbar navbar-light" style="font-weight: 600;">
            <ul class="navbar-nav">
              @foreach($menu as $val)
              <li class="nav-item" style="border:0px;">
                <a class="nav-link p-1" href="#" id="{{$val->id}}">{{$val['nav_li']}}</a>
              </li>


              @endforeach




            </ul>
          </nav>
        </div>

      </div>
      <div class="col-md-6">

        @foreach($menu as $value)
        <h5 style="font-weight:600;" id="{{$value->id}}a">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          {{$value->nav_li}}
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></h5>
            @foreach($value->fooditems as $val)
            <div class="pt-2">
            <div class="card border setMenu">
              <div class="card-body">
                <div class="text-center">
                  <div class="" style="border-bottom:1px solid blue">
                  <h6 class="card-title">
                    {{$val['name']}}
                  </h6>
                </div>
                <div class="text-muted mt-2">{{$val['detail']}}
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4 pt-1">
                      <small class="text-muted">Tk:
                        {{$val['price']}}
                      </small>
                    </div>
                    <div class="col-sm-4 pt-1">
                      <small class="text-muted">1:3</small>
                    </div>
                    <div class="col-sm-4 pt-1">
                      <button class="btn btn-sm btn-outline-primary clickMe" name="{{$val->name}}" value="{{$val->price}}" id="{{$val->id}}">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                </div>

              </div>
            </div>

        </div>
      </div>


          @endforeach

          @endforeach
        </div>
        <div class="col-md-4">
          <div class="card border" id="shopping-card"  >
            <div class="card-body">
              <h5 class="card-title">Order Detail</h5>
              <div id="orderItems"></div>
            </div>
          </div>

        </div>


          </div>
          <!-- <div class="col-sm-6 col-6">
            <div class="float-right">
              <button type="button" name="button"></button>
            </div> -->


      </section>
