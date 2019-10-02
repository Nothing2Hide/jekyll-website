---
id: 339
title: Vérificateur de mot de passe
date: 2017-10-10T17:48:47+02:00
author: Nothing2Hide
layout: page
lang: fr
guid: https://nothing2hide.org/?page_id=339
---
Vous pouvez tester la robustesse de votre mot de passe grâce au formulaire ci-dessous. Il vous indique le temps nécessaire pour le craquer.  


<div class="zxcvbn">
  <p>
    <input id="password-box" name="password-box" type="password" />
  </p>
</div>

<div id="explanation">
</div>

Si le résultat du test de votre mot de passe est catastrophique, consultez notre wiki pour apprendre à [créer des mots de passe solides](https://nothing2hide.org/wiki/doku.php?id=protectionnumerique:lesbases#les_mots_de_passe).  


<small>Le code de ce vérificateur de mot de passe est basé sur celui de <a href="https://github.com/dropbox/zxcvbn">zxcvbn</a>.</small>