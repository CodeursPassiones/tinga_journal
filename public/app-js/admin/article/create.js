"use strict";

let AppAdminArticleCreation = (function () {
    const initSummerNote = () => {
        jQuery("#content").summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            lang: "fr-FR",
        });
    };
    const initSelect2 = () => {
        jQuery(".authors-select").select2({
            placeholder: "Choisissez les",
        });
    };
    return {
        init: () => {
            initSummerNote();
            initSelect2();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleCreation.init();
});
