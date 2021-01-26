   
             <div>
              <h3>Add menu</h3>
                     <input type="submit" class="btn btn-primary" value="Add" id="add" />
                    <br>
                    <br>
                
                  

   <form method="post" action="{{route('resmenu.store')}}">
     {{csrf_field()}}
     <table class="table">
    <tbody class="tbody">
      
   


       
   
    </tbody>
  </table>

    <input type="submit" class="btn btn-primary up float-right" value="Update" />
   </form>



                     
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

