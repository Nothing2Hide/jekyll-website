---
title: Contact
lang: fr
layout: page
permalink: /fr/contact/
---
<?php
require_once '../../vendor/eoghanobrien/php-simple-mail/class.simple_mail.php';

$name = "";
$email = "";
$msg ="";
if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $checkbot = $_POST['url'];

    //error check name
    if($name =='Votre nom'){
        $error[] = '{{site.error-name-fr}}';
    }

    //error check email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = '{{site.error-email-fr}}';
    }

    //error check email address
    if($msg ==''){
         $error[] = '{{site.error-msg-fr}}';
    }

    //if no errors carry on
    if(!isset($error)){
      /* @var SimpleMail $mail */
      $mail = SimpleMail::make()
          ->setTo('{{site.email}}', '{{site.title}}')
          ->setSubject("Via Nothing2Hide.org : " . strtolower($_POST['subject']))
          ->setFrom($email, $name)
          ->setReplyTo($email, $name)
          //->setCc(['Recipient 2' => 'test2@example.com', 'Recipient 3' => 'test3@example.com'])
          //->setBcc(['Recipient 4' => 'test4@example.com'])
          ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
          //->setHtml()
          ->setMessage($msg)
          ->setWrap(78);
      $send = $mail->send();
      //echo $mail->debug();
    }
}
?>
<form action='#form' method='post' id="form">

<?php if(isset($_POST['submit']) && !isset($error)) : ################### Après envoi message  ###################### ?>
  <p><strong>Votre mail a bien été envoyé ! Nous y répondrons le plus vite possible.</strong></p>
  
<?php else: ################### Avant envoi message  ###################### ?>
  <p>
      Si vous souhaitez nous contacter remplissez le formulaire ci-dessous.
  </p>
  <?php
    // Errors display
    if(isset($error)){
    echo  '<ul>';
      foreach($error as $error){
          echo "<li style='color:#ff0000'>$error</li>";
      }
    echo '</ul>';
  }
  ?>
  <p><select id="subject" name="subject">
    <option value="Contact" selected>Demande de contact</option>  
    <option value="Formation">Demande de renseignements sur nos formations</option>
    <option value="VPN">Demande de renseignements sur notre VPN</option>    
    <option value="Autre">Autre</option>
  </select></p>
  <p><label>Nom ou pseudo (obligatoire)</label><br><input type='text' name='name' value='<?php echo $name; ?>'></p> 
  <p><label>Email (obligatoire)</label><br><input type='email' name='email' value='<?php echo $email; ?>'></p> 
  <p><label>Votre message (obligatoire)</label><br><textarea name='message' rows="8" cols="40"><?php echo $msg; ?></textarea></p> 
  <p id="url"><input type="text" name="url" value='' autocomplete="off" /></p>
  <p><input type='submit' name='submit' value='{{site.t[page.lang].send}}'></p> 
<?php endif; ?>

<p>Vous pouvez aussi nous contacter de manière sécurisée en nous envoyant <a href="https://nothing2hide.org/wiki/doku.php?id=protectionnumerique:emails">un mail chiffré</a> : à l'adresse <a href="/fr/pgp-equipe/#gregoire-pouget">gregoire [at] nothing2hide.org</a> ou <a href="/fr/pgp-equipe/#jean-marc-bourguignon">jm [at] nothing2hide.org</a></p>

</form>