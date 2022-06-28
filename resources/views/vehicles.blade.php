{{View::make('header',['title'=>'vehicles'])}}
  <form>

    <div>
      <h3>Vehicle Registration Details</h3>

        <label for="type">Vehicle Type</label>
        <input type="text" id="vehicle-type" name="vehicle-type" placeholder="vehicle type" required/>

        <label for="brand">Vehicle Brand</label>
        <input type="text" id="vehicle-brand" name="vehicle-brand" placeholder="vehicle brand" required/>
        
        <label for="model">Vehicle Model</label>
        <input type="text" id="vehicle-model" name="vehicle-model" placeholder="vehicle model" required/>
        
        <label for="chassis">Chassis Number</label>
        <input type="text" id="chassis-number" name="chassis-number" placeholder="chassis number" required/>

        <label for="engine">Engine Number</label>
        <input type="text" id="engine-number" name="engine-number" placeholder="engine number" required/>

        <label for="licence">Registration</label>
        <input type="text" id="license" name="license" placeholder="registration/license" required/>

        <label for="color">Color</label>
        <input type="text" id="color" name="color" placeholder="color" required/>
        
        <label for="color">Condition</label>
        <input type="text" id="condition" name="condition" placeholder="condition" required/>
        
        <label for="color">Mileage</label>
        <input type="text" id="mileage" name="mileage" placeholder="mileage" required/>
        

        <div class = "button-set">
          <input type="submit" id="button" value="Submit">
          <input type="reset" id="button" value="Clear">
        </div>
    </div>
  </form>
{{View::make('footer')}}