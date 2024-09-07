"use strict";
let AppAdminUserUpdate = (function () {
    let userUpdateForms;

    const addNatureUrl = "/admin/users/update";

    let handleUserUpdate = () => {
        userUpdateForms.forEach((userUpdateForm) => {
            const userUpdateBtn =
                userUpdateForm.querySelector(".userUpdateBtn");

            userUpdateBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(userUpdateForm);
                AppModules.submitFromBtn(
                    userUpdateBtn,
                    formData,
                    addNatureUrl,
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
            userUpdateForms = document.querySelectorAll(".userUpdateForm");
            if (!userUpdateForms) {
                return;
            }

            handleUserUpdate();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminUserUpdate.init();
});
