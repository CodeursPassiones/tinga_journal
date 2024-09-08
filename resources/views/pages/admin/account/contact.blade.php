<div class="sj-addarticleholdcontent">
    <div class="sj-dashboardboxtitle">
        <h2>Contact Et Adresse</h2>
    </div>
    <div class="sj-acsettingthold">

        <form class="sj-formtheme sj-formaddtemplates" id="">
            <input type="hidden" name="id" value={{ auth()->user()->id }}>
            <fieldset class="row">
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" name="firstname" class="form-control" placeholder="Votre Nom"
                        value={{ auth()->user()->firstname }}>
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" name="lastname" class="form-control" placeholder="Votre Prénom"
                        value={{ auth()->user()->lastname }}>
                </div>
            </fieldset>

            <fieldset class="row">
                <div class="form-group  col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" name="salutation" class="form-control" placeholder="Votre Titre"
                        value={{ auth()->user()->salutation }}>
                </div>

                <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 sj-select">
                    <select name="gender" class="form-control" placeholder="Votre Genre">
                        <option value="Female" {{ auth()->user()->gender == 'Female' ? 'checked' : '' }}>Féminin
                        </option>
                        <option value="Male" {{ auth()->user()->gender == 'Male' ? 'checked' : '' }}>Masculin
                        </option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <input type="date" name="birthdate" class="form-control" placeholder="Votre date de naissance"
                        value={{ auth()->user()->birthdate }}>
                </div>
                <div class="form-group">
                    <textarea name="bio" id="" class="form-control" placeholder="Bio" rows="5">{{ auth()->user()->bio }}</textarea>
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
