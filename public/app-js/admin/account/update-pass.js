"use strict";
let AppAccountPasswordUpdate = (function () {
    let formPassUpdate;

    let passUpBtn;

    const updatePasswordUrl = "/admin/account/password/update";

    let updateAccountPassword = () => {
        passUpBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(formPassUpdate);
            AppModules.submitFromBtn(
                passUpBtn,
                formData,
                updatePasswordUrl,
                updateMembreCallback
            );
        });
    };

    let updateMembreCallback = () => {
        console.log("Done");
    };

    return {
        init: () => {
            formPassUpdate = document.querySelector("#passUpForm");

            if (!formPassUpdate) {
                return;
            }
            passUpBtn = formPassUpdate.querySelector("#passUpBtn");

            updateAccountPassword();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAccountPasswordUpdate.init();
});
