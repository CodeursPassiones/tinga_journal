"use strict";

let AppAdminArticleEdition = (function () {
    let articleUpdateForm;
    let articleUpdateBtn;
    const initSummerNote = () => {
        jQuery("#content").summernote({
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
    const updateArticleUrl = "/admin/articles/store";

    const handleSubmit = () => {
        articleUpdateBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(articleUpdateForm);
            AppModules.submitFromBtn(
                articleUpdateBtn,
                formData,
                updateArticleUrl,
                updateNatureCallback
            );
        });
    };
    let updateNatureCallback = () => {
        window.location.href = "/admin/articles/list";
    };
    const handleHide = () => {
        const hideBtn = document.querySelector("#hideArticle");
        hideBtn.addEventListener("click", (e) => {
            e.preventDefault();
            hideBtn.closest("form").submit();
        });
    };
    return {
        init: () => {
            articleUpdateForm = document.querySelector("#articleUpdateForm");

            if (!articleUpdateForm) {
                return;
            }

            articleUpdateBtn =
                articleUpdateForm.querySelector("#articleUpdateBtn");

            initSummerNote();
            initSelect2();
            handleSubmit();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleEdition.init();
});
