<div style="background-color: black; min-height: 400px"><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner overlay">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{Storage::url('slide11.jpg')}}" alt="First slide"  style="min-height: 400px; object-fit:cover;">
       <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5">
              <h2 class="display-4">Heading One</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
              <a href="#" class="btn btn-danger">Learn More</a>
            </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url('slide33.jpg')}}" alt="Second slide" style="min-height: 400px;object-fit:cover;">
      <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5  text-left">
              <h2 class="display-4">Heading Three</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>

    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Storage::url('slide44.jpg')}}" alt="Third slide"  style="min-height: 400px; object-fit:cover;">
      <div class="carousel-caption mb-3 pb-3 mb-sm-5 pb-sm-5 text-right">
              <h2 class="display-4">Heading Two</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis at esse, voluptatibus tenetur ab obcaecati. Voluptatem expedita fugit minima sapiente!</p>
              <a href="#" class="btn btn-warning">Learn More</a>
            </div>

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>