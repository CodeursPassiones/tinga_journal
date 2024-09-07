'use strict';

let AppAdminVolumeDeleteManager = function () {
    let deleteBtns;

    let handleVolumeDelete = () => {
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let deleteUrl = "/admin/volumes/delete/" + btn.id;
                let parent = e.target.closest('li.parent');
                let nature = parent.querySelector('.volume').innerText;
                AppModules.deleteTableItemSubmission(btn, parent, nature, deleteUrl);

            })
        });
    }
    return {
        init: () => {

            deleteBtns = document.querySelectorAll('.volumeDeleteBtn');


            handleVolumeDelete();
            // console.log(445);
        }
    }
}();
document.addEventListener('DOMContentLoaded', (e) => {
    AppAdminVolumeDeleteManager.init();
})