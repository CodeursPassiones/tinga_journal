"use strict";
let AppDisciplineAdd = (function () {
    let addDisciplineForm;

    let disciplineAddBtn;
    let addIssueForm;

    let issueAddBtn;

    const addDissciplineUrl = "/admin/disciplines/store";
    const addIssueUrl = "/admin/issues/store";

    let handleDisciplineAdd = () => {
        disciplineAddBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(addDisciplineForm);
            AppModules.submitFromBtn(
                disciplineAddBtn,
                formData,
                addDissciplineUrl,
                addNatureCallback
            );
        });
    };

    let handleIssueAdd = () => {
        issueAddBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(addIssueForm);
            AppModules.submitFromBtn(
                issueAddBtn,
                formData,
                addIssueUrl,
                addNatureCallback
            );
        });
    };

    let addNatureCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            addDisciplineForm = document.querySelector("#disciplineAddForm");
            addIssueForm = document.querySelector("#issueAddForm");
            if (!addDisciplineForm || !addIssueForm) {
                return;
            }

            disciplineAddBtn =
                addDisciplineForm.querySelector("#disciplineAddBtn");
            issueAddBtn = addIssueForm.querySelector("#issueAddBtn");

            handleDisciplineAdd();
            handleIssueAdd();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppDisciplineAdd.init();
});
