{{View::make('header',['title'=>'users'])}}
  <form action="/register_user" method="POST" class="row d-flex justify-content-center">
    @csrf
    <div class="card col-md-6 m-3 p-5" '>
      <h3 class="d-flex justify-content-center">Vehicle owner details</h3>
        <div class="row">
          <div class='form-floating mb-2 col-md-6 '>
            <input type="text" id="f-name" class="form-control" name="f_name" placeholder="first name" required/>
            <label for="f-name">First Name</label>
          </div>
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="l-name" class="form-control" name="l_name" placeholder="last name" required/>
            <label for="l-name">Last Name</label>
          </div>
        </div>
        
        <div class="row">
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="nin-number" class="form-control" name="nin_number" placeholder="nin number" required/>
            <label for="nin-number">NIN Number</label>
          </div>
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="tin-number" class="form-control" name="tin_number" placeholder="tin number" required/>
            <label for="tin-number"> TIN Number</label>
          </div>
        </div>
        <div class="row">
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="phone" class="form-control" name="phone" placeholder="phone name" required/>
            <label for="phone">Phone Number</label>
          </div>
          <div class='form-floating mb-2 col-md-6'>
            <input type="email" id="email" class="form-control" name="email" placeholder="email address" required/>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="address" class="form-control" name="address" placeholder="pysical address" required/>
            <label for="address">Physical Address</label>
          </div>
          <div class='form-floating mb-2 col-md-6'>
            <input type="text" id="country" class="form-control" name="country" placeholder="residence country" required/>
            <label for="country">Country</label>
          </div>
        </div>
        
      <div class='form-floating mb-2 '>
        <select class='form-control'>
          <option value="" selected disabled>Select Gender</option>
          <option class="form-control" value="male">Male</option>
          <option class="form-control" value="female">Female</option>
          <option class="form-control" value="other">Other</option>
        </select>
      </div>
      <div class = "modal-footer">
        <button type="submit" class='btn btn-outline-success' >Register</button>
        <button type="reset" class='btn btn-outline-secondary' >Clear</button>
      </div>

    </div>
  </form>
{{View::make('footer')}}
