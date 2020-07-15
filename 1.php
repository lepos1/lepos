<?php
ob_start();
  require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;
define('API_KEY', '1093709255:AAFwbD-LSMdXrGKB_lBVFnWmHwRAO-eYphw');

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));

$message = $update->message;
$messageId = $message->message_id;
$text = $message->text;
$chat_id = $message->chat->id;
$id = $message->from->id;
$time = date('d',strtotime('3 hour'));
$user = $message->from->username;
$admin ="949469362";

$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$mid = $update->callback_query->message->message_id;
$dataMessageId = $update->callback_query->message->message_id;
$dataFromID = $update->callback_query->from->id;
$dataFromName = $update->callback_query->from->first_name;
$cqid = $update->callback_query->id;
$fromid=$update->message->from->id;
$mids=$update->message->message_id;
$time1=date("H:i",strtotime("3 hour"));
$time=date('d/m/y');

//file
 $step = file_get_contents("$chat_id.step");

$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤴ONLINE🤴"],['text'=>"👑VIP ONLINE👑"],],
[['text'=>"📊Statistika"],['text'=>"💡Yangiliklarimiz"],],
[['text'=>"🏰Bizning Markazimiz orqali🏰"],],
]
]);
$dizim =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝Ro'yhatdan o'tish📝"]],
[['text'=>"🔙Orqaga"]],
]
  ]); 

$mash =json_encode([
 'inline_keyboard'=>[
[['text'=>"🟢Test", 'callback_data' => "test"],],
[['text'=>"🎧Listening", 'callback_data' => "lis"],],
[['text'=>"📖Reading", 'callback_data' => "read"],],
]
  ]);
$sozin =json_encode([
 'inline_keyboard'=>[
[['text'=>"🎯Boshlash🎯", 'callback_data' => "oldinga1"]],
  ]
  ]);

$sozyod =json_encode([
 'inline_keyboard'=>[
[['text'=>"🧠Boshlash🧠", 'callback_data' => "sozyod1"]],
  ]
  ]);

$sozin1 =json_encode([
 'inline_keyboard'=>[
[['text'=>"◀️(0)", 'callback_data' => "orqaga1"],['text'=>"▶️(1/100)", 'callback_data' => "ol2"],],
  ]
  ]);

$sozin2 =json_encode([
 'inline_keyboard'=>[
[['text'=>"◀️(1)", 'callback_data' => "orqaga1"],['text'=>"▶️(2/100)", 'callback_data' => "oldiga3"],],
  ]
  ]);
$sozyod2 =json_encode([
 'inline_keyboard'=>[
[['text'=>"Hi", 'callback_data' => "xxx"],['text'=>"don't", 'callback_data' => "xxx"],],
  [['text'=>"the", 'callback_data' => "xxx"],['text'=>"Hi, hello", 'callback_data' => "thello"],],
  ]
  ]);
$sozyod3 =json_encode([
 'inline_keyboard'=>[
[['text'=>"village", 'callback_data' => "tvillage"],['text'=>"islands", 'callback_data' => "xxx"],],
  [['text'=>"hiking", 'callback_data' => "xxx"],['text'=>"Hi, hello", 'callback_data' => "xxx"],],
  ]
  ]);
if($data == "xxx"){
  bot('answercallbackquery',[
'callback_query_id'=>$cqid,
'text'=>"📛 Siz so'zni xato tarjima qildingiz!",
'parse_mode'=>'markdown',
"show_alert"=>true,
]);
}
if($data == "oldinga1"){
     bot('EditMessageText',[ 
'message_id'=>$mid,
  'chat_id'=>$chat_id2,
  'text'=>"10ta so'z yod olish uchun🧠\nopportunities — imkoniyatlar
islands — orollar
hiking — yayov yurish
terrific — juda yaxshi
relatives — qarindoshlar
patter — qisqa-qisqa (yengil) tovush
village — qishloq
mushroom — qo‘ziqorin
examinations — imtihonlar
hi — salom",
"reply_markup"=>$sozin1,
  ]);
}
if($data == "ol2"){
     bot('EditMessageText',[ 
'message_id'=>$mid,
  'chat_id'=>$chat_id2,
  'text'=>"12ta so'z yod olish uchun🧠\nBuy - Sotib  olmoq
Check - tekshirmoq
Stop -Tòxtatmoq
Let - Ruxsat bermoq
Choose - Tanlamoq
Fight -Urushmoq
Tell - Aytmoq
Get - Qabul qilmoq
See - Kòrmoq
Give - Bermoq
Need - Muhtoj bòlmoq
Help - Yordam bermoq",
"reply_markup"=>$sozin2,
  ]);
}

