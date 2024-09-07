"use strict";
let AppIssueAddManager = (function () {
    let addIssueForm;

    let issueAddBtn;
 

    const addIssueUrl = "/admin/issues/store";
    

    let handleIssueAdd = () => {
        issueAddBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(addIssueForm);
            AppModules.submitFromBtn(
                issueAddBtn,
                formData,
                addIssueUrl,
                addIssueCallback
            );
        });
    };

 

    let addIssueCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            addIssueForm = document.querySelector("#issueAddForm");
            
            if (!addIssueForm ) {
                return;
            }

            issueAddBtn =
                addIssueForm.querySelector("#issueAddBtn");
            

                handleIssueAdd();
            
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppIssueAddManager.init();
});
