<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>Cally Dai | Product Designer</title>
        <?php require_once('php/head.php') ?>
    </head>
    <body>
        <?php require_once('php/navigation.php'); ?>
        <main id="index-hero">
            <div class="container">
                <div class="col-12">
                    <h1 class="hero-title">Cally Dai</h1>
                    <h2 class="hero-subtitle">Product Designer</h2>
                </div>
            </div>
        </main>
        <section>
            <div class="container ribbon-margin">
                <div class="col-12 relative">
                    <img id="ribbon" src="img/general/ribbon.png"/>
                    <h2 id="ribbon-text">Portfolio</h2>
                </div>
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="project-description">Hello, and welcome to my portfolio! For inquiries or feedback, please <a class="pink-link" href="contact.php">contact me</a>.</p>
                    <div class="quick-links">
                        <a class="pink-link">Case Studies</a>&nbsp;&#8226;&nbsp;<a class="pink-link">Other Works</a>
                    </div>
                <div class="col-1"></div>
            </div>
        </section>
        <section class="projects glifft">
            <div class="container">
                <!--<div class="col-2"></div>-->
                <div class="col-5">
                    <img class="main-project-image" width="452" height="405" src="img/index/glifft-img.png" alt="glifft product design">
                </div>
                <div class="col-7">
                    <h2 class="project-title">Glifft</h2>
                    <p class="project-description">My team and I designed the MVP for this mobile application from the ground up, focusing on creating a holistic roadmap while introducing a seamless user experience.</p>
                    <a href="projects/glifft" class="button">View Project</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section class="projects canopy">
            <div class="container">
                <div class="col-2"></div>
                <div class="col-8">
                    <img class="main-project-image" width="495" height="405" src="img/index/canopy-img.png" alt="canopy product design">
                    <h2 class="project-title">Canopy</h2>
                    <p class="project-description">Using user research and user testing, I established content hierarchy and a style guide for Canopy’s responsive web learning platform.</p>
                    <a href="projects/canopy" class="button">View Project</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section class="projects soma-water">
            <div class="container">
                <div class="col-2"></div>
                    <div class="col-8">
                    <img class="main-project-image" width="477" height="405" src="img/index/soma-img.png" alt="soma water product design">
                    <h2 class="project-title">Soma Water</h2>
                    <p class="project-description">To drive understanding and conversion for their new offer, I worked closely with growth marketers to redesign Soma Water’s promotional webpage.</p>
                    <a href="projects/somawater" class="button">View Project</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section class="projects spotify">
            <div class="container">
                <div class="col-2"></div>
                <div class="col-8">
                    <img class="main-project-image" width="506" height="405" src="img/index/spotify-img.png" alt="spotify product design">
                    <h2 class="project-title">Spotify</h2>
                    <p class="project-description">Using guerilla user testing, I explore how a search feature can greatly benefit Spotify’s mission in helping people find the right songs for any moment.</p>
                    <a href="projects/spotify" class="button">View Project</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section class="projects portfoliov2">
            <div class="container">
                <div class="col-2"></div>
                <div class="col-8">
                    <img class="main-project-image" width="485" height="405" src="img/index/portfolio-img.png" alt="portfolio 2.0 designs">
                    <h2 class="project-title">Portfolio 2.0</h2>
                    <p class="project-description">I used various visual design techniques to create the second iteration of my personal design portolio. I explored illustrations, color, and type faces.</p>
                    <a href="#" class="button">Coming Soon</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="col-12">
                    <h2 class="project-title">Feedback or business inquiries?</h2>
                    <a href="contact.php" class="button contact-button">Contact Me</a>
                    <div id="spacer60"></div>
                </div>
            </div>
        </section>
        <?php 
            require_once('php/footer.php'); 
            require_once('php/scripts.php'); 
        ?>
    </body>
</html>
