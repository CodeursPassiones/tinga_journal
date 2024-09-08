<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Changer Password</h2>
    </div>
    <div class="sj-acsettingthold">
        <form class="sj-formtheme sj-formpassword modelUpdateForm"
            data-model-update-url="{{ route('admin.account.update.password') }}">
            <input type="hidden" name="id" value={{ auth()->user()->id }}>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <label for="current_password" class="required">Mot De passe Actuel :</label>
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <label for="new_password" class="required">Nouveau Mot De Passe :</label>
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <label for="new_password_confirmation" class="required">Confirmer Mot De Passe :</label>
                </div>


            </fieldset>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="current_password" id="current_password" class="form-control"
                        placeholder="Old Password">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="new_password" id="new_password" class="form-control"
                        placeholder="New Password">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="form-control" placeholder="Confirm">
                </div>

            </fieldset>
            <div class="sj-btnarea sj-updatebtns">
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
