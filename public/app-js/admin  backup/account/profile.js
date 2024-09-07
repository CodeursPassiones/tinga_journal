"use strict";

let AppAdminAccountProfilePic = (function () {
    const initFilePond = () => {
        // Get a reference to the file input element
        const inputElement = document.querySelector("#photo");

        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {
            labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
            imagePreviewHeight: 170,
            imageCropAspectRatio: "1:1",
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: "compact circle",
            styleLoadIndicatorPosition: "center bottom",
            styleProgressIndicatorPosition: "right bottom",
            styleButtonRemoveItemPosition: "left bottom",
            styleButtonProcessItemPosition: "right bottom",
        });
    };

    return {
        init: () => {
            initFilePond();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminAccountProfilePic.init();
});
