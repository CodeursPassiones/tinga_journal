 <!--************************************
   Add Discipline	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade" tabindex="-1" role="dialog" id="addVolumeModal">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Nouveau Volume</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo " id="modelAddForm"
                     data-model-add-url="{{ route('admin.volumes.store') }}">

                     <input type="hidden" name="journal_id" value={{ $journal->id }}>
                     <fieldset>
                         <div class="form-group">
                             <label for="titlz" class="required">Titre :</label>
                             <input type="text" name="title" id="title" class="form-control"
                                 placeholder="Titre">
                         </div>

                         <div class="form-group">
                             <label for="year">Année :</label>
                             <input type="text" name="year" id="year" class="form-control"
                                 placeholder="YYYY">
                         </div>


                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive " type="submit" id="modelAddBtn">
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
