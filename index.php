---
title: Language Redirect
layout:
---
<?php
  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  switch($lang) {
    case "fr":
        header("Location: {{site.baseurl}}/fr/");
        break;
    case "en":        
        header("Location: {{site.baseurl}}/en/");
        break;    
    default:
        header("Location: {{site.baseurl}}/fr/");
        break;
}
?>
