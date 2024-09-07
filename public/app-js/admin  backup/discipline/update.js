"use strict";
let AppAdminDisciplineUpdate = (function () {
    let disciplineUpdateForms;

    const updateDisciplineUrl = "/admin/disciplines/update";

    let handleUserUpdate = () => {
        disciplineUpdateForms.forEach((userUpdateForm) => {
            const disciplineUpdateBtn =
                userUpdateForm.querySelector(".disciplineUpdateBtn");

            disciplineUpdateBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(userUpdateForm);
                AppModules.submitFromBtn(
                    disciplineUpdateBtn,
                    formData,
                    updateDisciplineUrl,
                    addNatureCallback
                );
            });
        });
    };

    let addNatureCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            disciplineUpdateForms = document.querySelectorAll(".disciplineUpdateForm");
            if (!disciplineUpdateForms) {
                return;
            }

            handleUserUpdate();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminDisciplineUpdate.init();
});
