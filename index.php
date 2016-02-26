<?php

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $__POST['subject']
        $message = $_POST['comments'];
        $from = 'From: SerimaxPage';
        $to = 'mario.herrera5@hotmail.com';
         $human = $_POST['human'];

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit'] && $human == '4') {
    /* Anything that goes in here is only performed if the form is submitted */

         if (mail ($to, $subject, $body, $from)) {
                echo '<p>Your message has been sent!</p>';
            } else {
                echo '<p>Something went wrong, go back and try again!</p>';
            }
}

else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
}

?>


