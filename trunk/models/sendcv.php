<?php
	header("Content-type: application/json");
	require_once("phpmailer/class.phpmailer.php");
	require_once("helper.class.php");
	
	$userName = trim(stripslashes($_POST["name"]));
    $userEmail = trim(stripslashes($_POST["email"]));    

	$gRecaptchaResponse = trim(stripslashes($_POST["recaptcha"]));

	$inputs = array(
                        "nombre" => $userName, "email" => $userEmail,
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

    /* http://php.net/manual/es/features.file-upload.post-method.php */

    if(!isset($_FILES['file_cv'])){
        echo(json_encode(array("type" => "fail", "message" => "Por favor no olvide cargar su CV.")));
        die;
    }
                
    $fileCv = $_FILES["file_cv"];    
    $fileName = time().'_'.basename($fileCv["name"]);
    $fileExt = strtolower(end(explode('.', $fileName)));
    $fileSize = $fileCv["size"];
    $targetDir = "../uploads/cv/";
    $targetFilePath = $targetDir.$fileName;

    if($fileSize > 3000000){
        echo(json_encode(array("type" => "fail", "message" => "El archivo es demasiado grande, por favor envie uno más chico.")));
	    die;                
    }
                 
    $allowTypes = array('doc','docx','pdf');    
    if(!in_array($fileExt, $allowTypes)){            
        echo(json_encode(array("type" => "fail", "message" => "Solamente puede enviar archivos en Word o PDF.")));
	    die;                
    }
        
    if(!move_uploaded_file($fileCv["tmp_name"], $targetFilePath)){            
        echo(json_encode(array("type" => "fail", "message" => "Ocurrio un error al intentar subir el archivo, intente nuevamente.")));
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
	$phpMailer->AddAddress(Helper::$MAIL_RRHH_TO, "Brilla la vida");
	$phpMailer->AddBCC(Helper::$MAIL_BCC, "Brilla la vida");    
	$phpMailer->Subject = "Curriculum Vitae";
	$phpMailer->MsgHTML("<b>$userName</b> (<i>$userEmail</i>) dejó su Curriculum Vitae.<br/>											                                                   
                         <br/>    
                         <b>Al responder este email se respondera a $userEmail</b><br/><br/>
                         Este mensaje fue enviado desde el formulario de envio de CV del sitio web <a href=\"http://www.brillalavida.org\" target=\"_blank\">www.brillalavida.org</a>");
    $phpMailer->AddAttachment($targetFilePath, "Cv de $userName", 'base64', $fileCv['type']);

	$sent = false;
	$sent = $phpMailer->Send();
	$try = 1;
	while (!$sent && $try < 5) {
        sleep(3);
        $sent = $phpMailer->Send();
        $try = $try + 1;
	}
        
	if ($sent) {
        echo(json_encode(array("type" => "success")));
	}
	else{
		echo(json_encode(array("type" => "fail", "message" => "Ocurrio un error al intentar enviar el mensaje, intente nuevamente.")));
	}

die;