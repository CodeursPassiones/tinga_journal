"use strict";
let AppAdminVolumeUpdate = (function () {
    let volumeUpdateForms;

    const updateVolumeUrl = "/admin/volumes/update";

    let handleVolumeUpdate = () => {
        volumeUpdateForms.forEach((volumeUpdateForm) => {
            const disciplineUpdateBtn =
                volumeUpdateForm.querySelector(".volumeUpdateBtn");

            disciplineUpdateBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(volumeUpdateForm);
                AppModules.submitFromBtn(
                    disciplineUpdateBtn,
                    formData,
                    updateVolumeUrl,
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
            volumeUpdateForms = document.querySelectorAll(".volumeUpdateForm");
            if (!volumeUpdateForms) {
                return;
            }

            handleVolumeUpdate();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminVolumeUpdate.init();
});
