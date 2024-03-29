{{View::make('header',['title'=>'Vehicles'])}}
  <div class="container row d-flex justify-content-center m-2" style="min-height:500px; text-transform:capitalize;">
    @if($message)
      <h4 class="alert alert-success fade">{{$message}}</h4>
    @endif
    <form action="/reg_vehicle" novalidate method="post" class="col-lg-6 card needs-validation">
      @csrf
      <div>
        <h3>Vehicle Registration Details</h3>

        <div class='form-floating mb-2'>
          <select class="form-control mb-3 has-validation" name="type_id" required>
          <option value="" class="text-secondary" selected disabled> </option>
          @foreach($types as $type)
          <option value="{{$type->id}}">{{$type->name}}</option>
          @endforeach
          </select>
          <label for="owner">Vehicle Type</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>

        <div class='form-floating mb-2'>
          <select class="form-control mb-3 has-validation" name="brand_id"  required>
          <option value="" selected disabled> </option>
          @foreach($brands as $brand)
          <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
          @endforeach
          </select>
          <label for="owner">Vehicle Brand</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        
        <div class='form-floating mb-2'>
          <input type="text" class="form-control mb-3 has-validation" name="chassis_number" required/>
          <label for="">Chassis Number</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <input type="text" class="form-control mb-3 has-validation" name="engine_number" required/>
          <label for="m-name">Engine Number</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <input type="text" class="form-control mb-3 has-validation" name="license" required/>
          <label for="m-name">Registration</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <input type="text" class="form-control mb-3 has-validation" name="color" placeholder="" required/>
          <label for="m-name">Color</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <select class="form-control mb-3 has-validation" name="condition"  required>
          <option value="" selected disabled></option>
            <option value="New">New</option>
            <option value="Used">Used</option>
          </select>
          <label for="owner">Vehicle Condition</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <input type="number" class="form-control mb-3 has-validation" name="mileage" placeholder="" required/>
          <label for="m-name">Mileage</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class='form-floating mb-2'>
          <select class="form-control mb-3 has-validation" name="user_id"  required>
          <option value="" selected disabled></option>
          @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
          @endforeach
          </select>
          <label for="owner">Vehicle Owner</label>
          <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class="modal-footer">
          <button type='reset' class="btn btn-outline-secondary m-2 has-validation">Clear</button>
          <button type='submit' class="btn btn-outline-success m-2">Register</button>
        </div>
      </div>
    </form>
  </div>
  <script src="{{asset('storage/js/form.js')}}"></script>
{{View::make('footer')}}