if($data == "thello"){
    bot('EditMessageText',[ 
'message_id'=>$mid,
  'chat_id'=>$chat_id2,
'text'=>"✅ Salom so'zini to'ri tarjima qildingiz✅\n\nQishloq so'zi ingliz tilida qanaqa tarjima qilinadi?",
"reply_markup"=>$sozyod3,
  ]);
}
if($data == "sozyod1"){
    bot('EditMessageText',[ 
'message_id'=>$mid,
  'chat_id'=>$chat_id2,
'text'=>"Salom so'zi ingliz tilida qanaqa tarjima qilinadi?",
"reply_markup"=>$sozyod2,
  ]);
}
$fan = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🇺🇸INGLIZ🇺🇸"],['text'=>"🇷🇺RUS-TILI🇷🇺"],],
[['text'=>"🔙Orqaga"],],
]
]);
$ing = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👑VIP ONLINE👑"],],
[['text'=>"🤓Mashqlar🤓"],['text'=>"📝So'zlar📝"],],
[['text'=>"📒So'zlarni yod olish"],['text'=>"🔎Tarjimon"],],
[['text'=>"🔙Orqaga"],],
]
]);
$ru = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👑VIP ONLINE👑"],],
[['text'=>"🤓Mashqlar🤓"],['text'=>"📝So'zlar📝"],],
[['text'=>"📒So'zlarni yod olish"],['text'=>"🔙Orqaga"]]
]
]);
if($text=="🔙Orqaga"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   "text"=>"Biz orqali siz tilni ikki uslubda o'rganishingiz mumkun✅.\n\n1️⃣ ONLINE telegram orqali\n2️⃣Lepos school markazimiz orqali.\n\n 📣Kanalimiz: @Lepos_school",
   "reply_markup"=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤴ONLINE🤴"],['text'=>"👑VIP ONLINE👑"],],
[['text'=>"📊Statistika"],['text'=>"💡Yangiliklarimiz"],],
[['text'=>"🏰Bizning Markazimiz orqali🏰"],],
]
]),
  ]);
}
if(mb_stripos($text,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($text,"📊Statistika")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "📡 botdan foydalanuvchilar soni :
👤 user: $all
⏰ $time1 $time";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$tx,
  ]);
}
if($text=="/start"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   "text"=>"🤓Salom LEPOS SCHOOL botga xush kelibsiz siz. Biz orqali siz tilni ikki uslubda o'rganishingiz mumkun✅.\n\n1️⃣ ONLINE telegram orqali\n2️⃣Lepos school markazimiz orqali.\n\n Kanalimiz: @Lepos_school",
   "reply_markup"=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤴ONLINE🤴"],['text'=>"👑VIP ONLINE👑"],],
[['text'=>"📊Statistika"],['text'=>"💡Yangiliklarimiz"],],
[['text'=>"🏰Bizning Markazimiz orqali🏰"],],
]
]),
  ]);
}
if($text=="🏰Bizning Markazimiz orqali🏰"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   "text"=>"Bizning markazlarimiz, sizga eng yaqin markazni tanlang.",
   "reply_markup"=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
                [['text'=>"📌Nukus📌"],['text'=>"📌Nukus tumani📌"]],
                [['text'=>"📌Shumanay📌"],['text'=>"📌Kegeyli📌"]],
                [['text'=>"🌤ob havo🌤"],],
                [['text'=>"🔙Orqaga"]],          
                 ]
        ]),
  ]);
}
if($text == "📌Nukus📌"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
"text"=>"Nukusdagi ma'nzilimiz\n🚩 Nukus, Amir Temur kòchasi 127 A uy.\n Ro'yhatdan o'tish uchun ismingiz, nomeringizni va fan( ILTES,RUS TILI, MATEMATIKA, INGLIZ) shu yerga yozing. \n\n Namuna\n(Azizbek, +998996244324 ,INGLIZ)",
"parse_mode"=>"markdown",
"reply_markup"=>$dizim,
]);
}
if($text == "📌Nukus tumani📌"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
"text"=>"Nukus tumanidagi ma'nzilimiz\n🚩 Nukus Tumani, Darsan kòchasi. Moljal Pochta binosiga yetmasdan\n Ro'yhatdan o'tish uchun ismingiz, nomeringizni va fan( ILTES,RUS TILI, MATEMATIKA, INGLIZ) shu yerga yozing. \n\n Namuna\n(Azizbek, +998996244324 ,RUS-TILI)",
"parse_mode"=>"markdown",
"reply_markup"=>$dizim,
]);
}
if($text == "📌Shumanay📌"){
   bot("sendMessage",[
   'chat_id'=>$chat_id,
"text"=>"Shumanaydagi ma'nzilimiz\n🚩Shumanay, Òzbekiston kochasi 82-uy .Pedagogika koleji binosi .\n Ro'yhatdan o'tish uchun ismingiz, nomeringizni va fan( ILTES,RUS TILI, MATEMATIKA, INGLIZ) shu yerga yozing. \n\n Namuna\n(Azizbek, +998996244324 ,MATEMATIKA)",
"parse_mode"=>"markdown",
"reply_markup"=>$dizim,
]);
}
if($text == "📌Kegeyli📌"){
   bot("sendMessage",[
   'chat_id'=>$chat_id,
"text"=>"Kegeylidagi ma'nzilimiz\n🚩Kegeyli, 1 maktab binosi moljal: Dehqon Bozor\n Ro'yhatdan o'tish uchun ismingiz, nomeringizni va fan( ILTES,RUS TILI, MATEMATIKA, INGLIZ) shu yerga yozing. \n\n Namuna\n(Azizbek, +998996244324 ,ILTES)",
"parse_mode"=>"markdown",
"reply_markup"=>$dizim,
]);
}
//////
if($text =="🤴ONLINE🤴"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"Iltimos fanni tanlang",
   'reply_markup'=>$fan,
  ]);
}

