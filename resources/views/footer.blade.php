<footer class="container-fluid d-flex flex-wrap justify-content-between align-items-center py-3 text-light  border-top bg-dark">
    <div class="col-md-4 d-flex align-items-center">
    	<span class="text-light">&copy;{{date('Y')}} All rights reserved 
			Design by Jeytech Engineering Solutions
		</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <i class="fa-brands fa-facebook fa-fw"></i>  
    <i class="fa-brands fa-twitter fa-fw"></i> 
    <i class="fa-brands fa-instagram fa-fw"></i>
    <i class="fa-brands fa-whatsapp fa-fw"></i>
    </ul>
</footer>
<script>
    //Get the button:
	mybutton = document.getElementById("myBtn");
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0; // For Safari
	    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
    
</script>

</body>
</html>