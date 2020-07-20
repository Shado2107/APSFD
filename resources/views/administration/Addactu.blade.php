@extends('administration.Layouts.default')

@section('contenu')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Liste des actualités</h3>
                <button class="btn btn-primary btn-xs" data-toggle="modal"  data-target="#modal-default" data-placement="top">
                    Ajouter
                  </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th style="width:80px">Titre</th>
                    <th style="width:80px">contenu</th>
                    <th style="width:80px">image</th>
                    <th style="width:80px">actions</th>
                  </tr>
                  @foreach($actu as $act)
                  <tr >
                    <td >{{$act->id}}</td>
                    <td>{{$act->titre}}</td>
                    <td>{{$act->contenu}}</td>
                    <td><img src=" ../storage/{{$act->image}}" width='50'class="img-thumbnails"></td>
                    <td style="width:40px">
                        <a >
                            <button id="{{$act->id}}" class="btn btn-primary btn-xs btnedit">
                                <span class="fa fa-edit"></span>
                            </button>
                            <button id="{{$act->id}}"  class="btn btn-danger btn-xs delbtn" data-toggle="modal"  data-placement="top">
                              <span class="fa fa-trash"></span>
                          </button>
                        </a>
                    </td>
                   
                  </tr>
                  @endforeach
 {{$actu->links() }}
                </table>

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">ACTUALITÉS</h4>
                        </div>
                        <form method="post" action="" id="formdata" enctype="multipart/form-data"  >
                            {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter le nom de la ville">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Contenu</label>
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Message"></textarea>
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input id="image" name="image" type="file" class="form-control" placeholder="Photo">
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  
                  <div class="modal fade" id="modal_edit">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">MODIFIER ACTUALITÉS</h4>
                        </div>
                        <form method="post" action="" id="formupdate" enctype="multipart/form-data"  >
                            {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter le titre">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Contenu</label>
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Message"></textarea>
                            </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input id="image" name="image" type="file" class="form-control" placeholder="Photo">
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                          <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                        </form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>

              </div>

            </div>
            <!-- /.box -->

            <!-- /.box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>

      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
  <script type="text/javascript" >
    
    $(document).on('click', '.delbtn', function(){
      var id = $(this).attr('id');
      if (confirm("supprimer?")){
          $.ajax({
              url:"/deleteactu", 
              method: "get",
              data: {id:id},
              success: function(response){
                  console.log(response)
                  alert("actualite supprimé");
                  location.reload();
              }
          })
      }
      else{
          return false;
      }
  });
    
    
    
    $(document).ready(function(){
            
            $('#formdata').on('submit',function(e){
                e.preventDefault();   
                $.ajax({
                    type: "POST",
                    url: "/admin/actu",
                    data: $('#formdata').serialize(),
                    success: function(response){
                        console.log(response)
                        alert("data saved");
                        location.reload();
                    },
                    error : function(error){
                        console.log(error)
                        // alert("data not saved");
                    }
                });
            });
        });
        
    
    $(document).on('click','.btnedit',function(){
        var id = $(this).attr('id');
        
        $.ajax({
            url: "/editactu",
            method: "get",
            data: {id:id},
            success: function(response){
                var updateform = $('#formupdate');
                updateform.find('#titre').val(response.titre);
                updateform.find('#id').val(response.id);
                $('#modal_edit').modal();
            }
        })   
    });
    
        
    $('#formupdate').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        var post = $(this).attr('method');
        $.post(url,data,function(data){
            console.log(data);
            $('#formupdate').trigger('reset');
            $('#modal_edit').hide();
            location.reload();
        })   
    });
    
    
    
    </script>
    

   

@endsection