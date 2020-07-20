@extends('users.layouts.layout')

@section('content')

  <!-- bradcam_area  -->
  <div class="bradcam_area breadcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Inscription</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- service_area_start -->
<div class="service_area">
    <div class="container">

    
    <div class="row">
               
                <div class="col-md-10 col-sm-offset-1">
                    <form class="form-contact contact_form" action="" method="post" id="inscriptionForm" novalidate="novalidate">
                         <div class="col-12">
                            <h2 class="contact-title">Présentation</h2>
                         </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control valid" name="nom" id="nom" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom de l institution'" placeholder="Nom de l institution">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control valid" name="creation" id="creation" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date de création'" placeholder="Date de création">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="adhesion" id="adhesion" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date d adhésion à l APSFD TOGO'" placeholder="Date d adhésion à l APSFD TOGO">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="gerant" id="gerant" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gérant (PDG, DG,...)'" placeholder="Gérant (PDG, DG,...)">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="tel" id="tel" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Téléphone'" placeholder="Téléphone">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="siteweb" id="siteweb" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Site web'" placeholder="Site web">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="mail" id="mail" type="mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'mail'" placeholder="mail">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="clientele" id="clientele" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Clientèle cible'" placeholder="Clientèle cible">
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-12">
                            <h2 class="contact-title">Données générales</h2>
                         </div>
                         <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control valid" name="forme" id="forme" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Forme juridique'" placeholder="Forme juridique">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control valid" name="agrement" id="agrement" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'N° D agrément'" placeholder="N° D agrément">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="nbre_agence" id="nbre_agence" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre d agence (y compris le siège)'" placeholder="Nombre d agence (y compris le siège)">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="nbre_client" id="nbre_client" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre total de clients (membres)'" placeholder="Nombre total de clients (membres)">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="encours_credit" id="encours_credit" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Montant de l encours de credit'" placeholder="Montant de l encours de crédit">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="encours_epargne" id="encours_epargne" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Montant de l encours d epargne (FCFA) '" placeholder="Montant de l encours d epargne (FCFA) ">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="par" id="par" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PAR 90 jours'" placeholder="PAR 90 jours">
                                </div>
                            </div>
                         </div>
                         
                         <div class="col-12">
                            <h2 class="contact-title">Cartographie</h2>
                         </div>
                         <div class="row">
                          
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="situation_siege" id="situation_siege" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Situation géographique du siege'" placeholder="Situation géographique du siege">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="plan_siege" id="plan_siege" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Situation géographique du siege '" placeholder="Situation géographique des agences ">
                                </div>
                            </div>
                            
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="situation_agences" id="situation_agences" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Situation géographique du siege'" placeholder="Situation géographique du siege">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input class="form-control" name="plan_agences" id="plan_agences" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Situation géogrpahique des agences '" placeholder="Situation géographique des agences ">
                                </div>
                            </div>
                           
                            
                         </div>
                        
                        
                        <div class="form-group mt-3">
                            <button type="submit" id="submit" name="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                        </div>
                    </form>
                </div>    
    </div>
   
</div>
<!-- service_area_end -->


@endsection