<?php
//if "email" variable is filled out, send email
if (isset($_REQUEST['email']))  {

//Email information
$admin_email = "murilokascher@gmail.com";
$email = $_REQUEST['email'];

//send email
mail($admin_email, "$subject", $comment, "From:" . $email);

//Email response
echo "Obrigado por ter interesse em nosso site. Logo mais ele estará no ar!";
}

?>