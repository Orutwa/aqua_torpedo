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
                            <a class="nav-link" aria-current="page" href=""data-bs-toggle="collapse" data-bs-target="#assets" aria-expanded="true" aria-controls="assets">
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
                            <a class="nav-link" aria-current="page" href=""data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
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
                    <div class="text-success" type='button' data-bs-toggle="collapse" data-bs-target="#messages" aria-expanded="true" aria-controls="messages">
                        <i class="fa fa-message fa-2x"></i><span class="badge bg-danger">{{$messages->where('status',0)->count()}}</span>
                    </div>
                </div>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#type"><i class="fa fa-plus"></i> Type</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#model"><i class="fa fa-plus" ></i> Model</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#brand"><i class="fa fa-plus"></i> Brand</button>
                    </div>
                </div>
                <div id="dashboard" class="accordion-collapse collapse show" aria-labelledby="dashboard" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
                    <h2>Summary</h2>
                    <div class="row d-flex justify-content-center">
                        <div class="card col-3 m-1">
                            <h3 class="card-title"><i class="fa-brands fa-buffer"></i> Assets</h3>
                            <p>{{$vehicles->count()}}</p>
                        </div>
                        <div class="col-9 row d-flex justify-content-center">
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-tractor"></i> Tractors 
                                    <p>{{$vehicles->where('type','Tractor')->count()}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-truck"></i> Trucks
                                    <p>{{$vehicles->where('type','Truck')->count()}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-car"></i> SUVs
                                    <p>{{$vehicles->where('type','SUV')->count()}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-bus"></i> Buses
                                    <p>{{$vehicles->where('type','Bus')->count()}}</p>
                                </div>
                            </div>
                            <div class="card col-lg-2 col-sm-4 m-1">
                                <div class="card-body">
                                    <i class="fa-solid fa-truck-front"></i> Trailers
                                    <p>{{$vehicles->where('type','Trailer')->count()}}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="accordion-body" >
                        <div class="row d-flex justify-content-center" >
                            <div class="col-sm-5 p-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Users</h3>
                                        <div class="pie animate" style="--p:100;--c:darkblue;--b:10px"> {{$clients->count()}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 p-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Cars</h3>
                                        <div class="pie animate" style="--p:100;--c:orange; --b:10px">{{$vehicles->count()}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 p-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Purchases</h3> 
                                        <div class="pie animate" style="--p:100;--c:purple;--b:10px">86</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 p-1 col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Hires</h3>
                                        <div class="pie animate" style="--p:80;--c:lightgreen; --b:10px;">80 </div>
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
                                <thead style='text-align:center;'>
                                    <th>#</th>
                                    <th>Model</th>
                                    <th colspan="2">Brand</th>
                                </thead>
                                <tbody>
                                    @foreach($models as $key=>$model)
                                    <tr>
                                        <td>{{$key+1}}.</td>
                                        <td style="font-family:Verdana, Geneva, Tahoma, sans-serif">{{$model->model_name}}</td>
                                        <td colspan="2">
                                            @foreach($brands->where('model_id', $model->id) as $index=>$brand)
                                            <div class="d-flex justify-content-between">
                                                <div>{{$brand->brand_name}}</div>
                                                <div>{{$vehicles->where('brand_name',$brand->brand_name)->count()}}</div>
                                            </div>
                                            @endforeach
                                        </td>
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
                        @foreach($clients as $id=> $user)
                            <div class="alert alert-success d-flex justify-content-between mb-2">
                                <div>{{$id+1}}. </div>
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
                <div id="assets" class="accordion-collapse collapse" aria-labelledby="assets" data-bs-parent="#accordionFlushExample">
                    <h2 class="d-flex justify-content-center">Clients</h2>
                    <div class="row d-flex justify-content-center p-2">
                        @foreach($vehicles as $ind=> $vehicle)
                            <div class="alert alert-success d-flex justify-content-between mb-2">
                                <div>{{$ind+1}}. </div>
                                <div type="button">{{$vehicle->license}}</div>
                                <div>{{$vehicle->type}}</div>
                                <div>{{$vehicle->color}}</div>
                                <div>{{$vehicle->brand_name}}</div>
                                <a href="" type="button"data-bs-toggle="modal" data-bs-target="#detail{{$vehicle->id}}" ><i class="fa-solid fa-ellipsis"></i></a>
                                <div class="modal fade" id="detail{{$vehicle->id}}" tabindex="-1" aria-labelledby="detail{{$vehicle->id}}" aria-hidden="true">
                                    <div class="modal-dialog text-dark">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detail{{$vehicle->id}}">{{$vehicle->license}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                                <div class="modal-body">
                                                    <div>Type : {{$vehicle->license}}</div>
                                                    <div>Model: {{$vehicle->license}}</div>
                                                    <div>Brand: {{$vehicle->brand_name}}</div>
                                                    <div>Color: {{$vehicle->color}}</div>
                                                    <div>Chassis: {{$vehicle->chassis_number}}</div>
                                                    <div>Engine : {{$vehicle->engine_number}}</div>
                                                    <div>Owner : {{$vehicle->license}}</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="messages" class="accordion-collapse collapse" aria-labelledby="messages" data-bs-parent="#accordionFlushExample">
                    <h2 class="d-flex justify-content-center">Messages</h2>
                    <div class="row">
                        @foreach($messages as $message)
                        <div class="col-md-4 p-2">
                            <div class="card p-2" style="height:250px ;">
                                @if($message->status==0)
                                    <div class="bg-primary p-1"></div>
                                @else
                                    <div class="bg-secondary p-1"></div>
                                @endif
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div><strong><i>{{$message->name}}</i></strong></div>
                                        <small>{{$message->phone}}</small>
                                        <a href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @if($message->status==0)
                                            <li><a class="dropdown-item" href="/read/{{$message->id}}" style="text-decoration:none ;">Mark as read</a></li>
                                            @else
                                            <li><a class="dropdown-item" href="/unread/{{$message->id}}" style="text-decoration:none ;">Mark as unread</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <h6 class="card-title" style="font-family:cursive;">Subject: {{$message->subject}}</h6>
                                    <p class="card-text" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">{{$message->message}}</p>
                                    <div class="d-flex justify-content-end">
                                        <small>{{date_format($message->created_at,'F j, Y')}}</small>
                                    </div>
                                    
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
{{View::make('footer')}}