<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    protected $email;
    protected $nombre;
    protected $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email; 
        $this->nombre = $nombre; 
        $this->token = $token; 
    }

    public function enviarConfirmacion() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.brevo.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'agu40990159@gmail.com';
        $mail->Password = 'nDsQ8LXwN1Ac9Zdp';

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Confirma tu Cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola". $this->nombre . "</strong> Has creado tu cuenta en UpTask, solo debes confirmarla en el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href= 'http://localhost:3000/confirmar?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tu no creaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        // Enviar el email
        $mail->send();
    }

    public function enviarIntrucciones() {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '0c98887fe181fa';
        $mail->Password = 'dc27e3bccf1ef2';

        $mail->setFrom('cuentas@uptask.com');
        $mail->addAddress('cuentas@uptask.com', 'uptask.com');
        $mail->Subject = 'Reestablece tu Password';

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola". $this->nombre . "</strong> Parece que has olvidado tu password, sigue el siguiente enlace para recuperarlo</p>";
        $contenido .= "<p>Presiona aquí: <a href= 'http://localhost:3000/reestablecer?token=" . $this->token . "'>Reestablecer tu Password</a></p>";
        $contenido .= "<p>Si tu no creaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= '</html>';

        $mail->Body = $contenido;

        // Enviar el email
        $mail->send();
    }
}
