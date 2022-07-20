{{View::make('header',['title'=>'Dashboard'])}}
    <div class="container-fluid" style="min-height:600px">
        <link rel="stylesheet" href="{{asset('storage/css/pie.css')}}"> 
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                            <i class="fa-solid fa-gauge"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-buffer"></i>
                                Assets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-bandcamp"></i>
                                Models
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-bitbucket"></i>
                                Brands
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-users"></i>
                                Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="fa-solid fa-code-branch"></i>
                                Integrations
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div class="collapsed navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars" ></i>
                    </div>
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus"></i> Type</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus"></i> Model</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fa fa-plus"></i> Brand</button>
                        </div>
                    </div>
                </div>
                <div id="dashboard" class="accordion-collapse collapse " aria-labelledby="dashboard" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
                    <h2>Summary</h2>
                    <?php $vehicles=[6,8,5,7,2];?>
                    <div class="row d-flex justify-content-center">
                        <div class="card col-3 m-1">
                            <h3 class="card-title"><i class="fa-brands fa-buffer"></i> Assets</h3>
                            <p>15</p>
                        </div>
                        <div class="col-9 row d-flex justify-content-center">
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-tractor"></i> Tractors 
                                    <p>{{$vehicles[0]}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-truck"></i> Trucks
                                    <p>{{$vehicles[1]}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-car"></i> SUVs
                                    <p>{{$vehicles[2]}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-bus"></i> Buses
                                    <p>{{$vehicles[3]}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-truck-front"></i> Trailers
                                    <p>{{$vehicles[4]}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="accordion-body" >
                        <div class="row d-flex justify-content-center" >
                            <div class="col-sm-5 m-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Users</h3>
                                        <div class="pie animate" style="--p:20;--c:darkblue;--b:10px"> 20</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Cars</h3>
                                        <div class="pie animate" style="--p:100;--c:orange;">50</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Purchases</h3> 
                                        <div class="pie animate" style="--p:100;--c:purple;--b:15px">86</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 m-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Hires</h3>
                                        <div class="pie animate" style="--p:80;--c:lightgreen">80 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="clients" class="accordion-collapse collapse show" aria-labelledby="dashboard" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
                    
                    <div class="accordion-body" >
                        <div class="row d-flex justify-content-center" >
                            <table class="table">
                                <thead>
                                    <td>#</td>
                                    <td>First Name</td>
                                    <td>Middle Name</td>
                                    <td>Last Name</td>
                                    <td>Contact</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    @foreach($clients as $key=>$client)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$client->first_name}}</td>
                                        <td>{{$client->middle_name}} </td>
                                        <td>{{$client->last_name}} </td>
                                        <td>{{$client->phone}}</td>
                                        <td><button class="btn btn-outline-info">More...</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                
            </main>
        </div>
    </div>

    <!--Modals-->
    
{{View::make('footer')}}