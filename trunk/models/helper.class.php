<?php

class Helper {


  /* Local */
    /*
  public static $SMTP_HOST = "localhost";
  public static $SMTP_PASSWORD = "pajarito";
  public static $SMTP_USERNAME = "ezelargo@localhost.com";
  public static $PORT = 25;
  public static $SMTP_ISLOCAL = TRUE;
  public static $SMTP_FROM = "ezelargo@localhost.com";
  public static $MAIL_TO = "destino@localhost.com";
  public static $MAIL_CC = "destino@localhost.com";
  public static $MAIL_TO_DOWNLOADS = "destino@localhost.com";
  public static $MAIL_BCC = "destino@localhost.com";    
    */

  /* Produccion */    
  public static $SMTP_HOST = "mail.brillalavida.org";
  public static $SMTP_PASSWORD = "6TLvJg8JFNsT8tw*";
  public static $SMTP_USERNAME = "hola@brillalavida.org";
  public static $PORT = 25;
  public static $SMTP_ISLOCAL = FALSE;
  public static $SMTP_FROM = "hola@brillalavida.org";
  public static $MAIL_TO = "brillalavidaorganizacion@gmail.com";
  public static $MAIL_RRHH_TO = "brillalavidarrhh@gmail.com";
  public static $MAIL_BCC = "hola@brillalavida.org";    
  
  
  private static $EnableRecaptcha = true;

  public static function GoogleRecaptchaValid($gRecaptchaResponse) {

    /*
      Uso de recaptcha en php y js
      http://www.codexworld.com/new-google-recaptcha-with-php/
    */

    if(Helper::$EnableRecaptcha)
	{
      $gRecaptchaSecret = "6LcwYj4UAAAAABGaoP-v-6rF72JpBlwEofG9b_3x";
    	$verifyResponse = @file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$gRecaptchaSecret&response=$gRecaptchaResponse");
        $responseData = json_decode($verifyResponse);
        return $responseData->success;
    }
	else
	{
      return TRUE;
    }
  }
}

?>