if($text =="🇷🇺RUS-TILI🇷🇺"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"🇷🇺RUS-TILI🇷🇺 tilin tanladingiz✅",
   'reply_markup'=>$ru,
  ]);
}

if($text =="🇺🇸INGLIZ🇺🇸"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"INGLIZ tilin tanladingiz✅",
   'reply_markup'=>$ing,
  ]);
}
if($text == "🤓Mashqlar🤓"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"Mashq turlarini tanlang.",
   'reply_markup'=>$mash,
  ]);
}
if($text == "📝So'zlar📝"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"Bu bo'limda siz ingliz tilinda eng ko'p ishlatilgan so'zlarni yod olasiz.",
   'reply_markup'=>$sozin,
  ]);
}
if($text == "📒So'zlarni yod olish"){
  bot("sendMessage",[
   'chat_id'=>$chat_id,
   'text'=>"Bu bo'limda bo'timiz sizga so'z beradi siz shu so'zning ingliz tilidagi tarjimasini topishingiz kerak.\n Bu orqali siz so'zlarni yanada tez o'rgana olasiz.🤓",
   'reply_markup'=>$sozyod,
  ]);
}
 if($text=="🚫Bekor qilish🚫"){
bot('sendMessage',[
"chat_id"=>$chat_id,
"text"=>"🚫 Ro'yhatdan o'tish bekor qilindi.",
"reply_markup"=>$menu,
]);
unlink("$chat_id.step");
} 
$bekor = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚫Bekor qilish🚫"]],
]
  ]);
    $step = file_get_contents("$chat_id.step");
if($text == "📝Ro'yhatdan o'tish📝"){
file_put_contents("$chat_id.step","soz");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Ro'yhatdan o'tish uchun siz yoshoyotgan yer, ismingiz, telefon nomeringiz, fan.",
'reply_markup'=>$bekor,
  ]);
}

if($text and $step == "soz"){
    bot('sendmessage',[
'chat_id'=>-1001498490573,
'text'=>"Dizim zayavkasi.\n\n$text\n\n@$user\n$time",
]);
bot('sendMessage',[ 
  'chat_id'=>$chat_id, 
 'text'=>"🎉Tabriklaymiz ro'yhatdan o'ttingiz.\nMenejerlar sizga 24 soat ⏰ ishida bog'lanadilar✅", 
   ]);
}

