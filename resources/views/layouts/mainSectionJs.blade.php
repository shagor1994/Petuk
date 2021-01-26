<script>
var position=$('#sideMenu').offset().top;
var menuWidth=document.getElementById('TopMenu').offsetHeight;
var pos=position-menuWidth;
//var footerPosition=$('#footer').offset().top;
//console.log('footer'+footerPosition);


$(window).scroll(function(event){
  var scroll=$(window).scrollTop();
  //console.log(scroll);

  if(scroll>position-menuWidth){




    let parentSideMenu =document.getElementById('sideMenu').parentNode.offsetWidth;
    let parentShopping=    document.getElementById('shopping-card').parentNode.offsetWidth;


    $('#sideMenu').css({'position':'fixed','top':''+menuWidth+'px','width':''+parentSideMenu-30+'px'});

  let mW=menuWidth+20;
    $('#shopping-card').css({'position':'fixed','top':''+mW+'px','width':''+parentShopping-30+'px'});


  }
  if( $('#sideMenu').css('position') != null && scroll<pos ){
    $('#sideMenu').css('position','');
    $('#sideMenu').css('top','')
    $('#shopping-card').css('top','')
    $('#shopping-card').css('position','')


  }
// if(scroll>footerPosition){
//   console.log('clled');
//   $('#sideMenu').css('position','');
//   $('#sideMenu').css('top','')
//   $('#shopping-card').css('top','')
//   $('#shopping-card').css('position','')
//
// }

});

//coloum width adjustment

window.addEventListener("resize",function(){
  let parentSideMenu =document.getElementById('sideMenu').parentNode.offsetWidth;

  let parentShopping=    document.getElementById('shopping-card').parentNode.offsetWidth;

  $('#shopping-card').css({'width':''+parentShopping-30+'px'});
  $('#sideMenu').css({'width':''+parentSideMenu-30+'px'});


});
</script>
<!-- <script>
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(
document.querySelectorAll('*'),
function(el) {
  if (el.offsetWidth > docWidth) {
    console.log(el);
  }
}
);
</script> -->
