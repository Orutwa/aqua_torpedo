{{View::make('header',['title'=>'Contact-us'])}}
<form class="container mt-2" action="/contact" method="post">
    @csrf
    <div class="bg-success shadow row">
        <div class="col-md-5 p-3" style="font-family: calibri; min-height:500px;">
            <h3 class="text-light">Get in touch</h3>
            <p class="text-light">Enjoy our convinient 24/7 customer support</p>
            <div class="container row d-flex justify-content-center">
                <div class="col-2">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="col-10">
                    <p class="text-light">14th Floor, The Address, Muthangari Drive, Wstlands <br> Nairobi, Kenya</p>
                </div>
            </div>
            <div class="container row d-flex justify-content-center">
                <div class="col-2">
                <span class="fa fa-phone"></span>
                </div>
                <div class="col-10">
                <p class="text-light">+254 795 096 433</p>
                </div>
            </div>
            <div class="container ror d-flex justify-content-center">
                <div class="col-2">
                <span class="fa fa-paper-plane"></span>
                </div>
                <div class="col-10">
                <p class="text-light">Inquiry@jeytech.com </p>
                </div>
            </div>
            <div class="container row d-flex justify-content-center">
                <div class="col-2">
                <span class="fa fa-globe"></span>
                </div>
                <div class="col-10">
                <p class="text-light">www.jeytechengineeering.com </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 bg-light p-3" style="font-family: calibri">
            <h3 class="text-dark">Let's get in touch</h3>
            <div class="input-group mb-3">
                <span class="input-group-text">FULL NAME</span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">EMAIL ADDRESS</span>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">PHONE NUMBER</span>
                <input type="text" id="phone_number" name="contact" class="form-control" placeholder="Phone Number" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">SUBJECT</span>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">MESSAGE</span>
                <textarea type="text" id="message" name="message" class="form-control" placeholder="Descriptive message..." rows="6"></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class='btn btn-success'>Send Message</button>
            </div>
        </div>
    </div>
</form>
<script src="">

</script>
{{View::make('footer')}}