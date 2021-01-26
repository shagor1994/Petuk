  @extends('layouts.app')
  @section('content')

  <div class="container" id="editor-section">

      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                

   
   
         <table class="table table-bordered">
       <tbody>
       @foreach($menu as $menu)
          
       <tr>
         <td>{{$menu->nav_li}}</td>
              
        <td>

          <form class="form-inline" method="post" action="{{route('resmenu.update',['id'=>$menu->id])}}">
                   {{csrf_field()}}

                   <input type="hidden" name="_method" value="PATCH" />
                   
               

     <div class="form-group mr-4">           
  <input type="text" class="form-control" name="name" value="{{$menu->nav_li}}" name="name">
  </div>
  
              
    <input type="submit" class="btn btn-primary" value="update"/>
       
    </form>
  </td>

      <td>


         <form style ='float: left; padding: 5px;' method="post" action="{{route('resmenu.destroy',['id'=>$menu->id])}}">
        {{csrf_field()}}
         <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" class="btn btn-primary" value="Delete" 
        id="{{$menu->id}}" />
        </form> 
        </td>
      
    </tr>

         
   
   


        @endforeach
         </tbody>
         </table>
   
  <!--   <input type="submit" class="btn btn-primary" id="up_btn" value="Update" /> -->


       
   
   

   



                     
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                     <input type="submit" class="btn btn-primary" value="Add" id="add" />
                    <br>
                    <br>
                
                  

   <form method="post" action="{{route('resmenu.store')}}">
     {{csrf_field()}}
     <table class="table">
    <tbody class="tbody">
      
     <!-- <tr><td><input type="text" class="form-control" value="{{$menu->nav_li}}" name="menu[]"></td><td><input type="submit" class="btn btn-primary del float-right" id="di" value="delete" /></td></tr> -->


       
   
    </tbody>
  </table>

    <input type="submit" class="btn btn-primary up float-right" value="Update" />
   </form>



                     
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script>
    var i=1;


  $(document).ready(function() {
      $('#add').click(function(event) {
        $('.tbody').append('<tr id="'+i+'1"><td><input type="text" class="form-control" name="menu[]"></td><td><input type="submit" class="btn btn-primary float-right del" id="'+i+'" value="delete" /></td></tr>');
        i++;
        if (i==1) {

        }
       // $('.tbody>tr>td:nth-child(2)>input').addClass('del');

     //   alert('kjd');
       // console.log('clicked');
      });
      // $('.del').click(function(event) {
      //   /* Act on the event */
      //   alert('k');
      //   console.log('clicked');
      // //  var id=this.id;
      //   //console.log(id);
      // });
         $('.tbody').on('click', '.del', function(event) {
          //   alert("yes");
            var id=this.id;
            $('#'+id+'1').remove();
            //alert(id);
         });

   });

  </script>

  @endsection