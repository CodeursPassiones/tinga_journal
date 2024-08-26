"use strict";

let AppAdminArticleCreation = (function () {
    let initSummerNote = () => {
        jQuery("#content").summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            lang: "fr-FR",
        });
    };
    return {
        init: () => {
            initSummerNote();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleCreation.init();
});
