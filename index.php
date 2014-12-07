<?php
# ==============================================================================
# INDEX DEFAULT
#
# Navigation System - Website Index
# Developed by Diego Nicotari Trevisan - @dntrevisan - www.dntrevisan.com.br - talktome@dntrevisan.com.br
# v.1.0 - 2014
# Licensed with a Creative Commons License - Attribution-Compartilha Igual 4.0 International.
# http://creativecommons.org/licenses/by-sa/4.0/
#
# More details here:
# http://github.com/dntrevisan/php-navigation
# ==============================================================================

//Start Session
session_start();

if (strlen($_SERVER['REQUEST_URI'])>300)  {
  //Avoid long URLs - Protection Injections
  $_SERVER["REDIRECT_STATUS"] = '404';
  header("HTTP/1.1 404 Not Found");
  $navString="//erros";
} else {
  // Return URL [ex: /mod_rewrite/edit/1/]
  $navString=strtolower($_SERVER['REQUEST_URI']); // Transforms the entire url to lowercase
  $navString=explode("?", $navString); // Separate values of the Get type
  $navString=$navString[0]; // Set only navigation values
}

// Configuration files
require_once("config/config_general.php");
require_once("config/config_head.php");
require_once("config/navigation.php");
require_once('config/switch_erros.php');

// Instance Objects Navigation
$Obj_Nav = new Navigation();
$app=$Obj_Nav->navUrl($_setMultiLanguage,$_setLanDefault,$navString);

// Instance Objects Head
$Obj_Head = new PitchHead();
$Obj_Head->metasSeo($_setMultiLanguage,$_setLanDefault,$app,$_setWebName);
?>

<!doctype html>
<html lang="<?php echo $Obj_Nav->idioma ?>">
	<head>
   		<meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="<?php echo '$_setLanDefault'; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
                       
        <meta name="description"            content="<?php echo $Obj_Head->descr; ?>">        
        <meta name="ABSTRACT"               content="">
        <meta name="revisit-after"          content="4">
        <meta name="ROBOTS"                 content="all">
        <meta name="audience"               content="all">      
        <meta name="OWNER"                  content="talktome@dntrevisan.com.br - Diego Trevisan">
        <meta name="AUTHOR"                 content="www.dntrevisan.com.br - Diego Trevisan">
        <meta name="COPYRIGHT"              content="Diego Trevisan">
        <meta name="DISTRIBUTION"           content="global">
        <meta name="RATING"                 content="General">
        <meta name="RESOURCE-TYPE"          content="document">
        
        <title><?php echo $Obj_Head->titlebar; ?></title>
           
        <base href="<?php echo"$_setDomainName"; ?>" /> 
        
        <link rel="canonical" href="<?php echo"$_setDomainName"; ?>"/>

        <!--### Icon ###-->
        <link rel="shortcut icon" href="<?php echo"$_setDomainName"; ?>public/images/estrutura/favicon.ico" type="image/x-icon" />
        
        <!--### Layout CSS ###-->
        <link media="screen" rel="stylesheet" type="text/css" href="<?php echo "$_setDomainName"; ?>public/styles/web-desktop.css">
        <link media="handheld" rel="stylesheet" type="text/css" href="<?php echo "$_setDomainName"; ?>public/styles/web-mobile.css">

        <!--### Analitycs ###-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-52723907-1', 'auto');
          ga('require', 'displayfeatures');
          ga('send', 'pageview');
        </script>
    </head>

    <body>       
      <?php
        include ($app); 
      ?>
    </body>
</html>