<?php require_once("../environment/secrets.php"); ?>
<base href="<?php echo $_ENV["base_url"]; ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/normalize.css" type="text/css" />
<link rel="stylesheet" href="style/style.css" type="text/css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora%7COpen+Sans:300i,400,400i,700">
<link rel="shortcut-icon" type="image/svg" href="img/general/favicon.svg"/>

<?php require_once('favicon.php'); ?>

<!--[if lt IE 9]>
  <script>
    document.createElement("header" );
    document.createElement("footer" );
    document.createElement("section"); 
    document.createElement("aside"  );
    document.createElement("nav"    );
    document.createElement("article"); 
    document.createElement("hgroup" ); 
    document.createElement("time"   );
  </script>
  <noscript>
     <strong>Warning !</strong>
     Because your browser does not support HTML5, some elements are created using JavaScript.
     Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
  </noscript>
<![endif]-->
<script type="text/javascript" src="js/modernizr.js"></script>
