<div class="intro-section">
  
  <div class="container">
  	<h1 class="pt-5" style="font-family: Monospace; color: #75643e; font-size: 50px">It's the food you love</h1>
  </div>
  <div class="container mt-5" style="max-width: 850px">
<div class="shadow-lg " style="background-color: white">
 <form class="pl-4 pr-4 pb-4 pt-2 " method="POST" action="{{route('f_restaurant')}}">
  {{ csrf_field() }}

   <small>Find Restaurant</small>
  <div class="row">
    

    <div class="col-md-10" style="box-shadow: none">

      <input type="text" class="form-control pb-2" placeholder="Enter your area"  style="border-radius: 0px; height: 50px;" id="restaurant" name="res_name" value="">
     
    
     <div id="res_list" style="z-index: 2;"></div>
    </div>
    <div class="col-md-2 mt-sm-3 mt-md-0 mt-3 pl-3">
      
      <button type="submit" class="btn btn-outline-info pr-4 pl-4 pb-2" style="border-radius: 0px; height: 50px;">Search</button>

    </div>
  </div>
  
</form>
  </div>
</div>
	
</div>
<script>
jQuery(document).ready(function() {

  $('#restaurant').keyup(function(){
    var query=$(this).val();
    $('.intro-section').addClass('position');
    $("#city").addClass('pos_key');
    console.log(query);
    if(query!=''){
             var _token = $('input[name="_token"]').val();
      $.ajax({
        url: '{{route("restaurantList")}}',
        method:'POST',
  
        data: {query: query,_token:_token},
         success:function(data)  
                     {  
                          $('#res_list').fadeIn();  
                          $('#res_list').html(data);  
                     }  ,
      })
      
      
    }

  })

      $(document).on('click', 'li', function(){  
           $('#restaurant').val($(this).text());  
           $('#res_list').fadeOut();  
           $('.intro-section').removeClass('position')
           $('#city').removeClass('pos_key');
      }); 
        $(document).on('click', 'body', function(){  
          // $('#restaurant').val($(this).text());  
           $('#res_list').fadeOut(); 
            $('.intro-section').removeClass('position')
           $('#city').removeClass('pos_key');  
      }); 
  
});
  

</script>