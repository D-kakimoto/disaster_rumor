<!DOCTYPE html>
<html lang="ja">
  <title>災害時の流言</title>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="js/sample.js">//</script>
  </head>
  <body>
    <?php
      //キーワードリストの読み込み
      $filename = 'keywordlist.txt';
      $fp = fopen($filename, 'r');
      $keywords = fgets($fp);
      fclose($fp);

      //アンダーバーで区切って配列に格納
      $keyword = explode("_", $keywords);

      //空要素を削除し，添字を詰める
      $keyword = array_filter($keyword, "strlen");
      $keyword = array_values($keyword);

      for($i=0;$i<=count($keyword);$i++){
        echo $keyword[$i].'<br>';
      }

      echo '<script type="text/javascript">';
      echo 'alert("'.$keyword[1].'");';
      echo '</script>';
      ?>
  </body>
</html>
