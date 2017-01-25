<footer>
    <div class="container">
        <img id="footer-avatar" src="img/about/avatar-img.svg" alt="cally's avatar">
        <nav>
            <?php require('navlinks.php'); ?>
        </nav>
        <div id="social-links">
            <a href=""><img src="img/footer/logo-linkedin.svg" alt="linkedin logo"></a>
            <a href=""><img src="img/footer/logo-dribbble.svg" alt="dribbble logo"></a>
            <a href=""><img src="img/footer/logo-email.svg" alt="email logo"></a>
            <a href=""><img src="img/footer/logo-insta.svg" alt="instagram logo"></a>
        </div>
        <div id="copyright">
            &copy; Cally Dai 2017
        </div>
    </div>
</footer>
<script>
    var docURL = document.URL;
    var linksList = document.querySelectorAll('.top-nav a[href]');
    for (var i = 0; i< linksList.length; i++) {
        var link = linksList[i];
        if (link.href === docURL) {
            link.className += 'current-link';
        }
    }
</script>