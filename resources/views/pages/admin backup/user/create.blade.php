 <!--************************************
   Add User	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="addUserModal">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Ajouter Utilisateur</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo" id="userAddForm">
                     <fieldset>
                         <div class="form-group">
                             <input type="text" name="lastname" class="form-control" placeholder="Nom*">
                         </div>
                         <div class="form-group">
                             <input type="text" name="firstname" class="form-control" placeholder="Prenom*">
                         </div>
                         <div class="form-group">
                             <input type="email" name="email" class="form-control" placeholder="Email*">
                         </div>
                         <div class="form-group">
                             <input type="password" name="password" class="form-control" placeholder="Mot De Passe*">
                         </div>
                         <div class="form-group">
                             <input type="password" name="password_confirmation" class="form-control"
                                 placeholder="Confirmer Mot De Passe*">
                         </div>
                         <div class="sj-selectgroup">
                             @foreach ($roles as $role)
                                 <span class="sj-radio">
                                     <input id="sj-a{{ $role->id }}" type="radio" name="role"
                                         value="{{ $role->name }}" />
                                     <label for="sj-a{{ $role->id }}">
                                         {{ $role->name }}

                                     </label>
                                 </span>
                             @endforeach
                         </div>
                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive" type="submit" id="userAddBtn">
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
