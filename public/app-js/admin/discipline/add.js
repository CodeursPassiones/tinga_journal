"use strict";
let AppDisciplineAdd = (function () {
    let addDisciplineForm;

    let disciplineAddBtn;

    const addNatureUrl = "/admin/disciplines/store";

    let handleUserAdd = () => {
        disciplineAddBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(addDisciplineForm);
            AppModules.submitFromBtn(
                disciplineAddBtn,
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
            addDisciplineForm = document.querySelector("#disciplineAddForm");
            if (!addDisciplineForm) {
                return;
            }

            disciplineAddBtn =
                addDisciplineForm.querySelector("#disciplineAddBtn");

            handleUserAdd();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppDisciplineAdd.init();
});
