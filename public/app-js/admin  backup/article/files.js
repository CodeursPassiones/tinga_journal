"use strict";

let AppAdminArticleFileMAnager = (function () {
    let articleFilesForm;
    let articleFileBtn;
    let pondImage;
    let pondPDF;
    const labelOptions ={
        labelIdle: `Glissez-déposez l'image de l'article ou <span class="filepond--label-action"> Parcourez </span>`,
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
    const initImageUpload = () => {
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[name="image"]');
  
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        
      );
      
    // Create a FilePond instance
    pondImage=  FilePond.create(inputElement, {
        ...labelOptions,
        maxFiles: 1,  // Limite à 1 fichier
        labelFileTypeNotAllowed: 'Seuls les fichiers PNG, JPEG ou GIF sont autorisés.',
        fileValidateTypeLabelExpectedTypes: 'Seuls les fichiers images sont autorisés.',
   
        acceptedFileTypes: ["image/png", "image/jpeg", "image/gif"],  // Limiter aux fichiers PDF
        // server: '/upload',
        fileValidateTypeLabelExpectedTypesMap :{"application/pdf":".pdf"}
    });
      

    };
    const initFilesUpload = () => {
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[name="files[]"');
   
        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImagePreview,
            
          );
          
        // Create a FilePond instance
         pondPDF =   FilePond.create(inputElement, {
            ...labelOptions,
            labelIdle: `Glissez-déposez les documents de l'article ou <span class="filepond--label-action"> Parcourez </span>`,
            allowMultiple:true,
            acceptedFileTypes: ['application/pdf'],  // Limiter aux fichiers PDF
            // server: '/upload',
            fileValidateTypeLabelExpectedTypesMap :{"application/pdf":".pdf"},labelFileTypeNotAllowed: 'Seuls les fichiers PDF sont autorisés.',
            fileValidateTypeLabelExpectedTypes: 'Seuls les fichiers PDF sont autorisés.',
            
        });
          
    
        };
    const addArticleFilesUrl = "/admin/articles/store/files";

    const handleSubmit = () => {
        articleFileBtn.addEventListener("click", async (e) => {
            e.preventDefault();
            const formData = new FormData(articleFilesForm);
            console.log(formData);
           

            // Ajouter les fichiers image et PDF au formulaire
            pondImage.getFiles().forEach(file => {
                formData.append('image', file.file);
            });
            pondPDF.getFiles().forEach(file => {
                formData.append('files[]', file.file);
            });
            AppModules.submitFromBtn(
                articleFileBtn,
                formData,
                addArticleFilesUrl,
                addArticleFilesCallback
            );
        });
    };
    let addArticleFilesCallback = () => {
        window.location.reload()
    };
    return {
        init: () => {

            initImageUpload();
            initFilesUpload();
            articleFilesForm = document.querySelector("#articleFilesForm");

            if (!articleFilesForm) {
                return;
            }

            articleFileBtn = articleFilesForm.querySelector("#articleFilesBtn");

            handleSubmit();
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppAdminArticleFileMAnager.init();
});
