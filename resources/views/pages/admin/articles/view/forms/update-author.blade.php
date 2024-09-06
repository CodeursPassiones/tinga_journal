 <!--************************************
   Add User	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="updateAuthorModal{{ $articleUsers->user->id }}">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Ajouter Auteur</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo" id="authorCreateAndSyncForm">
                     <input type="hidden" name="user_id" value="{{ $articleUsers->user->id }}">
                     <fieldset>
                         <div class="form-group">
                             <label for="lastname" class="required">Nom :</label>
                             <input type="text" name="lastname" class="form-control" placeholder="Nom*"
                                 id="lastanme" value="{{ $articleUsers->user->lastname }}">
                         </div>
                         <div class="form-group">
                             <label for="firstname" class="required">Prénom :</label>
                             <input type="text" name="firstname" class="form-control" placeholder="Prenom*"
                                 id="firstname" value="{{ $articleUsers->user->firstname }}">
                         </div>
                         <div class="form-group">
                             <label for="email" class="required">Email :</label>
                             <input type="email" name="email" class="form-control" placeholder="Email*"
                                 id="email" value="{{ $articleUsers->user->email }}">
                         </div>
                         <div class="form-group">
                             <label for="orcid" class="">ORCID :</label>
                             <input type="text" name="orcid" class="form-control" placeholder="ORCID*"
                                 id="orcid" value="{{ $articleUsers->user->orcid }}">
                         </div>



                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive authorUnpdateAndSyncBtn" type="submit" disabled>
                             <span class="normal-status">
                                 Mettre à jour
                             </span>
                             <span class="indicateur d-none">
                                 <span><i class="fa fa-spinner text-secondary"></i>
                                     Chargement...
                                 </span>

                         </button>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>
 <!--************************************
   Add User	Popup End
 *************************************-->
