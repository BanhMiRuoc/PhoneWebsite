import { Input, Ripple, initMDB } from "mdb-ui-kit";

$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});

    initMDB({ Input, Ripple });

    const filterDropdown = document.querySelector('.filter-dropdown');
    const products = document.querySelectorAll('.product');

    // Initially hide all product elements (except the first of each category)
    products.forEach(product => product.classList.add('hidden'));
    products.forEach((product, index) => {
    if (index === 0 || product.classList.contains(filterDropdown.value)) {
        product.classList.remove('hidden');
    }
    });

    filterDropdown.addEventListener('change', () => {
    products.forEach(product => {
        product.classList.add('hidden');
        if (filterDropdown.value === 'all' || product.classList.contains(filterDropdown.value)) {
        product.classList.remove('hidden');
        }
    });
    });

    
});