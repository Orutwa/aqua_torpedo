{{View::make('header',['title'=>'users'])}}
  <form action="user_db.php" method="POST">
    <div class="owner-details">

        <h3>Vehicle owner details</h3>
        <label for="f-name">First Name</label>
        <input type="text" id="f-name" name="f-name" placeholder="first name" required/>
        
        <label for="l-name">Last Name</label>
        <input type="text" id="l-name" name="l-name" placeholder="last name" required/>

        <label for="nin-number">NIN Number</label>
        <input type="text" id="nin-number" name="nin-number" placeholder="nin number" required/>

        <label for="tin-number">TIN Number</label>
        <input type="text" id="tin-number" name="tin-number" placeholder="tin number" required/>

        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" placeholder="phone name" required/>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email address" required/>
        
        <label for="address">Physical Address</label>
        <input type="text" id="address" name="address" placeholder="pysical address" required/>

        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="residence country" required/>

    <div class="gender">
      <input type="radio" name="inlineRadioOptions" id="maleGender"
      <label for="maleGender">Male</label>

      <input type="radio" name="inlineRadioOptions" id="femaleGender"
      <label for="femaleGender">Female</label>

      <input type="radio" name="inlineRadioOptions" id="otherGender"
      <label for="otherGender">Other</label>
    </div>

        <div class = "button-set">
          <input type="submit" name="submit" id="button" value="Submit">
          <input type="reset" id="button" value="Clear">
        </div>
    </div>
  </form>
{{View::make('footer')}}
