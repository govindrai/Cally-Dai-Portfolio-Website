<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cally Dai | Product Designer</title>
        <?php require_once('php/head.php'); ?>
    </head>
    <body>
        <?php require_once('php/navigation.php'); ?>
        <main id="index-hero">
            <div class="container">
                <div class="col-12">
                    <h1 class="hero-title">Cally Dai</h1>
                    <h2 class="hero-subtitle">User Experience Designer</h2>
                </div>
            </div>
        </main>
        <section id="intro">
            <div class="container ribbon-margin">
                <div class="col-12 relative">
                    <img id="ribbon" src="img/general/ribbon.png"/>
                    <h2 id="ribbon-text">Portfolio</h2>
                </div>
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="project-description center-align">Hello, and welcome to my portfolio! For inquiries or feedback, please <a class="pink-link" href="contact.php">contact me</a>.</p>
                    <div class="quick-links">
                        <a class="pink-link" data-scroll href="#glifft">Case Studies</a>&nbsp;&#8226;&nbsp;<a class="pink-link" data-scroll href="#other-works">Other Works</a>
                    </div>
                <div class="col-1"></div>
            </div>
        </section>
        <section id="glifft" class="projects">
            <div class="container">
                <div class="col-5">
                    <img class="main-project-image" width="452" height="405" src="img/index/glifft-img.png" alt="glifft product design">
                </div>
                <div class="col-7">
                    <h2 style="text-align: left" class="project-title">Glifft</h2>
                    <p class="project-description">I designed the MVP for a new mobile application from the ground up, focusing on creating a seamless user experience and establishing accurate brand aesthetic.</p>
                    <a href="projects/glifft.php" class="button">View Case Study</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section id="canopy" class="projects">
            <div class="container row-reverse">
                <div class="col-5">
                    <img class="main-project-image" width="495" height="405" src="img/index/canopy-img.png" alt="canopy product design">
                </div>
                <div class="col-7">
                    <h2 style="text-align: left" class="project-title">Canopy</h2>
                    <p class="project-description">Using user research and user testing, I established content hierarchy and a style guide for Canopy’s responsive web learning platform.</p>
                    <a href="projects/canopy.php" class="button">View Case Study</a>
                </div>
            </div>
        </section>
        <section id="soma-water" class="projects">
            <div class="container">
                <div class="col-5">
                    <img class="main-project-image" width="445" height="365" src="img/index/plyarchitecture-img.png" alt="progressly architecture product design">
                </div>
                <div class="col-7">
                    <h2 style="text-align: left" class="project-title">Progressly</h2>
                    <p class="project-description">Prompted to introduce new feature sets to Progressly's enterprise software, I led a team to redesign the core product architecture.</p>
                    <div class="coming-soon">Coming Soon</div>
                </div>
            </div>
        </section>
        <section id="other-works">
            <div class="container">
                <div class="col-12">
                    <h2 class="project-title">Other Works</h2>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/somawater.png"></div>
                    <div class="other-works-title" >Soma Water Landing Page Redesign</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/bangbang.png"></div>
                    <div class="other-works-title" >!!BANGBANG Homepage Redesign</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/dashboard.png"></div>
                    <div class="other-works-title" >Dashboard Analytics</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/guestaccess.png"></div>
                    <div class="other-works-title" >Guest Access Flow</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/marketing.png"></div>
                    <div class="other-works-title" >Progressly Marketing Pages</div>
                </div>
                <div id="modal-4" class="col-4">
                    <div><img class="other-works-image" src="img/index/engineering.png"></div>
                    <div class="other-works-title" >Engineering Landing Page</div>
                </div>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="gray-divider"></div>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section id='other-works-modals' class="col-12">
            <div id="somawater-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/macbook.png"></img>
                        <img class="gif" src="img/index/somawater.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/somalogo.svg"/>
                    <h3 class="modal-heading">Landing Page Redesign</h3>
                    <p>Soma Water designs water filters and beautifully aesthetic vessels. Each purchase supports water-related charities with option of bi-monthly filter replacement subscriptions. They were experiencing a high drop off rate for their promotion and a low conversion rate of email subscribers. My team and I aim to increase comprehension and increase subscription visibility.</p>
                </div>
            </div>
            <div id="bangbang-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image-iphone" height="420px" src="img/index/iphone.png"></img>
                        <img class="iphonegif" width="188.5px" src="img/index/bangbangmobile.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/bangbanglogo.svg"/>
                    <h3 class="modal-heading">Homepage Redesign</h3>
                    <p>!!Bangbang is a social platform that urges people to take action. They needed a new dynamic homepage that gave a live stream of activites for people you follow. I also built out a new initiative flow for the influencers of the platform.</p>
                </div>
            </div>
            <div id="dashboard-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/dashboardproject.png"></img>
                    </div>
                    <img class="modal-logo" src="img/index/progresslylogo.svg"/>
                    <h3 class="modal-heading">Dashboard Analytics</h3>
                    <p>Progressly is a software company that provides solutions for process documentation and execution. As a Hack Day competition piece, I worked as the lead designer in a group with a customer strategy expert and full-stack engineer to introduce execution-level insights for users to gauge the health of their business processes. The feature launched the week after to customers and remains as something they use every single day.</p>
                </div>
            </div>
            <div id="guestaccess-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/macbook.png"></img>
                        <img class="gif" src="img/index/guestaccess.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/progresslylogo.svg"/>
                    <h3 class="modal-heading">Guest Access Flow</h3>
                    <p>Progressly is a software company that provides solutions for process documentation and execution. I designed and prototyped the flow for inviting outside guests to a process execution. The prototype was tested on potential customer leads. Upon their approval, the feature was launched, converting those leads to full-fledged platform users.</p>
                </div>
            </div>
            <div id="marketing-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/macbook.png"></img>
                        <img class="gif" src="img/index/marketing.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/progresslylogo.svg"/>
                    <h3 class="modal-heading">Marketing Pages Redesign</h3>
                    <p>Progressly is a software company that provides solutions for process documentation and execution. I worked with the Head of Marketing and the Busienss Operations Lead to redesign Progressly’s homepage and product page to garner new customer leads and increase understanding of the product.</p>
                </div>
            </div>
            <div id="plyengineering-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/macbook.png"></img>
                        <img class="gif" src="img/index/engineering.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/progresslylogo.svg"/>
                    <h3 class="modal-heading">Engineering Page</h3>
                    <p>Progressly is a software company that provides solutions for process documentation and execution. To increase interest in open engineering posititons, I pioneered a landing page dedicated to demonstrate Progressly’s company and engineering culture. This directly increased the number of applications received for developer roles.</p>
                </div>
            </div>
        </section>
        <section id="feedback">
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
        
        <script type="text/javascript">
            document.getElementById("other-works").addEventListener('click', function(e) {
                if (e.target.tagName == 'DIV' || e.target.tagName == 'IMG') {
                    /* global modalIndex */
                    modalIndex = Array.from(document.getElementsByClassName(e.target.className)).indexOf(e.target);
                    
                    var modalContent = document.querySelectorAll('.modal')[modalIndex]
                    var modalSection = document.getElementById("other-works-modals")
                    
                    modalContent.style.display = "flex";
                    modalSection.style.display = "flex";
                    
                    modalSection.classList.add('opacity1');
                    modalContent.classList.add('move-up');
                }
            });
            
            document.getElementById("other-works-modals").addEventListener("click", function(e) {
                if (e.target.id == "x-button" || e.target.id == "other-works-modals" || e.target.className ==  "modal col-10 move-up") {
                    var modalSection = document.getElementById("other-works-modals");
                    var modalContent;
                 
                    if (e.target.id == "x-button") {
                        modalContent = e.target.parentElement.parentElement;
                    } else {
                        modalContent = document.querySelectorAll('.modal')[modalIndex];
                    }
                    
                    modalContent.classList.add("move-down");
                    modalSection.classList.add('opacity0');
                    
                    setTimeout(function() {
                        modalSection.style.display = "none";
                        modalContent.style.display = "none";
                        modalSection.classList.remove("opacity0", "opacity1");
                        modalContent.classList.remove("move-down", "move-up");
                    }, 400);
                }
            });
            
            document.getElementById("other-works").addEventListener("mouseover", function(e) {
                if (e.target.className == "other-works-image") {
                    e.target.parentElement.nextElementSibling.style.textDecoration = "underline";
                } else if (e.target.className == "other-works-title") {
                    e.target.previousElementSibling.lastElementChild.style.transform = "scale(1.1)";
                }
            });
            
            document.getElementById("other-works").addEventListener("mouseout", function(e) {
                if (e.target.className == "other-works-image") {
                    e.target.parentElement.nextElementSibling.style.textDecoration = null;
                } else if (e.target.className == "other-works-title") {
                    e.target.previousElementSibling.lastElementChild.style.transform = null;
                }
            });
            
            smoothScroll.init();
        </script>
    </body>
</html>
