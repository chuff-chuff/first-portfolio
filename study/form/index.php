<?php
session_start();

if(isset($_SESSION['name'])) {
  $name = $_SESSION['name'];
}

if(isset($_SESSION['mail'])) {
  $mail = $_SESSION['mail'];
}

if(isset($_SESSION['text'])) {
  $text = $_SESSION['text'];
}

$name_err = false;
$mail_err = false;
$text_err = false;

if(empty($_SESSION['name_err']) === false){
  $name_err = true;
}

if(empty($_SESSION['mail_err']) === false){
  $mail_err = true;
}

if(empty($_SESSION['text_err']) === false){
  $text_err = true;
}

$_SESSION = array();
session_destroy();
?>

  <!DOCTYPE html>
  <html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>    
    <link rel="stylesheet" href="css/form.css">
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-96132949-1', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
<div id="container">
    <form action="check.php" method="post">
        <table>
          <tr>
            <th>お名前</th>
            <td><input <?php if($name_err === true){echo 'class="error"';} ?> type="text" name="name" placeholder="<?php if(isset($text) === true){ echo 'お名前が入力されていません';} else{ echo 'お名前を入力してください';} ?>" size="28" value="<?php if(isset($name) === true){ echo $name;} ?>" autofocus></td>
          </tr>

          <tr>
            <th>メールアドレス</th>
            <td><input <?php if($mail_err === true){echo 'class="error"';} ?> name="mail" type="email" placeholder="<?php if(isset($mail) === true){ echo 'メールアドレスが入力されていません';} else{ echo 'メールアドレスを入力してください';} ?>" size="28" value="<?php if(isset($mail) === true){ echo $mail;} ?>" required></td>
          </tr>

          <tr>
            <th>お問い合わせ内容</th>
            <td><textarea <?php if($text_err === true){echo 'class="error"';} ?> name="text" cols="30" rows="10" placeholder="<?php if(isset($text) === true){ echo 'お問合せ内容が入力されていません';} else{ echo 'お問合せ内容を入力してください';} ?>"><?php if(isset($text) === true){ echo $text;} ?></textarea></td>
          </tr>
        </table>
        <button type="subimit">確認
        </button>
    </form>
</div>
  </body>

  </html>