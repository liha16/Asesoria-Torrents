<?php
session_start();

$_SESSION["formInfo"] = "No se pudó enviar el formulario";
//$toEMail = "lisa.veltman@gmail.com";
$toEMail = "lucianatorrents@icab.cat";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // collect value of input field
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $message = test_input($_POST["message"]);

    if (empty($name)) {
        $_SESSION["formInfo"] = "Necesitas rellenar un nombre";
        header('Location: ../contacto.php');
    die();
    } else if (empty($message)){
        $_SESSION["formInfo"] = "Necesitas ecsribir un mensaje";
        header('Location: ../contacto.php');
    die();
    } else if (empty($email)){
        $_SESSION["formInfo"] = "Necesitas rellenar el email";
        header('Location: ../contacto.php');
    die();
    }

    $message = $name . " ha escrito el siguiente mensaje: " . $message . ". Teléfono: " . $phone . ", Email:" . $email;

    // send email
    $success = mail($toEMail,"Formulario web",$message);
    if (!$success) {
        $_SESSION["formInfo"] = "No se pudo enviar el formulario";
    } else {
        $_SESSION["formInfo"] = "Se ha enviado el formulario, gracias!";
    }

   header('Location: https://asesoriatorrents.com/contacto.php');
   // header('Location: .../contacto.php');
    die();
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>