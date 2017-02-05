document.querySelector('.hamburger').onclick = function() {
    var mobileMenu = document.querySelector('#mobile-menu');
    if (this.dataset.open == "false") {
        mobileMenu.style.display = 'block';
        this.innerHTML = '&#10005;';
        this.dataset.open = 'true';
    }
    else {
        mobileMenu.style.display = 'none';
        this.innerHTML = '&#9776;';
        this.dataset.open = 'false';
    }
};

var listoflinks = document.querySelectorAll('#mobile-menu .col-10 a');

for (var i = 0; i < listoflinks.length - 1; i++) {
    listoflinks[i].insertAdjacentHTML('afterend', '<br>');
}
