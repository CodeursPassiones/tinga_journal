"use strict";

let AppAdminArticleCreation = (function () {
    let articleAddForm;
    let articleAddBtn;
    const initSummerNote = () => {
        jQuery("#abstract").summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            lang: "fr-FR",
        });
    };
    const initSelect2 = () => {
        jQuery(".authors-select").select2({
            placeholder: "Choisissez les",
        });
    };
    const addArticleUrl = "/admin/articles/store/metadata";

    const handleSubmit = () => {
        articleAddBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(articleAddForm);
            console.log(formData);
            
            AppModules.submitFromBtn(
                articleAddBtn,
                formData,
                addArticleUrl,
                addNatureCallback
            );
        });
    };
    let addNatureCallback = () => {
        window.location.href = "/admin/articles/view/files/"+window.articleMtl;
    };
    return {
        init: () => {
            articleAddForm = document.querySelector("#articleMetadataForm");

            if (!articleAddForm) {
                return;
            }

            articleAddBtn = articleAddForm.querySelector("#articleMetadataBtn");

            initSummerNote();
            initSelect2();
            handleSubmit();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleCreation.init();
});
