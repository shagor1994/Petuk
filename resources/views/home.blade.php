 @extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       
                     @if(empty($res)) 
                         {{"you are new to this platform"}}

                         @include('layouts.editor1')
                     @else
                         {{$res->address}}
                          
                        @include('layouts.detail')
                     @endif
                      <div id="change">
                      
                       
                       

                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
 
$('.btn-hide').click(function(event) {
   $('#detail-section').hide();
   $('#change').show();

    
});

});
</script>
@endsection


