<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Informations Personnelles</h2>
    </div>
    <div class="sj-acsettingthold">

        <form class="sj-formtheme sj-formaddtemplates modelUpdateForm" id=""
            data-model-update-url="{{ route('admin.account.update.info') }}">
            <input type="hidden" name="id" value={{ auth()->user()->id }}>
            <fieldset class="row">
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="firstname" class="required">Prénoms :</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Votre Nom"
                        value={{ auth()->user()->firstname }}>
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="lastname" class="required">Nom :</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre Prénom"
                        value={{ auth()->user()->lastname }}>
                </div>
            </fieldset>

            <fieldset class="row">
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="salutation" class="">Titre :</label>
                    <input type="text" name="salutation" id="salutation" class="form-control"
                        placeholder="Votre Titre" value={{ auth()->user()->salutation }}>
                </div>

                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <label for="gender">Genre :</label>
                    <select name="gender" id="gender" class="form-control sj-select" placeholder="Votre Genre">
                        <option value="Female" {{ auth()->user()->gender == 'Female' ? 'checked' : '' }}>Féminin
                        </option>
                        <option value="Male" {{ auth()->user()->gender == 'Male' ? 'checked' : '' }}>Masculin
                        </option>
                    </select>
                </div>
            </fieldset>
            <fieldset class="row">
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="birthdate">Date de naissance :</label>

                    <input type="date" name="birthdate" id="birthdate" class="form-control"
                        placeholder="Votre date de naissance" value={{ auth()->user()->birthdate }}>

                </div>
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <label for="username">Username :</label>

                    <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                        value={{ auth()->user()->username }}>

                </div>

            </fieldset>
            <fieldset>

                <div class="form-group">
                    <label for="bio">Biographie :</label>

                    <textarea name="bio" id="bio" class="form-control" placeholder="Bio" rows="5">{{ auth()->user()->bio }}</textarea>
                </div>
            </fieldset>
            <div class="sj-btnarea sj-updatebtns">
                <button class="sj-btn sj-btnactive modelUpdateBtn" type="submit" id="passUpBtn">
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