$stt=file_get_contents("j.txt");
if($text=="💡Yangiliklarimiz"){
bot('sendMessage',[
"chat_id"=>$chat_id,
"text"=>"$stt",
"parse_mode"=>"html",
]);
}
//admin
$panel =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"yangilik qoshish"]],
[['text'=>"🔙Orqaga"]],
]
  ]);
if($text=="/admin"){
bot('sendMessage',[
"chat_id"=>$chat_id,
"text"=>"<b>Salom, Siz bot administratorisiz. Kerakli boʻlimni tanlang:</b>",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}
$st=file_get_contents("j.txt");
$stepp=file_get_contents("j.step");
if($text == "yangilik qoshish"){
file_put_contents("j.step","soz");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"text",
  ]);
}
if($text and $stepp == "soz"){
   file_put_contents("j.txt","$text");
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"filege salindi",
]);
unlink("j.step");
}
// tarjimon
$tarj =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"INGLIZ-UZBEK"],['text'=>"UZBEK-INGLIZ"]],
[['text'=>"RUS-UZBEK"],['text'=>"UZBEK-RUS"]],
[['text'=>"🔙Orqaga"]],
]
  ]);
  if($text=="🔙Back"){
bot('sendMessage',[
"chat_id"=>$chat_id,
"text"=>"⏬",
"reply_markup"=>$tarj,
]);
unlink("$chat_id.step2");
} 
if($text=="🔎Tarjimon"){
bot('sendMessage',[
"chat_id"=>$chat_id,
"text"=>"🔎Tarjimon bo'lim orqali siz hohlagan so'zingizni 
INGLIZ-UZBEK
UZBEK-INGLIZ
RUS-UZBEK
UZBEK-RUS
shu tillarga tarjima qilishga yordam beradi.Bu menunig sizga foydasi tegsa xursantman.\n\n Xurmat bilan: @Lepos_schoolbot",
"parse_mode"=>"html",
"reply_markup"=>$tarj,
]);
}
  $step2 = file_get_contents("$chat_id.step2");

if($text == "INGLIZ-UZBEK"){
file_put_contents("$chat_id.step2","in");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Iltimos ingliz tilida so'z kiriting",
'reply_markup'=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Back"],],
]
]), 
  ]);
}
if($text and $step2 == "in"){

            $source = 'en';
            $target = 'uz';

            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$result",
]);
}
if($text == "UZBEK-INGLIZ"){
file_put_contents("$chat_id.step2","uz");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Iltimos Uzbek tilida so'z kiriting",
'reply_markup'=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Back"],],
]
]),
  ]);
}

if($text and $step2 == "uz"){

            $source = 'uz';
            $target = 'en';

            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$result",
]);
}

if($text == "RUS-UZBEK"){
file_put_contents("$chat_id.step2","ru");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Iltimos RUS tilida so'z kiriting",
'reply_markup'=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Back"],],
]
]), 
  ]);
}
if($text and $step2 == "ru"){

            $source = 'ru';
            $target = 'uz';

            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$result",
]);
}

if($text == "UZBEK-RUS"){
file_put_contents("$chat_id.step2","uzr");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Iltimos UZBEK tilida so'z kiriting",
'reply_markup'=> json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Back"],],
]
]), 
  ]);
}
if($text and $step2 == "uzr"){

            $source = 'uz';
            $target = 'ru';

            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$result",
]);
}

