"use strict";
let AppAdminIssueUpdate = (function () {
    let issueUpdateForms;

    const updateIssueUrl = "/admin/issues/update";

    let handleVolumeUpdate = () => {
        issueUpdateForms.forEach((issueUpdateForm) => {
            const issueUpdateBtn =
                issueUpdateForm.querySelector(".issueUpdateBtn");

            issueUpdateBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(issueUpdateForm);
                AppModules.submitFromBtn(
                    issueUpdateBtn,
                    formData,
                    updateIssueUrl,
                    addIssueCallback
                );
            });
        });
    };

    let addIssueCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            issueUpdateForms = document.querySelectorAll(".issueUpdateForm");
            if (!issueUpdateForms) {
                return;
            }

            handleVolumeUpdate();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminIssueUpdate.init();
});
