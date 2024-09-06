'use strict';

let AppAdminDisciplineDeleteManager = function () {
    let deleteBtns;

    let handleMembersDelete = () => {
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let deleteUrl = "/admin/disciplines/delete/" + btn.id;
                let parent = e.target.closest('li.parent');
                let nature = parent.querySelector('.discipline').innerText;
                AppModules.deleteTableItemSubmission(btn, parent, nature, deleteUrl);

            })
        });
    }
    return {
        init: () => {

            deleteBtns = document.querySelectorAll('.disciplineDeleteBtn');


            handleMembersDelete();
            // console.log(445);
        }
    }
}();
document.addEventListener('DOMContentLoaded', (e) => {
    AppAdminDisciplineDeleteManager.init();
})