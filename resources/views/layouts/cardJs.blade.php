<script>
var wH=window.innerHeight;
var menuHeight=document.getElementById('TopMenu').offsetHeight;
//get the height of shopping cardh
var cH=wH-(20+menuHeight+100);
class FoodCard {
  constructor() {
    this.orderList=[];
    this.index=-5;
  }
  //...add food from main section when clicked....
  addFood(item){
    this.orderList.push(item)
  }

  //...check if the clicked item already exist or not
  Check(item){
    if(this.orderList.length==0){
      this.addFood(item);
    }
    else{
      //...seaching the clicked item with matched item
      for(let i=0;i<this.orderList.length;i++){

        if(this.orderList[i][0]==item[0]){
          this.index=i;
          this.orderList[i][4]+=item[4];
          this.orderList[i][3]++;
          break;
        }

      }
      if(this.index==-5){
        this.addFood(item);
      }
    }
    this.index=-5;
    this.render();
  }
  ///........ populate to screen .....
  render(){

    $('#orderItems').empty();
    $('#orderItems').css({'max-height':''+cH+'px','overflow-y':'auto','overflow-x':'hidden'});
    $('#ModalorderItems').empty();
    let subtotal=0;
    let vat=0;
    let total=0;


    for(let i=0;i<this.orderList.length;i++){
      //.....   add foodname and food price........
      subtotal=subtotal+this.orderList[i][4];

      $('#orderItems').append('<div class="mb-1 p-2 text-muted" style="background-color:#F4F2FF"><div class="container"><div class="row"><div class="col-6 col-sm-6"><div class="float-left">'+this.orderList[i][3]+' X '+this.orderList[i][1]+'</div></div><div class="col-sm-6 col-6"><div class="float-right">Tk '+this.orderList[i][4]+'</div></div></div></div><div class="row"><div class="col-12 col-sm-12"><button class="btn btn-sm btn-outline-primary float-right romove rounded-circle" name="" value="'+i+'" id="" style="height:20px; width:20px;text-align:center;padding:0px 1%"><i class="fas fa-minus"></i></button><button class="btn btn-sm btn-outline-danger float-right mr-2 add rounded-circle" name="" value="'+i+'" id="" style="height:20px; width:20px;text-align:center;padding:0px 1%"><i class="fas fa-plus""></i></button></div></div></div>');




      $('#ModalorderItems').append('<div class="mb-1 p-2 text-muted" style="background-color:#F4F2FF"><div class="container"><div class="row"><div class="col-6 col-sm-6"><div class="float-left">'+this.orderList[i][3]+' X '+this.orderList[i][1]+'</div></div><div class="col-sm-6 col-6"><div class="float-right">Tk '+this.orderList[i][4]+'</div></div></div></div><div class="row"><div class="col-12 col-sm-12"><button class="btn btn-sm btn-outline-primary float-right romove rounded-circle" name="" value="'+i+'" id="" style="height:20px; width:20px;text-align:center;padding:0px 1%"><i class="fas fa-minus"></i></button><button class="btn btn-sm btn-outline-danger float-right mr-2 add rounded-circle" name="" value="'+i+'" id="" style="height:20px; width:20px;text-align:center;padding:0px 1%"><i class="fas fa-plus""></i></button></div></div></div>');
    }

     vat=(subtotal*7)/100;
     console.log(vat);
    total=subtotal+vat+40;
      document.getElementById('egg').innerHTML=Math.round( total);

      if(this.orderList.length!=0){
      $('#orderItems').append('<div class="row order text-muted";"><div class="col-md-6 col-6 col-sm-6 text-muted"><p>Subtotal:</p></div><div class="col-md-6 col-6 col-sm-6 text-muted text-right">Tk '+subtotal+'</div></div></div><div class="row order text-muted" style=";"><div class="col-md-6 col-6 col-sm-6 ext-muted"><p>Delivery Fee:</p></div><div class="col-md-6 col-6 col-sm-6 ext-muted text-right">Tk 40</div></div><div class="row order text-muted";"><div class="col-md-6 col-sm-6 col-6 text-muted"><p>Vat:</p></div><div class="col-md-6 col-6 col-sm-6 text-muted text-right">Tk '+vat+'</div></div><div class="row order"  style=";"><div class="col-md-6 col-6 col-sm-6 font-weight-bold"><p>Total:</p></div><div class="col-md-6 col-6 col-sm-6 text-right font-weight-bold" id="pR"> Tk '+total+'</div></div><div class="order"  style="display:;"><button type="button" class="btn btn-outline-danger btn-block" style="border-radius: 0px;">Order</button></div>');


          $('#ModalorderItems').append('<div class="row order text-muted";"><div class="col-md-6 col-6 col-sm-6 text-muted"><p>Subtotal:</p></div><div class="col-md-6 col-6 col-sm-6 ext-muted text-right"> Tk '+subtotal+'</div></div></div><div class="row order text-muted" style=";"><div class="col-md-6 col-6 col-sm-6 ext-muted"><p>Delivery Fee:</p></div><div class="col-md-6 col-6 col-sm-6 ext-muted text-right">Tk 40</div></div><div class="row order text-muted";"><div class="col-md-6 col-sm-6 col-6 text-muted"><p>Vat:</p></div><div class="col-md-6 col-6 col-sm-6 text-muted text-right">Tk '+vat+'</div></div><div class="row order"  style=";"><div class="col-md-6 col-6 col-sm-6 font-weight-bold"><p>Total:</p></div><div class="col-md-6 col-6 col-sm-6 text-right font-weight-bold" id="pR"> Tk '+total+'</div></div><div class="order"  style="display:;"><button type="button" class="btn btn-outline-danger btn-block" style="border-radius: 0px;">Order</button></div>');
    }else{
      $("#orderItems").append('<img src="{{Storage::url('shop.png')}}" class="mx-auto d-block"><h2 class="text-center">Your card is Empty');
      $("#ModalorderItems").append('<img src="{{Storage::url('shop.png')}}" class="mx-auto d-block"><h2 class="text-center">Your card is Empty');

    }
    let store=this.orderList;
    $('.add').on('click',function(){
      //........
      add(store,this.value);

    });
    $('.romove').on('click',function(){

      remove(store,this.value);

    });
  }

}
var add=function(list,num){
  list[num][3]++;
  list[num][4]+= list[num][2];
  foodCard.orderList=list;
  foodCard.render();

};
var remove=function(list,num){
  list[num][3]--;
  list[num][4]-= list[num][2];
  if(list[num][3]==0){
    list.splice(num,1);
  }
  foodCard.orderList=list;
  foodCard.render();

}
var cardImage=function(){
  let parentNode=document.getElementById('orderItems');

  if(parentNode.firstChild==null){
    $("#orderItems").append('<img src="{{Storage::url('shop.png')}}" class="mx-auto d-block"><h2 class="text-center">Your card is Empty');
    $("#ModalorderItems").append('<img src="{{Storage::url('shop.png')}}" class="mx-auto d-block"><h2 class="text-center">Your card is Empty');

  };

}();



foodCard=new FoodCard();

var list=document.getElementsByClassName('clickMe');

$('.clickMe').on('click', function(){

  let listItem=[this.id, this.name, parseInt(this.value),1,parseInt(this.value)];
  foodCard.Check(listItem);


});




</script>
