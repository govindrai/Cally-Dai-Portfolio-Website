var docURL = document.URL;
var linksList = document.querySelectorAll('#top-nav a[href]');
for (var i = 0; i < linksList.length; i++) {
    var link = linksList[i];
    if (link.href === docURL) {
        link.classList.add('current-link');
    }
}
