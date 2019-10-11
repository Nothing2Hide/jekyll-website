---
title: Contact us
layout: page
lang: en
permalink: /en/contact/
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
        $error[] = '{{site.error-name-en}}';
    }

    //error check email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = '{{site.error-email-en}}';
    }

    //error check email address
    if($msg ==''){
         $error[] = '{{site.error-msg-en}}';
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
          ->setHtml()
          ->setMessage($msg)
          ->setWrap(78);
      $send = $mail->send();
      //echo $mail->debug();
    }
}
?>
<form action='#form' method='post' id="form">

<?php if(isset($_POST['submit']) && !isset($error)) : ################### Après envoi message  ###################### ?>
  <p><strong>Your email has been sent ! We will answer it as soon as possible.</strong></p>
  
<?php else: ################### Avant envoi message  ###################### ?>
  <p>
      Please fill the form below.
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
    <option value="Demande de contact" selected>Contact</option>  
    <option value="Renseignements formation">Training</option>
    <option value="VPN">VPN access</option>    
    <option value="Autre">Other</option>
  </select></p>
  <p><label>Name or pseudo (mandatory)</label><br><input type='text' name='name' value='<?php echo $name; ?>'></p> 
  <p><label>Email (mandatory)</label><br><input type='email' name='email' value='<?php echo $email; ?>'></p> 
  <p><label>Your message (mandatory)</label><br><textarea name='message' rows="8" cols="40"><?php echo $msg; ?></textarea></p> 
  <p id="url"><input type="text" name="url" value='' autocomplete="off" /></p>
  <p><input type='submit' name='submit' value='{{site.t[page.lang].send}}'></p> 
<?php endif; ?>


<h2>Contact us securely</h2>

<ul>
	<li>gregoire [at] nothing2hide.org : <a href="http://pgp.mit.edu/pks/lookup?op=get&search=0xD1A62CFD58519BC4">6A22 9E8D 916A 1C3C 80A6 E180 D1A6 2CFD 5851 9BC4</a></li>
	<li>jm [at] nothing2hide.org : <a href="http://pgp.mit.edu/pks/lookup?op=get&search=0x42E6D09B6DBC227E">74FC 93FD BCD6 1BEB 5AD9 7154 42E6 D09B 6DBC 227E</a></li>
</ul>