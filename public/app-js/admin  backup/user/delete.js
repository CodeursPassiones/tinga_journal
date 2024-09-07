'use strict';

let AppAdminUserDeleteManager = function () {
    let deleteBtns;

    let handleMembersDelete = () => {
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let deleteUrl = "/admin/users/delete/" + btn.id;
                let parent = e.target.closest('li.parent');
                let nature = parent.querySelector('.userItem').innerText;
                AppModules.deleteTableItemSubmission(btn, parent, nature, deleteUrl);

            })
        });
    }
    return {
        init: () => {

            deleteBtns = document.querySelectorAll('.userDeleteBtn');


            handleMembersDelete();
            // console.log(445);
        }
    }
}();
document.addEventListener('DOMContentLoaded', (e) => {
    AppAdminUserDeleteManager.init();
})