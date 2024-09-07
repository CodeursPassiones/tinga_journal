<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Changer Password</h2>
    </div>
    <div class="sj-acsettingthold">
        <form class="sj-formtheme sj-formpassword" id="passUpForm">
            <input type="hidden" name="id" value={{ auth()->user()->id }}>
            <fieldset>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="current_password" class="form-control" placeholder="Old Password">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="new_password" class="form-control" placeholder="Nouveau Mot De Passe">
                </div>
                <div class="form-group sj-inputwithicon sj-password">
                    <i class="lnr lnr-lock"></i>
                    <input type="password" name="new_password_confirmation" class="form-control"
                        placeholder="Retaper Mot De passe">
                </div>

            </fieldset>
            <div class="sj-btnarea sj-updatebtns">
                <button class="sj-btn sj-btnactive" type="submit" id="passUpBtn">
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
