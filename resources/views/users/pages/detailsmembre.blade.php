@extends('users.layouts.layout')

@section('content')

<div class="bradcam_area breadcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3> membres</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->
<div class="container">
            
    <div class="row">

<!--/ bradcam_area  -->
<div class= "container" style=" padding-bottom :80 px ;">
<br><br> 
    <div>
        <div class="card" style="width:100%; height: 100%; background-color: #007437;margin-bottom: 100px;" >
           
                <div class="card-body" style = "height : 450px;">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="card-title" style="color: #F4F028;font-size:25px; height: 40px; margin-top : 20px;">PRESENTATION</h5>
                        <p class="card-text" style="color: #FFFFFF;font-size:15px; font-weight: 500; height: 42px;">Institution: {{$membre->nom}}</p>
                        <p class="card-text" style="color: #FFFFFF;font-size:15px; font-weight: 500; height: 42px;">Gerant : {{$membre->gerant}} </p>
                        <p class="card-text" style="color: #FFFFFF;font-size:15px; font-weight: 500; height: 42px;">date de creation: {{$membre->creation}} </p>
                      
                        <p class="card-text" style="color: #FFFFFF;font-size:15px; font-weight: 500; height: 42px;">Tel : {{$membre->tel}} </p>
                        <p class="card-text" style="color: #FFFFFF;font-size:15px; font-weight: 500; height: 42px;">Email: {{$membre->mail}} </p>
                        
                    </div>
                    
                </div>
             
            </div>
        </div>
    </div>
</div>
</div>
</div>        
@endsection