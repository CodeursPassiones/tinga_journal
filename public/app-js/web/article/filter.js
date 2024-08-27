"use strict";

let AppWebArticleFilter = (function () {
    let searchForm;
    let searchBtn;
    let handleSearch = () => {
        console.log(searchBtn);

        searchBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const formData = new FormData(searchForm);
            const search = formData.get("search");
            window.location = "/web/articles/list?search=" + search;
        });
    };
    return {
        init: () => {
            searchForm = document.querySelector("#searchForm");
            if (!searchForm) {
                return;
            }
            searchBtn = searchForm.querySelector("#searchBtn");

            handleSearch();
            // console.log(445);
        },
    };
})();
document.addEventListener("DOMContentLoaded", (e) => {
    AppWebArticleFilter.init();
});
