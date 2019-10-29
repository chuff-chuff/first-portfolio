<?php
session_start();

if(
  (empty($_SESSION['name']) === true ) ||
  (empty($_SESSION['mail']) === true ) ||
  (empty($_SESSION['text']) === true ) 
){
  header('location:index.php');
  exit;
}

$name = $_SESSION['name'];
$mail = $_SESSION['mail'];
$text = $_SESSION['text'];

$_SESSION = array();
session_destroy();

$sendAdr = 'norizaki85@gmail.com';

$add_header = 'From:'.$mail."\r\n";
$add_header .= 'Reply-to:'.$mail."\r\n";

$message = <<< MESSAGE
{$name}さんからお問合せがありました

【メールアドレス】：{$mail}
【お問い合わせ内容】：{$text}
MESSAGE;

$message = mb_convert_encoding($message, 'ISO-2022-JP-ms', 'utf-8');

mb_language('ja');

mb_internal_encoding('utf-8');

$result = mb_send_mail($sendAdr, 'お問い合わせメール', $message, $add_header);

if($result === false){
  echo 'エラーが発生しました。時間を空けて再度送信してください';
  echo '<a href="index.php>入力ページに戻る</a>';
  exit;
}

$name = htmlspecialchars($name, ENT_QUOTES, 'utf-8');
$mail = htmlspecialchars($mail, ENT_QUOTES, 'utf-8');
$text = htmlspecialchars($text, ENT_QUOTES, 'utf-8');

$name = nl2br($name);
$mail = nl2br($mail);
$text = nl2br($text);
?>

  <!DOCTYPE html>
  <html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>お問合せフォーム | 送信完了</title>
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
      <table>
        <tr>
          <th>お名前</th>
          <td>
            <?php echo $name; ?>
          </td>
        </tr>

        <tr>
          <th>メールアドレス</th>
          <td>
            <?php echo $mail; ?>
          </td>
        </tr>

        <tr>
          <th>お問い合わせ内容</th>
          <td>
            <?php echo $text; ?>
          </td>
        </tr>
      </table>

      <p>お問い合わせが完了しました。<br>2～3日内外で回答を差し上げます。</p>

      <a href="http://portfolio.chuff-chuff.dev"><button>トップに戻る</button></a>
    </div>
  </body>

  </html>