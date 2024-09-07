"use strict";

let AppAdminArticleAuthorManager = (function () {
    const initSelect2 = () => {
        jQuery(".authors-select").select2({
            placeholder: "Choisissez un auteur",
            allowClear: true,
        });
    };

    return {
        init: () => {
            initSelect2();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleAuthorManager.init();
});
