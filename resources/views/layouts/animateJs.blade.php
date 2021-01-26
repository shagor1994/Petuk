<script type="text/javascript">

   var Id=document.getElementById('sideMenu');
   var menuWidth=document.getElementById('TopMenu').offsetHeight;
   console.log(menuWidth);
   Id.addEventListener('click',function(e){
     e.preventDefault();
     var target=e.target;
     targetId=target.id;
//     console.log(targetId);
    var top= $('#'+targetId+'a').offset().top;
  //   console.log(top);
     $('html, body').animate({
       scrollTop: $('#'+targetId+'a').offset().top-menuWidth
     },1000,'linear');



   },false);


</script>
<script>

   var Id=document.getElementById('scrollHorizentalMenu');
   var menuWidth=document.getElementById('TopMenu').offsetHeight;
   console.log(menuWidth);
   Id.addEventListener('click',function(e){
     e.preventDefault();
     var target=e.target;
     targetId=target.id;
    var top= $('#'+targetId+'a').offset().top;
   console.log(top);
     $('html, body').animate({
       scrollTop: $('#'+targetId+'a').offset().top-menuWidth
     },1000,'linear');



   },false);

</script>