//lising
$lis1 =json_encode([
 'inline_keyboard'=>[
[['text'=>"2", 'callback_data' => "1"],['text'=>"3", 'callback_data' => "2"],['text'=>"4", 'callback_data' => "3"],['text'=>"5", 'callback_data' => "4"],['text'=>"6", 'callback_data' => "5"],],
[['text'=>"7", 'callback_data' => "6"],['text'=>"8", 'callback_data' => "7"],['text'=>"9", 'callback_data' => "8"],['text'=>"11", 'callback_data' => "10"],['text'=>"12", 'callback_data' => "11"],['text'=>"13", 'callback_data' => "12"],],
[['text'=>"🔙Orqaga", 'callback_data' => "orq"],],
]
]);
if($data == "lis"){
     bot('sendMessage',[ 
  'chat_id'=>$chat_id2,
  'text'=>"🎧Listening bo'limi orqali ingliz tilini eshitib yanada tez o'rganishingi mumkun.",
"reply_markup"=>$lis1,
  ]);
}
if($data == "1"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/2",
  'chat_id'=>$chat_id2,
  'caption'=>"📚2-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "2"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/3",
  'chat_id'=>$chat_id2,
  'caption'=>"📚3-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "3"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/4",
  'chat_id'=>$chat_id2,
  'caption'=>"📚4-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "4"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/5",
  'chat_id'=>$chat_id2,
  'caption'=>"📚5-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "5"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/6",
  'chat_id'=>$chat_id2,
  'caption'=>"📚6-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "6"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/7",
  'chat_id'=>$chat_id2,
  'caption'=>"📚7-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "7"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/8",
  'chat_id'=>$chat_id2,
  'caption'=>"📚8-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "8"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/9",
  'chat_id'=>$chat_id2,
  'caption'=>"📚9-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "9"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/10",
  'chat_id'=>$chat_id2,
  'caption'=>"📚10-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "10"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/11",
  'chat_id'=>$chat_id2,
  'caption'=>"📚11-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "11"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/12",
  'chat_id'=>$chat_id2,
  'caption'=>"📚12-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "12"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/13",
  'chat_id'=>$chat_id2,
  'caption'=>"📚13-DARS.📚

@Lepos_schoolbot",
  ]);
}
if($data == "13"){
     bot('SendAudio',[ 
  'audio'=>"https://t.me/Azizbeklepos123/14",
  'chat_id'=>$chat_id2,
  'caption'=>"📚14-DARS.📚

@Lepos_schoolbot",
  ]);
}
///ob-havo
$obh =json_encode([
 'inline_keyboard'=>[
[['text'=>"Nukus", 'callback_data' => "nuk"]],
  ]
  ]);
if($data == 'nuk'){$uz = file_get_contents("http://obhavo.uz/nukus"); $ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);
$oqgr=str_replace('</p>',' ',$oqgr); $tongr=str_replace('<p class="forecast">',' ',$ex1[99]);
$tongr=str_replace('</p>',' ',$tongr); $bugun=str_replace('<div class="current-day">',' ',$ex1[67]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[66]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$nam=str_replace('<p>',' ',$ex1[81]);  $nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[83]);  $bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);  $shamol=str_replace('<p>',' ',$ex1[82]);  $shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','`',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[86]);
$oy=str_replace('</p>',' ',$oy); $oy=str_replace('&#039;','`',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[87]);  $qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[88]);  $qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);

$ers=str_replace('<div>','',$ex1[152]);
$ers=str_replace('</div>','',$ers);
$ers= trim($ers);
$er1=str_replace('<span class="forecast-day">','',$ex1[162]);
$er1=str_replace('</span>','',$er1);
$er1= trim($er1);
$havo = trim($ex1[166]);
$er2=str_replace('<span class="forecast-night">','',$ex1[163]);
$yog = trim($ex1[169]);
$er2=str_replace('</span>','',$er2);
$er2= trim($er2);

$hf1h=str_replace('<strong>','',$ex1[174]);
$hf1h=str_replace('</strong>','',$hf1h);
$hf1h= trim($hf1h);
   $hf1s=str_replace('<div>','',$ex1[175]);
$hf1s=str_replace('</div>','',$hf1s);
$hf1s= trim($hf1s);
$hf1k=str_replace('<span class="forecast-day">','',$ex1[185]);
$hf1k=str_replace('</span>','',$hf1k);
$hf1k= trim($hf1k);
$hf1hv=str_replace('&#039;','`',$ex1[189]);
$hf1hv = trim($hf1hv);
$hf1t=str_replace('<span class="forecast-night">','',$ex1[186]);
$hf1t=str_replace('</span>','',$hf1t);
$hf1t= trim($hf1t);
$hf1y = trim($ex1[192]);

$hf2h=str_replace('<strong>','',$ex1[197]);
$hf2h=str_replace('</strong>','',$hf2h);
$hf2h= trim($hf2h);
   $hf2s=str_replace('<div>','',$ex1[198]);
