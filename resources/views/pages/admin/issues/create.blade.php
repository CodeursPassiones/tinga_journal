 <!--************************************
   Add ISSUE	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="addIssueModal">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Nouveau Numéro</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo " id="issueAddForm">

                     <input type="hidden" name="volume_id" value={{ $volume->id }}>
                     <fieldset>
                         <div class="form-group">
                             <label for="titlz" class="required">Titre :</label>
                             <input type="text" name="title" id="title" class="form-control"
                                 placeholder="Titre">
                         </div>

                         <div class="form-group">
                             <label for="publication_date">Date de publication :</label>
                             <input type="date" name="publication_date" id="publication_date" class="form-control"
                                 placeholder="" value="">
                         </div>



                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive " type="submit" id="issueAddBtn">
                             <span class="normal-status">
                                 Créer
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
