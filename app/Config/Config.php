<?php
session_start();
define('ROOTPATH', __DIR__);
/*coockies y histórias*/
define("RUTA_INDEX", 'demo/index');
define("RUTA_LOGIN", 'account/login');
define("RUTA_REGISTER", 'account/register');
define("RUTA_LOCALES", 'event/local');
define("RUTA_MUSICOS", 'event/band');
define("RUTA_EVENTOS", 'event/index');


define("DB_HOST", "localhost:3306");
define("DB_NAME", "uqfhhbcn_whymusic");
define("DB_USER", "uqfhhbcn");
define("DB_PASS", "soserexo");

define("COOKIE_RUNTIME", 1209600);
define("COOKIE_DOMAIN", ".whymusic.es");
define("COOKIE_SECRET_KEY", "1gpasdgg4@TMPa42sdfS{+$78616331sfpMJFe-92s");

/*Email config*/
define("EMAIL_USE_SMTP", true);
define("EMAIL_SMTP_HOST", "mail.whymusic.es");
define("EMAIL_SMTP_AUTH", true);
define("EMAIL_SMTP_USERNAME", "no-reply@whymusic.es");
define("EMAIL_SMTP_PASSWORD", "whymusic.2015");
define("EMAIL_SMTP_PORT", 26);
define("EMAIL_SMTP_ENCRYPTION", null);
/**
 * Configuration for: password reset email data
 * Set the absolute URL to password_reset.php, necessary for email password reset links
 */
define("EMAIL_PASSWORDRESET_URL", ROUTER::create_action_url("account/recover"));
define("EMAIL_PASSWORDRESET_FROM", "no-reply@whymusic.es");
define("EMAIL_PASSWORDRESET_FROM_NAME", "WhyMusic - Resetea tu contrasena");
define("EMAIL_PASSWORDRESET_SUBJECT", "Reseteo de contrasena para WhyMusic");
define("EMAIL_PASSWORDRESET_CONTENT", "Haz click en el enalce para resetar tu cuenta:");
/**
 * Configuration for: verification email data
 * Set the absolute URL to register.php, necessary for email verification links
 */
define("EMAIL_VERIFICATION_URL", ROUTER::create_action_url("account/register"));
define("EMAIL_VERIFICATION_FROM", "no-reply@whymusic.es");
define("EMAIL_VERIFICATION_FROM_NAME", "Whymusic - Activación");
define("EMAIL_VERIFICATION_SUBJECT", "Activación de la cuenta en WhyMusic");
define("EMAIL_VERIFICATION_CONTENT", "Haz click en este enlace en activar tu cuenta:");
/**
 * Configuration for: verification email data
 * Set the absolute URL to register.php, necessary for email verification links
 */
define("EMAIL_EVENT_URL", ROUTER::create_action_url("account/register"));
define("EMAIL_EVENT_FROM", "no-reply@whymusic.es");
define("EMAIL_EVENT_FROM_NAME", "Whymusic - Concierto");
define("EMAIL_EVENT_SUBJECT", "Propuesta de concierto de ");
define("EMAIL_EVENT_CONTENT", "Haz click en este enlace para crear el concierto:");
/*Hash Factor*/
define("HASH_COST_FACTOR", "10");

class Config{
    public $appName = "WhyMusic";
    public $debug = false;
    public $layout = "layouts/layout";
    /*public $rules = array(
         "demo/index" => array(
             "?r=demo/index" => "index",
             "?r=demo/index&id=$1" => "index/id/([0-9]+)",
             "?r=demo/index&id=$1&title=$2" => "index/id/([0-9]+)/title/([a-zA-Z]+)",
         ),
         "demo/login" => array(
             "?r=demo/login" => "login",
         ),
     );
    ^
    |
    |
    |
    LA PUTA MIERDA DE ARRAY PARA EL MÉTODO GET NO SIRVE PARA NADA. ATT: TU PUTO CEREBRO*/
}
?>