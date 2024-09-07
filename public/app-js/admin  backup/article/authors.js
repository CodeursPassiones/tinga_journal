"use strict";

let AppAdminArticleAuthorManager = (function () {
    let authorCreateAndSyncForm;
    let authorCreateAndSyncBtn;

    const initSelect2 = () => {
        jQuery(".authors-select").select2({
            placeholder: "Choisissez un auteur",
            allowClear: true
        });
    };
    const authorCreateAndSyncUrl = "/admin/articles/store/author/create-and-sync";

    const handleCreateAndSync = () => {
        authorCreateAndSyncBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(authorCreateAndSyncForm);
            console.log(formData);
            
            AppModules.submitFromBtn(
                authorCreateAndSyncBtn,
                formData,
                authorCreateAndSyncUrl,
                authorCreateAndSyncCallback
            );
        });
    };

    let authorCreateAndSyncCallback = () => {
        window.location.reload()
    };
    return {
        init: () => {

            
            initSelect2();
            authorCreateAndSyncForm = document.querySelector("#authorCreateAndSyncForm");

            if (!authorCreateAndSyncForm) {
                return;
            }

            authorCreateAndSyncBtn = authorCreateAndSyncForm.querySelector("#authorCreateAndSyncBtn");

            handleCreateAndSync();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleAuthorManager.init();
});
