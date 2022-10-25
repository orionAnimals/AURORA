let header_opacity = document.querySelector("header")

// after click btn show .search__pc-block

let open_search_btn = document.querySelector('#Search__open-pc');
let block_open_search = document.querySelector(".search__pc-block")

open_search_btn.addEventListener("click", activate_BOS);

function activate_BOS() {
	block_open_search.classList.toggle("active");
	header_opacity.classList.toggle("width_for_search");
}

// after change .search__pc-block to active hide header-wrapper

document.querySelector('#Search__open-pc').onclick = function(){
	document.querySelector('.header__wrapper_content').style.display = 'none';
};

// close btn search
let close_btn = document.querySelector('#btn_close');

close_btn.addEventListener("click", close__search_fun);
// close search by main
let close__search_fun_by_main = document.querySelector('main');

close__search_fun_by_main.addEventListener("click", close__search_fun);

// close search by main
function close__search_fun() {
	block_open_search.classList.remove("active");
	header_opacity.classList.remove("width_for_search");
	document.querySelector('.header__wrapper_content').style.display = 'flex';
}



