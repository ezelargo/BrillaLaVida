<?php
	header("Content-type: application/json");
	require_once("phpmailer/class.phpmailer.php");
	require_once("helper.class.php");

	/*
		Uso de recaptcha en php y js
		http://www.codexworld.com/new-google-recaptcha-with-php/
	*/

	$userName = trim(stripslashes($_POST["name"]));
	$userBusiness = trim(stripslashes($_POST["business"]));
    $userEmail = trim(stripslashes($_POST["email"]));
	$userPhone = trim(stripslashes($_POST["phone"]));   
    $userSubject = trim(stripslashes($_POST["subject"]));
    $userMessage = trim(stripslashes($_POST["message"]));
	$gRecaptchaResponse = trim(stripslashes($_POST["recaptcha"]));

	$inputs = array(
									"nombre" => $userName, "business" =>$userBusiness,  "email" => $userEmail,
									"phone" => $userPhone, "asunto" => $userSubject, "mensaje" => $userMessage, 
                                    "captcha" => $gRecaptchaResponse
								);

	foreach ($inputs as $name=>$value){
		if(!isset($value) || empty($value)){
			  echo(json_encode(array("type" => "fail", "message" => "El campo $name es obligatorio.")));
				die;
		}
	}

	if(Helper::GoogleRecaptchaValid($gRecaptchaResponse) == FALSE){
		echo(json_encode(array("type" => "fail", "message" => "El captcha es incorrecto, intente nuevamente.")));
		die;
	}

    
	$phpMailer = new PHPMailer(true);
	$phpMailer->IsSMTP();
	$phpMailer->Host = Helper::$SMTP_HOST;
	$phpMailer->SMTPDebug = 0;
	$phpMailer->SMTPAuth = !Helper::$SMTP_ISLOCAL;
	$phpMailer->Port = Helper::$PORT;
	$phpMailer->Priority = 1;
	$phpMailer->Username = Helper::$SMTP_USERNAME;
	$phpMailer->CharSet = "UTF-8";
	$phpMailer->Password = Helper::$SMTP_PASSWORD;
	$phpMailer->AddReplyTo($userEmail, $userName);
	$phpMailer->SetFrom(Helper::$SMTP_FROM, $userName.' ('.$userEmail.')');
	$phpMailer->AddAddress(Helper::$MAIL_TO, "Brilla la vida");
	$phpMailer->AddBCC(Helper::$MAIL_BCC, "Brilla la vida");    
	$phpMailer->Subject = $userSubject;
	$phpMailer->MsgHTML("<b>Nombre: </b>$userName (<i>$userEmail</i>)<br/>											 
                         <b>Asunto: </b>$userSubject<br/>
                         <b>Mensaje:</b><br/><i>$userMessage</i><br/><br/>
                         <b>Al responder este email se respondera a $userEmail</b><br/><br/>
                         Este mensaje fue enviado desde el formulario de contacto del sitio web <a href=\"http://www.brillalavida.org\" target=\"_blank\">www.brillalavida.org</a>");

	$sent = false;
	$sent = $phpMailer->Send();
	$try = 1;
	while (!$sent && $try < 5) {
			sleep(3);
			$sent = $phpMailer->Send();
			$try = $try + 1;
	}
    
    
	if ($sent) 
    {
		 echo(json_encode(array("type" => "success")));
	}
	else
    {
		echo(json_encode(array("type" => "fail", "message" => "Ocurrio un error al intentar enviar el mensaje, intente nuevamente.")));
	}

die;
