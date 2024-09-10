"use strict";

let AppWebArticleFilter = (function () {
    let searchForm;
    let searchBtn;
    let issueBtn;
    let issueForm;
    let filterForm;
    let filterSubmitBtn;
    let filterResetBtn;

    let handleSearch = () => {
        if (searchBtn) {
            searchBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(searchForm);
                const search = formData.get("search");
                window.location.href = "/web/articles/list?search=" + search;
            });
        }
    };

    let handleIssueFilter = () => {
        if (issueBtn) {
            issueBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(issueForm);
                const issue = formData.get("issue");
                window.location.href =
                    "/web/articles/list?issue_title=" + issue;
            });
        }
    };

    let handleFilter = () => {
        if (filterResetBtn) {
            filterResetBtn.addEventListener("click", (e) => {
                e.preventDefault();
                filterForm.reset();
                window.location.href = window.location.pathname; // Redirection vers l'URL de base
            });
        }

        if (filterSubmitBtn) {
            filterSubmitBtn.addEventListener("click", (e) => {
                e.preventDefault();
                const formData = new FormData(filterForm);
                // let params = new URLSearchParams();

                // formData.forEach((value, key) => {
                //     params.append(key, value);
                // });

                // let queryString = params.toString();
                // let url = "/web/articles/list?" + queryString;
                // window.location.href = url;

                let params = new URLSearchParams(window.location.search);

                // Reset des paramètres existants
                params.delete("discipline[]");
                params.delete("period[]");

                formData.forEach((value, key) => {
                    if (value) {
                        // Exclure les cases "Tout"
                        params.append(key, value);
                    }
                });

                window.location.href =
                    window.location.pathname + "?" + params.toString();
            });
        }
    };
    let handleSort = () => {
        let orderBySelect = document.querySelector("#sortBy");

        if (orderBySelect) {
            orderBySelect.addEventListener("change", () => {
                let url = new URL(window.location.href);
                url.searchParams.set(orderBySelect.name, orderBySelect.value);

                window.location.href = url.toString();
            });
        }
        let sortOrderSelect = document.querySelector("#sortOrder");

        if (sortOrderSelect) {
            sortOrderSelect.addEventListener("change", () => {
                let url = new URL(window.location.href);
                url.searchParams.set(
                    sortOrderSelect.name,
                    sortOrderSelect.value
                );

                window.location.href = url.toString();
            });
        }
        let sortLimitSelect = document.querySelector("#sortLimit");

        if (sortLimitSelect) {
            sortLimitSelect.addEventListener("change", () => {
                let url = new URL(window.location.href);
                url.searchParams.set(
                    sortLimitSelect.name,
                    sortLimitSelect.value
                );

                window.location.href = url.toString();
            });
        }
    };
    return {
        init: () => {
            searchForm = document.querySelector("#searchForm");
            issueForm = document.querySelector("#issueForm");
            filterForm = document.querySelector("#filterForm");

            // Vérification que les formulaires existent
            if (!searchForm && !issueForm && !filterForm) {
                return;
            }

            searchBtn = searchForm?.querySelector("#searchBtn");
            issueBtn = issueForm?.querySelector("#issueBtn");
            filterResetBtn = filterForm?.querySelector("#filterResetBtn");
            filterSubmitBtn = filterForm?.querySelector("#filterSubmitBtn");

            handleSearch();
            handleIssueFilter();
            handleFilter();
            handleSort();
        },
    };
})();

document.addEventListener("DOMContentLoaded", (e) => {
    AppWebArticleFilter.init();
});
