"use strict";
let AppUserAdd = (function () {
    let addUserForm;

    let userAddBtn;

    const addNatureUrl = "/admin/users/store";

    let handleUserAdd = () => {
        userAddBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(addUserForm);
            AppModules.submitFromBtn(
                userAddBtn,
                formData,
                addNatureUrl,
                addNatureCallback
            );
        });
    };

    let addNatureCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            addUserForm = document.querySelector("#userAddForm");
            if (!addUserForm) {
                return;
            }

            userAddBtn = addUserForm.querySelector("#userAddBtn");

            handleUserAdd();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppUserAdd.init();
});
