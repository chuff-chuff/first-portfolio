<?php
session_start();

  $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8');
  $mail = htmlspecialchars($_POST['mail'], ENT_QUOTES, 'utf-8');
  $text = htmlspecialchars($_POST['text'], ENT_QUOTES, 'utf-8');

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['mail'] = $_POST['mail'];
  $_SESSION['text'] = $_POST['text'];

if(
   (empty($_POST['name']) === true) ||
   (empty($_POST['mail']) === true) ||
   (empty($_POST['text']) === true) 
){
  if( empty($_POST['name']) === true){
    $_SESSION['name_err'] = true;  
  }
  
  if( empty($_POST['mail']) === true){
    $_SESSION['mail_err'] = true;
  }
  
  if( empty($_POST['text']) === true){
    $_SESSION['text_err'] = true;
  }
  
  header('location:index.php');
  exit;
}

  $name = nl2br($name);
  $mail = nl2br($mail);
  $text = nl2br($text);
?>

  <!DOCTYPE html>
  <html lang="ja">

  <head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム | 確認</title>
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
      <a href="send.php"><button>送信</button></a>
    </div>

  </body>

  </html>