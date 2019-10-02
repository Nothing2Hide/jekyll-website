---
title: Contact
lang: fr
layout: page
permalink: /fr/contact/
---
<?php
require_once '../../vendor/eoghanobrien/php-simple-mail/class.simple_mail.php';
if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    //check name is set
    if($name ==''){
        $error[] = '{{site.error-name-fr}}';
    }

    //check for a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = '{{site.error-email-fr}}';
    }

    //if no errors carry on
    if(!isset($error)){
  
        # Title of the CSV
        //$Content = "Name, Email\n";

        //set the data of the CSV
        //$Content .= "$name, $email\n";

        # set the file name and create CSV file
        // open teh file add mode
        // insert content
        // close file
        
        // send mail
        $msg = "$name a envoyé un email";
        
        /* @var SimpleMail $mail */
        $mail = SimpleMail::make()
            ->setTo('{{site.email}}', '{{site.title}}')
            ->setSubject("")
            ->setFrom($email, 'sender')
            ->setReplyTo($email, 'Mail Bot')
            //->setCc(['Recipient 2' => 'test2@example.com', 'Recipient 3' => 'test3@example.com'])
            //->setBcc(['Recipient 4' => 'test4@example.com'])
            ->addGenericHeader('X-Mailer', 'PHP/' . phpversion())
            ->setHtml()
            ->setMessage($msg)
            ->setWrap(78);
        $send = $mail->send();
        echo $mail->debug();
    }
}
?> 
<p>
    Si vous souhaitez nous contacter remplissez le formulaire ci-dessous.
</p>

<form action='#form' method='post' id="form">

<?php if(isset($msg)) : ?>
  <p>
      Votre mail a bien été envoyé.
  </p>
<?php endif; ?>
<?php

  //if their are errors display them
  if(isset($error)){
  echo  '<ul>';
    foreach($error as $error){
        echo "<li style='color:#ff0000'>$error</li>";
    }
  echo '</ul>';
}

?>
<p><label>Nom ou pseudo (obligatoire)</label><br><input type='text' name='name' value=''></p> 
<p><label>Email (obligatoire)</label><br><input type='text' name='email' value=''></p> 
<p><label>Votre message (obligatoire)</label><br><textarea name='message' value='' rows="8" cols="40"></textarea></p> 
<p><input type='submit' name='submit' value='{{site.t[page.lang].send}}'></p> 

</form>

<p>Vous pouvez aussi nous contacter de manière sécurisée en nous envoyant <a href="https://nothing2hide.org/wiki/doku.php?id=protectionnumerique:emails">un mail chiffré</a>
 : </p>
<ul>
  <li>[gregoire [at] nothing2hide.org : <a href="http://pgp.mit.edu/pks/lookup?op=get&search=0xD1A62CFD58519BC4">6A22 9E8D 916A 1C3C 80A6 E180 D1A6 2CFD 5851 9BC4</a>
  </li>
  <li>[jm [at] nothing2hide.org : <a href="http://pgp.mit.edu/pks/lookup?op=get&search=0x42E6D09B6DBC227E">74FC 93FD BCD6 1BEB 5AD9 7154 42E6 D09B 6DBC 227E</a>
  </li>
</ul>


