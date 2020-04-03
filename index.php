<?
/****************************
 * Sea framework.
 ****************************
 * Bu web sayt yaratish uchun Php dasturlash tili yordamida yaratilgan
 * qulay va mukammal web framework.
 * Ushbu loiha sizga va sizning web sayt dasturingiz mukammal darajada
 * yaratilishiga yordam beradi degan umuddamiz va bundan hursandmiz
 *
 * Hurmat bilan - Sea development Group.
 */
define('SEA_STARTED_TIME', microtime(true));

/****************************
 * Autoloadni ulash
 ****************************
 * Web dasturimizni ishga tushirishda bizga birinchi bo'lib Autoload kerak bo'ladi.
 * Ushbu autoload composer package manageri tomonidan automatik tarzda yaratilgan.
 * Bu bilan biz bizga kerakli barcha class larni dasturimizda o'z navbatida chaqiramiz.
 */

require_once("vendor\autoload.php");

/****************************
 * Bootstrap
 ****************************
 * Endilikda biz o'z dasturimizning asosiy yuklanish qismini ishga tushurishimiz kerak.
 * Bu Bootstrap(Yuklanish darchasi) dir. U web datur ishga tushishida ilk amalni bajaradi.
 */
