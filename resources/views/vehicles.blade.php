{{View::make('header',['title'=>'vehicles'])}}
  <div class="container row d-flex justify-content-center">
    <form action="/reg_vehicle" method="post" class="col-lg-6 card">
      <div>
        <h3>Vehicle Registration Details</h3>
        <div class="input-group">
          <input type="text" class="form-control mb-3" name="vehicle-type" placeholder="vehicle type" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
              Vehicle type
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="vehicle-brand" class='form-control mb-3' name="vehicle-brand" placeholder="vehicle brand" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
            Vehicle Brand
          </span>
        </div>
        <div class="input-group">
        <input type="text" id="vehicle-model" class='form-control mb-3' name="vehicle-model" placeholder="vehicle model" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Vehicle Model
          </span>
        </div>
        <div class="input-group">
        <input type="text" id="chassis-number" class='form-control mb-3' name="chassis-number" placeholder="chassis number" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
            Chassis Number
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="engine-number" class='form-control mb-3' name="engine-number" placeholder="engine number" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Engine Number
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="license" class='form-control mb-3' name="license" placeholder="registration/license" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Registration
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="color" class='form-control mb-3' name="color" placeholder="color" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Color
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="condition" class='form-control mb-3' name="condition" placeholder="condition" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Condition
          </span>
        </div>
        <div class="input-group">
          <input type="text" id="mileage" class='form-control mb-3' name="mileage" placeholder="mileage" required/>
          <span class="position-absolute top-0 start-50  translate-middle badge  bg-light text-dark">
          Mileage
          </span>
        </div>
        <div class="input-group">
          <button type='button' class="btn btn-outline-secondary m-2">Clear</button>
          <button type='submit' class="btn btn-outline-success m-2">Register</button>
        </div>
      </div>
    </form>
  </div>
{{View::make('footer')}}