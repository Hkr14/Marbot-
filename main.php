<?php


include("config/config.php");
include("config/variables.php");
include("functions/bot.php");
include("functions/functions.php");
include("functions/db.php");


date_default_timezone_set($config['timeZone']);


////Modules
include("modules/admin.php");
include("modules/skcheck.php");
include("modules/binlookup.php");
include("modules/iban.php");
include("modules/stats.php");
include("modules/me.php");
include("modules/apikey.php");


include("modules/checker/ss.php");
include("/modules/checker/schk.php");
include("/modules/checker/sm.php");



//////////////===[START]===//////////////

if(strpos($message, "/start") === 0){
if(!isBanned($userId) && !isMuted($userId)){

  if($userId == $config['adminID']){
    $messagesec = "<b>Type /admin to know admin commands</b>";
  }

    addUser($userId);
    bot('sendmessage',[
        'chat_id'=>$chat_id,Hey Welcome @$username,

Si Quieres Conocer Mis Comandos Usa /cmds ♻️
	  
Owner/Developer 't.me/MTXVM1'</b>
	   

$messagesec",
	'parse_mode'=>'html',
	'reply_to_message_id'=> $message_id,
    'reply_markup'=>json_encode(['inline_keyboard' => 
        [
          ['text' => "🛠 SOPORTE 🛠", 'url' => "t.me/raistarsoporte"]
        ],
      ], 'resize_keyboard' => true])
        
    ]);
  }
}

//////////////===[CMDS]===//////////////

if(strpos($message, "/cmds") === 0 || strpos($message, "!cmds") === 0){

  if(!isBanned($userId) && !isMuted($userId)){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>👀Veo Que Quieres Conocer Mis Comandos</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"💳 CC Checker Gates",'callback_data'=>"checkergates"]],[['text'=>"🛠 Other Commands",'callback_data'=>"othercmds"]],
    ],'resize_keyboard'=>true])
    ]);
  }
  
  }
  
  if($data == "back"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>👀Veo Que Quieres Conocer Mis Comandos</b>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"💳 CC Checker Gates",'callback_data'=>"checkergates"]],[['text'=>"🛠 Other Commands",'callback_data'=>"othercmds"]],
    ],'resize_keyboard'=>true])
    ]);
  }
  
  if($data == "checkergates"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>━━CC Checker Gates━━</b>
  
<b>/ss | !ss - Stripe [Auth]</b>
<b>/sm | !sm - Stripe [Merchant]</b>
<b>/schk | !schk - User Stripe Merchant [Needs SK]</b>

<b>/apikey sk_live_xxx - Add SK Key for /schk gate</b>
<b>/myapikey | !myapikey - View the added SK Key for /schk gate</b>

<b>ϟ Bot By: <a href='t.me/MTXVM1'>ϟ𝙈𝙏𝙓ϟ</a></b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>"Return",'callback_data'=>"back"]]
  ],'resize_keyboard'=>true])
  ]);
  }
  
  
  if($data == "othercmds"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>━━Other Commands━━</b>
  
<b>/me | !me</b> - Your Info
<b>/stats | !stats</b> - Checker Stats
<b>/key | !key</b> - SK Key Checker
<b>/bin | !bin</b> - Bin Lookup
<b>/iban | !iban</b> - IBAN Checker
  
  <b>ϟ Bot by: <a href='t.me/MTXVM1'>ϟ𝙈𝙏𝙓ϟ</a></b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>"Return",'callback_data'=>"back"]]
  ],'resize_keyboard'=>true])
  ]);
  }

?>
