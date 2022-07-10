{{View::make('header',['title'=>'index'])}}
	<div class ="m-1 row" style="min-height:500px;">
		<div class ="col-lg-8 card">
				<img src="{{asset('storage/img/captain.png')}}" class="mt-4" >
				<h2 class ="position-absolute start-50  translate-middle badge bg-light text-dark"  style="font-size:1.4rem;">
					Vehicle Management Information System
				</h2>
		</div>
		<div class = "col-lg-4 card">
				<div class="d-flex justify-content-center m-3">
					<i class="fa-solid fa-user fa-fw fa-8x"></i>
				</div>
				<form class="container">
					<div class="input-group mb-3">
						<input type="text" id="username" class="form-control" placeholder="username" >
						<span class="position-absolute top-0 start-50  translate-middle badge  bg-success text-light">
							Username
						</span>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="password" class="form-control" placeholder="password">
						<span class="position-absolute top-0 start-50  translate-middle badge  bg-success text-light">
							Password
						</span>
					</div>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
		</div>
	</div>
{{View::make('footer')}}