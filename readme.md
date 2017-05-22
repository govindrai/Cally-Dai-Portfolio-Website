# Portfolio Website Template
A free portfolio website template. See a production ready site using the template [here](http://www.callydai.com).

## Installation

### Prerequisites
This project uses SendGrid to send emails through the website. SendGrid requires (and ideally you should be using): 
- PHP version 5.6 or 7.0
- SendGrid API Key
- Composer
If you have restrictions on your servers/cannot upgrade your PHP environment/want to use a different mailing service, you would need to change `php\mailer.php` accordingly. If you're not using, [Composer](getcomposer.org), you should be. 

### Fork and Clone
Fork to your Github and clone the files to your serer

### Configure Dependencies & Environment

Execute: 
```bash
 composer install
 mkdir environment
 touch environment/secrets.php
```
Inside the newly created `secrets.php` file, paste the following code, adding your own keys:

```php
 <?php
    // DO NOT PUSH THIS FILE TO GITHUB
    // COPY & PASTE THIS INFO INTO environment/secrets.php FILE ON THE SERVER
    $_ENV["sendgrid_api_key"] = "YOUR API KEY HERE";
    $_ENV["cally_email"] = "THE EMAIL WHERE YOU'D LIKE TO RECEIVE EMAIL";
    $_ENV["base_url"] = getenv("base_url") ? getenv("base_url") : "/";
    }
?>
```

The file is included inside the `.gitignore` file so it will not be pushed up to github. You can add other environments variables in this file to use throughout the project. Just make sure to require the file on any page you want to have access to these variables.


## Features
* 100% responsive without the bulk of prebuilt frameworks
* 100% vanilla JavaScript
* Mailing service through Sendgrid API
* Uses PHP's Composer library to handle project dependencies
* Free to use under MIT License
* Employs advanced CSS3 and AJAX calls to bring a modern day, seamless website experience

## Technologies Used
* PHP
* JavaScript
* HTML5
* CSS3
* JavaScript
* SmoothScroll.js
* SendGrid

All rights reserved by Cally Dai. You are free to fork and use this as a template for your own portfolio. If you would like to contribute to this project, please fork a copy and submit a pull request. I will review all requests within 48 hours.
