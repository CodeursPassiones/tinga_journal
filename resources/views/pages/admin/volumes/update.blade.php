 <!--************************************
   Add Discipline	Popup Start
 *************************************-->
 <div class="sj-modalboxarea modal fade " tabindex="-1" role="dialog" id="UpdateVolumeModal{{ $volume->id }}">
     <div class="modal-dialog" role="document">
         <div class="sj-modalcontent modal-content">
             <div class="sj-popuptitle">
                 <h2>Mettre à Jour Le Volume</h2>
                 <a href="javascript;void(0);" class="sj-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"
                         aria-label="Close"></i></a>
             </div>
             <div class="modal-body">
                 <form class="sj-formtheme sj-formregister sj-formregistervtwo modelUpdateForm"
                     data-model-update-url="{{ route('admin.volumes.update') }}">
                     <input type="hidden" name="volume_id" value={{ $volume->id }}>
                     <fieldset>
                         <div class="form-group">
                             <label for="titlz" class="required">Titre :</label>
                             <input type="text" name="title" id="title" class="form-control"
                                 placeholder="Titre" value="{{ $volume->title }}">
                         </div>

                         <div class="form-group">
                             <label for="year">Année :</label>
                             <input type="text" name="year" id="year" class="form-control" placeholder="YYYY"
                                 value="{{ $volume->year }}">
                         </div>


                     </fieldset>
                     <div class="sj-popupbtn">
                         <button class="sj-btn sj-btnactive modelUpdateBtn" type="submit">
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
   Add Discipline	Popup End
 *************************************-->
