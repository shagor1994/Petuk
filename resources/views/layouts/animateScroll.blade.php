<script type="text/javascript">

   var Id=document.getElementById('scroll-nav');
   var menuWidth=document.getElementById('TopMenu').offsetHeight;
   console.log(menuWidth);
   Id.addEventListener('click',function(e){
     e.preventDefault();
     var target=e.target;
     targetId=target.id;
//     console.log(targetId);
    var top= $('#'+targetId+'e').offset().top;
  //   console.log(top);
     $('html, body').animate({
       scrollTop: $('#'+targetId+'e').offset().top-menuWidth
     },1000,'linear');



   },false);


</script>
