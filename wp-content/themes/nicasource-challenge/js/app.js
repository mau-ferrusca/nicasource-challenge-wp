const formSearch = document.querySelector('#wp-block-search__input-1');
if (formSearch) {
    formSearch.className += ' form-control';
    const searchBtn = document.querySelector('.wp-block-search__button');
    searchBtn.className += ' btn btn-primary';
}