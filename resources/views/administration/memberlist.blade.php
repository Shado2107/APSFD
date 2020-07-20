@extends('administration.Layouts.default')

@section('contenu')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <section class="content">


      <div class="row">
      <form  method="post" action="" id="formdata">
      {{csrf_field()}}
        <div class="col-md-10 col-md-offset-1">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Enregistrer un membre</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nom de l'institution:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="nom" id="nom" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Date de creation:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="creation" id="creation" class="form-control">
                            </div>
                    
                        </div>
                    </div>
                   
                    <div class="col-md-4">
                         <div class="form-group">
                            <label>Date d'adhésion:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="adhesion" id="adhesion" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Gérant (PDG, DG):</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="gerant" id="gerant" class="form-control">
                            </div>
                    
                        </div>
                       
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Boite postale:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="bp" id="bp" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Site web:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="siteweb" id="siteweb" class="form-control">
                            </div>
                    
                        </div>
                    </div>
                  
                   
                            <div class="col-md-4">
                        <div class="form-group">
                            <label>Téléphone:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="tel" id="tel" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Téléphone 2:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="tel2" id="tel2" class="form-control">
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Téléphone 3:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="tel3" id="tel3" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Fax:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="fax" id="fax" class="form-control">
                            </div>
                    
                        </div>
                    
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Mail:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="mail" id="mail" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Plan d'acces simple:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="plan" id="plan" class="form-control">
                            </div>
                    
                        </div>
                       
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nombre d'agence:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="nbreagence" id="nbreagence" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Nombre total de clients:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="clients" id="clients" class="form-control">
                            </div>
                    
                        </div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Forme juridique:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="forme" id="forme" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Agrément:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="agrement" id="agrement" class="form-control">
                            </div>
                    
                        </div>
                        <div class="form-group">
                            <label>Montant de l'encours d'epargne:</label>
                            <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" name="epargne" id="epargne" class="form-control">
                            </div>
                    
                        </div>
                        </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>PAR à 90 jours:</label>
                                            <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" name="par" id="par" class="form-control">
                                            </div>
                                    
                                        </div>
                                        <div class="form-group">
                                            <label>Situation géographique du siege:</label>
                                            <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" name="situation" id="situation" class="form-control">
                                            </div>
                                    
                                        </div>  
                                        <div class="form-group">
                                                <label>Montant de l'encours de credit:</label>
                                                <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" name="credit" id="credit" class="form-control">
                                                </div>
                                        
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                          
                                           
                                            </div>
                
                </div>
                <div class="">
                  
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </form>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    
    <section class="content">
        <div class="row">
          <div class="col-md-12 ">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Liste des membres</h3>
                
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom de l'institution</th>
                    <th>Gérant</th>
                    <th>telephone</th>
                    <th>mail</th>
                    <th>adresse</th>
                    <th>Nombre d'agence</th>

                  </tr>
                  @foreach($prod as $m)
                  <tr>
                    <td>{{$m->id}}</td>
                    <td style="width:80px">{{$m->nom}}</td>
                    <td style="width:100px">{{$m->gerant}}</td>
                    <td style="width:80px">{{$m->tel}}/{{$m->tel2}}/{{$m->tel3}}</td>
                    <td style="width:100px">{{$m->mail}}</td>
                    <td style="width:100px">{{$m->situationgeo}}</td>
                    <td style="width:100px">{{$m->nbreagence}}</td >
                    <td style="width:50px">
                        <button id="{{$m->id}}" class="btn btn-primary btn-xs btnedit" >
                            <span class="fa fa-edit"></span>
                        </button>
                        <button id="{{$m->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="Modifier" data-placement="top">
                            <span class="fa fa-trash"></span>
                        </button>
                    </td>

                  </tr>
                  @endforeach

                  {{-- <tr>
                    <td></td>
                    <td style="width:100px"></td>
                    <td style="width:40px">
                        <a >
                            <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-default" data-target="Modifier" data-placement="top">
                                <span class="fa fa-edit"></span>
                            </button>
                        </a>
                    </td>
                    <td style="width:40px">
                        <a href="/admin/quartier">
                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="Modifier" data-placement="top">
                                <span class="fa fa-trash"></span>
                            </button>
                        </a>
                    </td>

                  </tr>
                --}}

                </table>

              </div>

            </div>
            <!-- /.box -->


            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modifier membre</h4>
                  </div>
                  <form role="form" method="post" action="/updatemembre" id="formupdate" >
                      {{csrf_field()}}
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nom de l'institution:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="nom" id="nom" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Date de creation:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="creation" id="creation" class="form-control">
                                </div>
                        
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                             <div class="form-group">
                                <label>Date d'adhésion:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="adhesion" id="adhesion" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Gérant (PDG, DG):</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="gerant" id="gerant" class="form-control">
                                </div>
                        
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Boite postale:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="bp" id="bp" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Site web:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="siteweb" id="siteweb" class="form-control">
                                </div>
                        
                            </div>
                        </div>
                      
                       
                                <div class="col-md-4">
                            <div class="form-group">
                                <label>Téléphone:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="tel" id="tel" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Téléphone 2:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="tel2" id="tel2" class="form-control">
                                </div>
                        
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Téléphone 3:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="tel3" id="tel3" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Fax:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="fax" id="fax" class="form-control">
                                </div>
                        
                            </div>
                        
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Mail:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="mail" id="mail" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Plan d'acces simple:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="plan" id="plan" class="form-control">
                                </div>
                        
                            </div>
                           
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre d'agence:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="nbreagence" id="nbreagence" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Nombre total de clients:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="clients" id="clients" class="form-control">
                                </div>
                        
                            </div>
                            </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Forme juridique:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="forme" id="forme" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Agrément:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="agrement" id="agrement" class="form-control">
                                </div>
                        
                            </div>
                            <div class="form-group">
                                <label>Montant de l'encours d'epargne:</label>
                                <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="epargne" id="epargne" class="form-control">
                                </div>
                        
                            </div>
                            </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>PAR à 90 jours:</label>
                                                <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" name="par" id="par" class="form-control">
                                                </div>
                                        
                                            </div>
                                            <div class="form-group">
                                                <label>Situation géographique du siege:</label>
                                                <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" name="situation" id="situation" class="form-control">
                                                </div>
                                        
                                            </div>  
                                            <div class="form-group">
                                                    <label>Montant de l'encours de credit:</label>
                                                    <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" name="credit" id="credit" class="form-control">
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                              
                                               
                                                </div>
                    
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


            <!-- /.box -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>

      </section>
    
  </div>

</div>
<!-- ./wrapper -->

<script type="text/javascript" >
    
    $(document).on('click', '.btnedit', function(){
            var id = $(this).attr('id');
            
                $.ajax({
                    url:"/editmembre", 
                    method: "get",
                    data: {id:id},
                    success: function(response){
                        console.log(response)
                        var updateform =  $('#formupdate');
                        updateform.find('#nom').val(response.nom);
                        updateform.find('#tel').val(response.tel);
                        updateform.find('#id').val(response.id);
                        $('#modal-default').modal();
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
          $('#modal-default').hide();
          location.reload();
      })   
  });
  
  
      $(document).ready(function(){
          
          $('#formdata').on('submit',function(e){
              e.preventDefault();
              
              $.ajax({
                  type: "POST",
                  url: "/admin/membres",
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
  </script>

@endsection
