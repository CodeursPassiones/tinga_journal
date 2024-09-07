'use strict';

let AppAdminIssueDeleteManager = function () {
    let deleteBtns;

    let handleIssueDelete = () => {
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                let deleteUrl = "/admin/issues/delete/" + btn.id;
                let parent = e.target.closest('li.parent');
                let nature = parent.querySelector('.issue').innerText;
                AppModules.deleteTableItemSubmission(btn, parent, nature, deleteUrl);

            })
        });
    }
    return {
        init: () => {

            deleteBtns = document.querySelectorAll('.issueDeleteBtn');


            handleIssueDelete();
            // console.log(445);
        }
    }
}();
document.addEventListener('DOMContentLoaded', (e) => {
    AppAdminIssueDeleteManager.init();
})