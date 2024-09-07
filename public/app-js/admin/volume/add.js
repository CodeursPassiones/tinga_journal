"use strict";
let AppVolumeAddManager = (function () {
    let addVolumeForm;

    let volumeAddBtn;
 

    const addVolumeUrl = "/admin/volumes/store";
    

    let handleVolumeAdd = () => {
        volumeAddBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(addVolumeForm);
            AppModules.submitFromBtn(
                volumeAddBtn,
                formData,
                addVolumeUrl,
                addVolumeCallback
            );
        });
    };

 

    let addVolumeCallback = () => {
        location.reload();
    };
    return {
        init: () => {
            addVolumeForm = document.querySelector("#volumeAddForm");
            
            if (!addVolumeForm ) {
                return;
            }

            volumeAddBtn =
                addVolumeForm.querySelector("#volumeAddBtn");
            

                handleVolumeAdd();
            
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppVolumeAddManager.init();
});
