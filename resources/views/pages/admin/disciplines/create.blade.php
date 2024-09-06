 <!--************************************
   Add Discipline	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="addDisciplineModal">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Ajouter une disciplien</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo " id="disciplineAddForm">

                     <input type="hidden" name="journal_id" value={{ $journal->id }}>
                     <fieldset>
                         <div class="form-group">
                             <label for="name" class="required">Libéllé :</label>
                             <input type="text" name="name" id="name" class="form-control"
                                 placeholder="Libellé">
                         </div>

                         <div class="form-group">
                             <label for="description">Description :</label>
                             <textarea name="description" id="description" class="form-control"></textarea>
                         </div>


                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive " type="submit" id="disciplineAddBtn">
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
