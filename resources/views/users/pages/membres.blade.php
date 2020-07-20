@extends('users.layouts.layout')

@section('content')

<div class="bradcam_area breadcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Liste des membres</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

 <!-- service_area_start -->
 <div class="service_area">
    <div class="container">
    <aside class="single_sidebar_widget search_widget">
             <form action="#" method="POST">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="recherche" placeholder='Rechecher'

                          name="nom"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Rechercher'">
                        <div class="input-group-append">
                            <button class="btn" type="button"><i class="ti-search"></i></button>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit" name="submit">Rechercher</button>
                        </div>
                    </div>
                </div>
                
            </form>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>    
            <script type="text/javascript"></script>
    </aside>
    
    </div>

    
    <div class="col-md-9">
        <div class="container">
                 <div class="row">
    @foreach($membres as $m)
    
        <a href="/detailsmembre{{$m->id}}">
      <div class="single_service service_bg_1" style="height: 200px;
                                        width: 200px;border-radius: 50%;
                                        display: inline-block;margin-left:20px;background:white">
          <div class="service_hover">
                    <h3>nom</h3>
              <div class="hover_content">
                  <div class="hover_content_inner">
                    <h4>nom</h4> 
                  </div>
              </div>
          </div>
      </div>
        </a>
 
    @endforeach
    </div>
    {{$membres->links() }} 
    </div>
    </div>
    <!--/ about wrap  --> 
    
  
    
 </div>
@endsection