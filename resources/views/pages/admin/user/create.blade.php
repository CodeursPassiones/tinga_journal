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
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo">
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
                             <input type="password" name="passwordConfirmation" class="form-control"
                                 placeholder="Confirmer Mot De Passe*">
                         </div>
                         <div class="sj-selectgroup">
                             @foreach ($roles as $role)
                                 <span class="sj-radio">
                                     <input id="sj-{{ $role->id }}" type="radio" name="role"
                                         value="{{ $role->id }}">
                                     <label for="sj-{{ $role->id }}">{{ $role->name }}</label>
                                 </span>
                             @endforeach
                         </div>
                     </fieldset>
                     <div class="sj-popupbtn">
                         <button type="submit" class="sj-btn sj-btnactive">Soumettre</button>
                     </div>
                 </form>

             </div>
         </div>
     </div>
 </div>
 <!--************************************
   Add User	Popup End
 *************************************-->
