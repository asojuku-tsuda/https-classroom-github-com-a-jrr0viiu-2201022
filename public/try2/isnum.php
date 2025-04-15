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
//入力欄の配列チェック
$indata = filter_input(INPUT_GET,'indata');

//入力欄に値が入っているか
if(isset($indata) == false){
  die("数字を入力してください。");
}

//正規表現での文字チェック
if(mb_ereg('^[0-9]+$',$indata) == false){
  die("数字を入力してください。");
}
echo "入力された数字は： " . $indata;
?>
    </h2>
    </div>
  </body>
</html>
