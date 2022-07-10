{{View::make('header',['title'=>'Dashboard'])}}
<div class="container" style="mi-height:450px">
    <link rel="stylesheet" href="{{asset('storage/css/pie.css')}}">        
    <div id="dashboard" class="accordion-collapse collapse show" aria-labelledby="dashboard" data-bs-parent="#accordionFlushExample" style="text-align:center ;">
        <h2>Summary</h2>
        <div class="accordion-body" >
            <div class="row d-flex justify-content-center" >
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Users</h3>
                            <div class="pie animate" style="--p:20;--c:darkblue;--b:10px"> 20</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cars</h3>
                            <div class="pie animate" style="--p:100;--c:orange;">50</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Purchases</h3> 
                    <div class="pie animate" style="--p:100;--c:purple;--b:15px">86</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
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
</div>
{{View::make('footer')}}