<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact - Cally Dai | Product Designer</title>
        <?php require_once('php/head.php') ?>
    </head>
    <body>
        <?php require_once('php/navigation.php'); ?>
        <section>
            <div class="container contact ribbon-margin">
                <div class="col-12 relative">
                    <img id="ribbon" src="img/general/ribbon.png"/>
                    <h2 id="ribbon-text">Contact Me</h2>
                </div>
                <div class="col-2"></div>
                <div class="col-8">
                    <p class="project-description">Contact me regarding any feedback or business inquiries — I would love to chat! Use the form below or send an email to <span class="pink-link"><a href="mailto:hello@callydai.com?subject=Cally, I was on your website">hello@callydai.com</a></span>, and I will reply as soon as I can.</p>
                </div>
                <div class="col-2"></div>
                <div class="col-3"></div>
                <div class="col-6">
                    <form id="contact" action="" method="post" onsubmit="return false;">
                        <span>Email Address</span>
                        <input type="email" name="email" placeholder="Email Address" onkeydown="showLabel(this);" required/>
                        <span>Subject Title</span>
                        <input type="text" name="subject" placeholder="Subject Title" onkeydown="showLabel(this);" required>
                        <span>Message</span>
                        <textarea onkeydown="showLabel(this);" placeholder="Write your message here..."></textarea>
                        <button class="button contact-button" type="submit">Get in Touch</a></button>
                    </form>
                    <div id="spacer60"></div>
                </div>
                <div class="col-3"></div>
            </div>
        </section>
        <?php require_once('php/footer.php'); require_once('php/scripts.php'); ?>
        <script type="text/javascript">
            function showLabel(element) {
                element.previousElementSibling.style.opacity = '1';
                element.previousElementSibling.style.transform = 'translateY(0)'
            }
        </script>
    </body>
</html>
