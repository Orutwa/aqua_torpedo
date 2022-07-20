{{View::make('header',['title'=>'Index'])}}
	<div class ="m-1 row" style="min-height:500px;">
		<div class ="col-lg-8 card">
				<img src="{{asset('storage/img/captain.png')}}" class="mt-4" >
				<h2 class ="position-absolute start-50  translate-middle badge bg-light text-dark"  style="font-size:1.4rem;">
					Vehicle Information Management System
				</h2>
		</div>
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

					  <!-- 2 column grid layout for inline styling -->
					<div class="row mb-4">
						<div class="col d-flex justify-content-center">
						<!-- Checkbox -->
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
							<label class="form-check-label" for="formcheck"> Remember me </label>
						</div>
						</div>

						<div class="col">
						<!-- Simple link -->
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
	</div>
{{View::make('footer')}}