$hf2s=str_replace('</div>','',$hf2s);
$hf2s= trim($hf2s);
$hf2k=str_replace('<span class="forecast-day">','',$ex1[208]);
$hf2k=str_replace('</span>','',$hf2k);
$hf2k= trim($hf2k);
$hf2hv=str_replace('&#039;','`',$ex1[212]);
$hf2hv = trim($hf2hv);
$hf2t=str_replace('<span class="forecast-night">','',$ex1[209]);
$hf2t=str_replace('</span>','',$hf2t);
$hf2t= trim($hf2t);
$hf2y = trim($ex1[215]);

$hf6h=str_replace('<strong>','',$ex1[220]);
$hf6h=str_replace('</strong>','',$hf6h);
$hf6h= trim($hf6h);
   $hf6s=str_replace('<div>','',$ex1[221]);
$hf6s=str_replace('</div>','',$hf6s);
$hf6s= trim($hf6s);
$hf6k=str_replace('<span class="forecast-day">','',$ex1[231]);
$hf6k=str_replace('</span>','',$hf6k);
$hf6k= trim($hf6k);
$hf6hv=str_replace('&#039;','`',$ex1[235]);
$hf6hv = trim($hf6hv);
$hf6t=str_replace('<span class="forecast-night">','',$ex1[232]);
$hf6t=str_replace('</span>','',$hf6t);
$hf6t= trim($hf6t);
$hf6y = trim($ex1[238]);

$hf3h=str_replace('<strong>','',$ex1[243]);
$hf3h=str_replace('</strong>','',$hf3h);
$hf3h= trim($hf3h);
   $hf3s=str_replace('<div>','',$ex1[244]);
$hf3s=str_replace('</div>','',$hf3s);
$hf3s= trim($hf3s);
$hf3k=str_replace('<span class="forecast-day">','',$ex1[254]);
$hf3k=str_replace('</span>','',$hf3k);
$hf3k= trim($hf3k);
$hf3hv=str_replace('&#039;','`',$ex1[258]);
$hf3hv = trim($hf3hv);
$hf3t=str_replace('<span class="forecast-night">','',$ex1[255]);
$hf3t=str_replace('</span>','',$hf3t);
$hf3t= trim($hf3t);
$hf3y = trim($ex1[261]);

$hf4h=str_replace('<strong>','',$ex1[266]);
$hf4h=str_replace('</strong>','',$hf4h);
$hf4h= trim($hf4h);
   $hf4s=str_replace('<div>','',$ex1[267]);
$hf4s=str_replace('</div>','',$hf4s);
$hf4s= trim($hf4s);
$hf4k=str_replace('<span class="forecast-day">','',$ex1[277]);
$hf4k=str_replace('</span>','',$hf4k);
$hf4k= trim($hf4k);
$hf4hv=str_replace('&#039;','`',$ex1[281]);
$hf4hv = trim($hf4hv);
$hf4t=str_replace('<span class="forecast-night">','',$ex1[278]);
$hf4t=str_replace('</span>','',$hf4t);
$hf4t= trim($hf4t);
$hf4y = trim($ex1[284]);

$hf5h=str_replace('<strong>','',$ex1[289]);
$hf5h=str_replace('</strong>','',$hf5h);
$hf5h= trim($hf5h);
   $hf5s=str_replace('<div>','',$ex1[290]);
$hf5s=str_replace('</div>','',$hf5s);
$hf5s= trim($hf5s);
$hf5k=str_replace('<span class="forecast-day">','',$ex1[300]);
$hf5k=str_replace('</span>','',$hf5k);
$hf5k= trim($hf5k);
$hf5hv=str_replace('&#039;','`',$ex1[304]);
$hf5hv = trim($hf5hv);
$hf5t=str_replace('<span class="forecast-night">','',$ex1[301]);
$hf5t=str_replace('</span>','',$hf5t);
$hf5t= trim($hf5t);
$hf5y = trim($ex1[307]);

bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"📆Nukus $bugun\n⛅ $gr1 ... $gr2 ,$havo1\n\n⛅Tong : $tongr\n☀Kun :$kungr\n🌔Oqshom : $oqgr\n\n💦$nam\n☁$bosim\n\n🌙 $oy\n☀ $qch\n⛅ $qb",
]);
    }
if($text=="🌤ob havo🌤"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"Bu bo'lim orqali bizning markazimiz joylashgan yernig ob havosini bilib borasiz.",
    'reply_markup'=>$obh,
  ]);
}
