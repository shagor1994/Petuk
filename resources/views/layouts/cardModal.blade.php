
<div class="cardModal">
	<div class="fixed-bottom ">
		<div style="background-color: #DC3545;">

			   <div class="row">
		 <div class="col-3"><div class="float-left  p-2 ml-2"><div style="border-radius: 50%; background-color: white;color: #DC3545; height: 40px;width: 40px; padding-top: 6px;" class="text-center"  ><small id="egg"></small></div></div></div>
			   	   <div class="col-6"><div class="text-white pt-3 text-center"><label for="cardh" style="cursor:pointer;">View Your Card
	<button name="cardh" id="cardh" style="display: none;" type="button" class="" data-toggle="modal" data-target="#exampleModalLong"></button>
	</label></div></div>
			   	  <div class="col-3"><div class="float-right text-white p-2" id="prr"></div></div>
			   </div>



		</div>
	</div>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img src="{{Storage::url('food-gly.png')}}" style="height: 50px; width: 50px">Petuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card">
				 <h5 class="card-title">Order Detail:</h5>
				 <div id="ModalorderItems"></div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

					</div>

                     </div>


				</div>
      </div>

    </div>
<!-- </div>
</div> -->
