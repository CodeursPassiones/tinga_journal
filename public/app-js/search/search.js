"use strict";

// Class definition
var KTUSearch = (function () {
    // Sélectionnez l'élément d'entrée de recherche
    const searchInput = document.querySelector(
        '[data-tinga-items-search-filter="search"]'
    );

    // Sélectionnez tous les éléments de département
    const searchElements = document.querySelectorAll(
        '[data-tinga-search-element="item"]'
    );

    var handleSearch = function () {
        searchInput.addEventListener("input", function () {
            const searchQuery = searchInput.value.toLowerCase();

            // Parcourez tous les éléments de département
            searchElements.forEach(function (searchElement) {
                const searchItems = Array.from(
                    searchElement.querySelectorAll(".item_key")
                );

                const searchKeys = searchItems.map((searchItem) =>
                    searchItem.textContent.toLowerCase()
                );
                const match = searchKeys.some((key) =>
                    key.includes(searchQuery)
                );

                // if (match) {
                //     searchElement.style.display = 'block';
                // } else {
                //     searchElement.style.display = 'none';
                // }

                if (match) {
                    searchElement.hidden = false;
                } else {
                    searchElement.hidden = true;
                }
            });
        });
    };
    // Public methods
    return {
        init: function () {
            handleSearch();
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTUSearch.init();
});
