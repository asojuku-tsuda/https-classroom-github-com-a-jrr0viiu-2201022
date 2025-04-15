<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
$username = filter_input(INPUT_GET,'username');
$useraddress = filter_input(INPUT_GET,'useraddress');
$usermail = filter_input(INPUT_GET,'usermail');
if(mb_ereg('^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠ー]+$',$username) == false || mb_strlen($username) > 20){
  die("20文字以内で名前を入力してください。記号等は利用できません。");
}

if(mb_ereg('^[ぁ-んァ-ヶｱ-ﾝﾞﾟ一-龠0-9０-９ ー]+$',$useraddress) == false || mb_strlen($useraddress) > 30){
  die("30文字以内で住所を入力してください。記号等は利用できません。");
}

if(mb_ereg('^[a-zA-Z0-9._@-]+$',$usermail) == false){
  die("正しいメールアドレス形式で入力してください。記号は.-_@のみ利用可能。");
}

echo "あなたが入力した値<br>";
echo "名前：" . $username. "<br>";
echo "住所：" . $useraddress. "<br>";
echo "メールアドレス：" . $usermail;
?>
    </h2>
    </div>
  </body>
</html>
