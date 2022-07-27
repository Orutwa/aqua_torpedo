{{View::make('header',['title'=>'Dashboard'])}}
    <div class="container-fluid" style="min-height:600px" id="accordionFlushExample">
        <link rel="stylesheet" href="{{asset('storage/css/pie.css')}}"> 
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=""data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="true" aria-controls="dashboard">
                            <i class="fa-solid fa-gauge"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" href="#assets" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                            <a class="nav-link" href="" data-bs-toggle="collapse" data-bs-target="#clients" aria-expanded="true" aria-controls="clients">
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
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#type"><i class="fa fa-plus"></i> Type</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#model"><i class="fa fa-plus" ></i> Model</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#brand"><i class="fa fa-plus"></i> Brand</button>
                        </div>
                    </div>
                </div>
                <div id="dashboard" class="accordion-collapse collapse show" aria-labelledby="dashboard" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
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
                <div id="brands" class="accordion-collapse collapse " aria-labelledby="brands" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
                    
                    <div class="accordion-body" >
                        <div class="row d-flex justify-content-center" >
                            <table class="table">
                                <thead>
                                    <td>#</td>
                                    <td>Brand</td>
                                    <td>Total</td>
                                </thead>
                                <tbody>
                                    @foreach($brands as $key=>$brand)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$brand->brand_name}}</td>
                                        <td></td>
                                        <td><button class="btn btn-outline-info">More...</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div id="clients" class="accordion-collapse collapse" aria-labelledby="clients" data-bs-parent="#accordionFlushExample">
                    <h2 class="d-flex justify-content-center">Clients</h2>
                    <div class="row d-flex justify-content-center p-2">
                        @foreach($clients as $user)
                            <div class="alert alert-success d-flex justify-content-between mb-2">
                                <div id="liveToastBtn" type="button">{{$user->first_name}} {{$user->last_name}}</div>
                                <div>{{$user->role}}</div>
                                <div style="text-transform:capitalize ;">{{$user->country}}</div>
                                <a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href=" ">Onboard</a></li>
                                </ul>
                            </div>
                            <div>
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="{{asset('storage/img/captain.png')}}" class="rounded me-2" width=20>
                                        <strong class="me-auto">{{$user->first_name}} </strong>
                                        <small>{{$user->role}}</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body d-flex justify-content-between">
                                        <div>{{$user->phone}}</div>
                                        <div>{{$user->email}}</div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--Modals-->
<div class="modal fade" id="model" tabindex="-1" aria-labelledby="model" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="model">Model</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addModel" method="post">
                @csrf
                <div class="modal-body">
                    <div class='form-floating mb-2'>
                        <input type="text" id="m-name" class="form-control" name="model_name" placeholder=" " />
                        <label for="m-name">Model Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="type" tabindex="-1" aria-labelledby="type" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="type">Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addType" method="post">
                @csrf
                <div class="modal-body">
                    <div class='form-floating mb-2'>
                        <input type="text" id="m-name" class="form-control" name="type_name" placeholder=" " />
                        <label for="m-name">Vehicle Type</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="brand" tabindex="-1" aria-labelledby="brand" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brand">Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addBrand" method="post">
                @csrf
                <div class="modal-body">
                    <div class='form-floating mb-2'>
                        <select name="model_id" class='form-control'id="">
                            <option value="" class='form-control'></option>
                            @foreach($models as $model)
                                <option value="{{$model->id}}" class='form-control'>{{$model->model_name}}</option>
                            @endforeach
                        </select>
                        <label for="m-name">Model Name</label>
                    </div>
                    <div class='form-floating mb-2'>
                        <input type="text" id="m-name" class="form-control" name="brand_name" placeholder=" " />
                        <label for="m-name">Brand Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var toastTrigger = document.getElementById('liveToastBtn')
    var toastLiveExample = document.getElementById('liveToast')
    if (toastTrigger) {
        toastTrigger.addEventListener('click', function () {
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()
        })
    }
</script>
{{View::make('footer')}}