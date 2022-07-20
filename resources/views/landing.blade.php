{{View::make('header',['title'=>'landing'])}}

<section>
    <ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" href="#">VIMS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">PROJECTS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">CONTACT US</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
    </li>
    </ul>
</section>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('storage/img/captain.png')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>A JEYTCH INNOVATION</h5>
        <p>slution oriented approach towars innovation.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('storage/img/teltonika-fm920.jpg')}}" class="d-block w-100" alt="...">

      <div class="carousel-caption d-none d-md-block">
        <h5>VIMS SYSTEM</h5>
        <p>Worry less about your yard and sales, we have you covered.</p>
      </div>
    </div>
    <div class="carousel-item">
        
      <img src="{{asset('storage/img/farm.jpg')}}" class="d-block w-100" alt="...">
      
      <div class="carousel-caption d-flex d-md-block">
        <h5>A HUB FOR INNOVATION</h5>
        <p>We seek to nurture young talent since we're laser focused and solution oriented.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>