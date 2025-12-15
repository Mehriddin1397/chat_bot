<?
date_default_timezone_set('Asia/Tashkent');
define('API_KEY', '8544159704:AAEOyNhM2U68hivrVvjJRCiLqB6u4HuEOeI');
$Manager = "1260351935";
$compane = "Ustalar24.uz";
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    curl_close($ch);
    if (!curl_error($ch)) return json_decode($res);
}

;
function html($text)
{
    return str_replace(['<', '>'], ['&#60;', '&#62;'], $text);
}



$update = json_decode(file_get_contents('php://input'));
// testlog
file_put_contents("log.txt", file_get_contents('php://input'));
