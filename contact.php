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
                    <p class="project-description">Contact me regarding any feedback or business inquiries — I would love to chat! Use the form below or send an email to <a class="pink-link" href="mailto:hello@callydai.com?subject=Cally, I was on your website">hello@callydai.com</a>, and I will reply as soon as I can.</p>
                </div>
                <div class="col-2"></div>
                <div class="col-3"></div>
                <div class="col-6">
                    <form id="contact" action="php/mailer.php" method="post">
                        <span>Email Address</span>
                        <input id="email" type="email" name="email" placeholder="Email Address" onkeydown="showLabel(this);" required/>
                        <span>Subject Title</span>
                        <input id="subject" type="text" name="subject" placeholder="Subject Title" onkeydown="showLabel(this);" required>
                        <span>Message</span>
                        <textarea id="message" onkeydown="showLabel(this);" placeholder="Write your message here..."></textarea>
                        <button class="button contact-button centered-button" type="submit">Get in Touch</a></button>
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
            
            document.getElementById('contact').addEventListener("submit", function(e) {
                    e.preventDefault();
                    var form = this;
                    var message = document.getElementById("message").value;
                    var subject = document.getElementById("subject").value;
                    var email = document.getElementById("email").value;
                    var xhttp = new XMLHttpRequest();
                    
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          form.insertAdjacentHTML('beforeBegin', "<p>Thanks for your message! I will get back to you in 24 hours!</p>");
                          form.reset();
                        } else {
                            form.insertAdjacentHTML('beforeBegin', "<p>Sorry but you need to fill in all the fields!</p>");
                        }
                    };
                    
                    xhttp.open(form.method, form.action, true);
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    debugger
                    var data = "message=" + message + "&subject=" + subject + "&email=" + email
                    xhttp.send(data);
                });
        </script>
    </body>
</html>
