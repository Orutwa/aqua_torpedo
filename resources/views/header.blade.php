<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Jquery link --->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Swichery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <title>{{$title}}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Aqua Torpedo</a>
            <div class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    @if(session()->has('user'))
                    <li class="nav-item">
                        <a class="nav-link" href="/yard">Register Vehicle</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/contact" >Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if(session()->has('user'))
                            <li><a class="dropdown-item" href="/dashboard"><button class="btn btn-outline-warning container"> Dashboard </button></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout"><button class="btn btn-outline-warning container"> Logout </button></a></li>
                            @else
                            <li><a class="dropdown-item" href="/reg_user"><button class="btn btn-outline-warning container"> Signup </button></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/"><button class="btn btn-outline-warning container"> Login </button></a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                
            </div>
        </div>
    </nav>
<!--Modal-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contact-form" action="" method="post">
                    <div class="container shadow">
                        <div class=" p-5" style="font-family: calibri">
                            <h3 class="text-dark">Let's get in touch</h3>
                    
                            <div class="input-group mb-3">
                                <span class="input-group-text">FULL NAME</span>
                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">EMAIL</span>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">PHONE NUMBER</span>
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">SUBJECT</span>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">MESSAGE</span>
                                <textarea type="text" id="message" name="message" class="form-control" placeholder="Descriptive message" rows="6"></textarea>
                            </div>
                    
                            <div class="modal-footer">
                            <button type="submit" class='btn btn-success'>Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>