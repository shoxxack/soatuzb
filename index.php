<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H•i",strtotime("0 hour"));
$kun=date("d•m•20Y",strtotime("0 hour"));
$haf = date('N',strtotime('0 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
 $nik = ["👨🏻‍💻Uzb_Coderchik 😎: $time","$time : 👨🏻‍💻Uzb Coderchik","Samariddin Odilov Hack","$time","Uzb Coderchik : $kun"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt",'about'=>"🔻📆$kun 🔺
🔻 ⏰$time 🔺📃$hafta 👑@Uzb_Coderchik"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
header('Content-type: image/jpg');

$list = ["https://www.sunnatcik.xvest.ru/MY/index.php?text=$time","https://www.sunnatcik.xvest.ru/Iphone/index.php?text=$time"];
$tt = array_rand($list);
$text = "$list[$tt]";
file_put_contents("rasm.jpg",file_get_contents("$text"));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg"]);
unlink("MadelineProto.log");
unlink("session.madeline");
?>
