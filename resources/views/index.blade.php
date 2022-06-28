{{View::make('header',['title'=>'index'])}}
		<div class ="parent row">
			<div class = "main-con col-lg-8">
				<img src="{{asset('storage/img/captain.png')}}" style="background-image" align="center" width="70%" margin="auto">
				<p class ="main-con-1">Vehicle Management<br>
					Information System
				</p>
			</div>

			<div class = "aux-con col-lg-4">
				<img src="{{asset('storage/img/profile.png')}}" align="center" class="center">
				<form>
					<label for = "username">Username</label>
					<input type="text" id="username" placeholder="username" >
					<label for = "password">Password</label>
					<input type="password" id="password" placeholder="password">
					<input type="button" id="button" value="LogIn">
				</form>
			</div>
		</div>
{{View::make('footer')}}