---
title: Language Redirect
layout:
---
<?php
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  switch($lang) {
    case "fr":
        header("Location: /fr/");
        break;
    case "en":        
        header("Location: /en/");
        break;    
    default:
        header("Location: /fr/");
        break;
}
?>
