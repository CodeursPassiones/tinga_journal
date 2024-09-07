 <!--************************************
   Add User	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="addAuthorModal">
     @php
         $article_id = Illuminate\Support\Facades\Crypt::encryptString($article->id);
     @endphp
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Ajouter Auteur</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo" id="authorCreateAndSyncForm">
                     <input type="hidden" name="article_id" value="{{ $article_id }}">
                     <fieldset>
                         <div class="form-group">
                             <label for="lastname" class="required">Nom :</label>
                             <input type="text" name="lastname" class="form-control" placeholder="Nom*"
                                 id="lastanme">
                         </div>
                         <div class="form-group">
                             <label for="firstname" class="required">Prénom :</label>
                             <input type="text" name="firstname" class="form-control" placeholder="Prenom*"
                                 id="firstname">
                         </div>
                         <div class="form-group">
                             <label for="email" class="required">Email :</label>
                             <input type="email" name="email" class="form-control" placeholder="Email*"
                                 id="email">
                         </div>
                         <div class="form-group">
                             <label for="orcid" class="">ORCID :</label>
                             <input type="text" name="orcid" class="form-control" placeholder="ORCID*"
                                 id="orcid">
                         </div>



                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive" type="submit" id="authorCreateAndSyncBtn">
                             <span class="normal-status">
                                 Ajouter
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
