"use strict";

let AppAdminArticleFileMAnager = (function () {
    let articleAddForm;
    let articleAddBtn;
    const initFilePond = () => {
    // Get a reference to the file input element
    const inputElements = document.querySelectorAll('input[type="file"]');
    const labelOptions ={
        labelIdle: `Glissez-déposez le document de l'article ou <span class="filepond--label-action"> Parcourez </span>`,
        labelInvalidField: 'Le champ contient des fichiers non valides',
        labelFileWaitingForSize: 'En attente de la taille du fichier',
        labelFileSizeNotAvailable: 'Taille du fichier non disponible',
        labelFileLoading: 'Téléchargement...',
        labelFileLoadError: 'Erreur pendant le chargement',
        labelFileProcessing: 'Téléchargement...',
        labelFileProcessingComplete: 'Téléchargement terminé',
        labelFileProcessingAborted: 'Téléchargement annulé',
        labelFileProcessingError: 'Erreur lors du téléchargement',
        labelFileProcessingRevertError: 'Erreur lors de l’annulation',
        labelFileRemoveError: 'Erreur pendant la suppression',
        labelTapToCancel: 'Appuyez pour annuler',
        labelTapToRetry: 'Appuyez pour réessayer',
        labelTapToUndo: 'Appuyez pour annuler',
        labelButtonRemoveItem: 'Supprimer',
        labelButtonAbortItemLoad: 'Annuler',
        labelButtonRetryItemLoad: 'Réessayer',
        labelButtonAbortItemProcessing: 'Annuler',
        labelButtonUndoItemProcessing: 'Annuler',
        labelButtonRetryItemProcessing: 'Réessayer',
        labelButtonProcessItem: 'Télécharger',
        labelfiletypenotallowed: 'Ce fichier n\'est pas support%C3%A9. Seuls les fichiers PDF sont autoris%C3%A9s.',
        filevalidatetypelabelexpectedtypes: 'Seuls les fichiers PDF sont autoris%C3%A9s.'
    }
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        
      );
      inputElements.forEach((inputElement)=>{
        // Create a FilePond instance
        const pond =   FilePond.create(inputElement, {
            ...labelOptions,
            acceptedFileTypes: ['application/pdf'],  // Limiter aux fichiers PDF
            server: '/upload',
            fileValidateTypeLabelExpectedTypesMap :{"application/pdf":".pdf"}
        });
      })

    };

    const addArticleUrl = "/admin/articles/store/metadata";

    const handleSubmit = () => {
        articleAddBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(articleAddForm);
            console.log(formData);
            
            AppModules.submitFromBtn(
                articleAddBtn,
                formData,
                addArticleUrl,
                addNatureCallback
            );
        });
    };
    let addNatureCallback = () => {
        window.location.href = "/admin/articles/view/files/"+window.articleMtl;
    };
    return {
        init: () => {

            initFilePond();
            articleAddForm = document.querySelector("#articleMetadataForm");

            if (!articleAddForm) {
                return;
            }

            articleAddBtn = articleAddForm.querySelector("#articleMetadataBtn");

            handleSubmit();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleFileMAnager.init();
});
