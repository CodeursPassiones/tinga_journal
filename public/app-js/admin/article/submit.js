"use strict";

let AppAdminArticleSubmitMAnager = (function () {
    let submitArticleForm;
    let submitArticleBtn;

    const addArticleUrl = "/admin/articles/submit";

    const handleSubmit = () => {
        submitArticleBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(submitArticleForm);
            console.log(formData);
            
            AppModules.submitFromBtn(
                submitArticleBtn,
                formData,
                addArticleUrl,
                addNatureCallback
            );
        });
    };
    let addNatureCallback = () => {
        window.location.href = "/admin/articles/list/SUBMITTED"
    };
    return {
        init: () => {

            
            
            submitArticleForm = document.querySelector("#submitArticleForm");

            if (!submitArticleForm) {
                return;
            }

            submitArticleBtn = submitArticleForm.querySelector("#submitArticleBtn");

            handleSubmit();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleSubmitMAnager.init();
});
