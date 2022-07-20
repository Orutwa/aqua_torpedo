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
                                    @foreach($assets as $key=>$asset)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$asset->model_name}}</td>
                                        <td>{{$asset->}} </td>
                                        <td>{{$asset->}} </td>
                                        <td>{{$asset->}}</td>
                                        <td><button class="btn btn-outline-info">More...</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>