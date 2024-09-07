"use strict";
let AppDisciplineAdd = (function () {
    let addDisciplineForm;

    let disciplineAddBtn;
 

    const addDisciplineUrl = "/admin/disciplines/store";
    

    let handleDisciplineAdd = () => {
        disciplineAddBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(addDisciplineForm);
            AppModules.submitFromBtn(
                disciplineAddBtn,
                formData,
                addDisciplineUrl,
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
            
            if (!addDisciplineForm ) {
                return;
            }

            disciplineAddBtn =
                addDisciplineForm.querySelector("#disciplineAddBtn");
            

            handleDisciplineAdd();
            
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppDisciplineAdd.init();
});
