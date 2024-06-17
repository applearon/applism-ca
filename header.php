<?php
// Set variables and such
$tmp = explode('.', $_SERVER['HTTP_HOST']); // lang based on prefix (fr.applism.ca en.applism.ca etc)
$lang = array_shift($tmp);
if(!strpos("en fr", $lang)) {
    $lang = "en";
};

function isActive($page) {
    if ($page == $_SERVER['REQUEST_URI']) {
        print("active");
    };
}
?>
<!DOCTYPE html>
<html lang="<?php print($lang)?>">
    <head>
        <!-- SEO Stuff -->
       <meta property="og:title" content="Applearon's osu! things" />
        <meta property="og:description" content="One of the websites of all time" />
        <meta property="og:url" content="https://osu.applism.ca" />
        <meta property="og:site_name" content="Applearon's osu! things />
        <meta property="og:image" content="/assets/PurpleApple.png" />
        <meta name="theme-color" content="#920089">  	
  
        <meta content="Hello there!">
        <meta content="Bonjour hi!">
    
      <link rel="stylesheet" href="/index.css" type="text/css">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!--Purple Apple Icon -->
      <link rel="icon" type="image/png" href="/assets/PurpleApple.png" />
      <title>Applearon's Things</title>
    </head>
    <body>
    <div class="topnav">
        <a class="<?php isActive("/");?>" href="/"><?php print($l18n['menu']['home'][$lang])?></a>
        <a class="<?php isActive("/NBT/");?>" href="#"><?php print($l18n['menu']['NBT'][$lang])?></a>
        <div class="langstuff">
            <button class="lang-btn"><?php print($lang_pretty[$lang])?></button>
            <div class="langs">
                <a href="#">English</a>
                <a href="#">Français</a>
            </div>
        </div>
    </div> 
