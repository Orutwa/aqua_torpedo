{{View::make('header',['title'=>'Index'])}}
	<div class ="m-1 row" style="min-height:500px;">
		@if(session()->has('user'))
		<div class ="col-lg-12 card">
		@else
		<div class ="col-lg-8 card">
		@endif
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
				<h2 class ="position-absolute start-50  translate-middle badge bg-white text-dark"  style="font-size:105%;">
					Vehicle Information Management System
				</h2>
		</div>
		@if(!session()->has('user'))
		<div class = "col-lg-4 card">
				<div class="d-flex justify-content-center m-3">
					<i class="fa-solid fa-user fa-fw fa-8x"></i>
				</div>
				@foreach($errors as $error)
				<div class="alert alert-danger">{{$error}}</div>
				@endforeach
				<form class="container" method="POST" action="login">
					@csrf
					<div class="input-group mb-3">
						<input type="text"  name="email" class="form-control" placeholder="Email" >
						<span class="position-absolute top-0 start-50  translate-middle badge  bg-success text-light">
							Email
						</span>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="password" name= "password" class="form-control" placeholder="password">
						<span class="position-absolute top-0 start-50  translate-middle badge  bg-success text-light">
							Password
						</span>
					</div>

				
					<div class="row mb-4">
						<div class="col d-flex justify-content-center">
				
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
							<label class="form-check-label" for="formcheck"> Remember me </label>
						</div>
						</div>

						<div class="col">
					
						<a href="#!" style="text-decoration: none;">Forgot password?</a>
						</div>
					</div>
					<div >
						<button type="submit" class="btn btn-success container" width:20px>LOG IN</button>
					</div>
					<hr>
					<div class="text-center mt-2">
						<p>Not a member? <a href="contact" style="text-decoration: none;">Register</a></p>
						<p>Follow us on</p>

						<button type="button" class="btn btn-link btn-floating mx-1">
						<i class="fab fa-facebook-f"></i>
						</button>

						<button type="button" class="btn btn-link btn-floating mx-1">
						<i class="fab fa-google"></i>
						</button>

						<button type="button" class="btn btn-link btn-floating mx-1">
						<i class="fab fa-twitter"></i>
						</button>

					</div>
				</form>
		</div>
		@endif
	</div>
{{View::make('footer')}}