<?php

  header("Content-Type:text/html; charset=UTF-8");
  //キーワードリストの読み込み
  $filename = '../txt/keywordlist.txt';
  $fp = fopen($filename, 'r');
  $keywords = fgets($fp);
  fclose($fp);

  //リクエストURL
  $rumorcloud_url_week = 'http://www.mednlp.jp/~miyabe/rumorCloud/rumorlist_keyword.cgi?keyword='.$keywords;
  $rumorcloud_url_all = 'http://www.mednlp.jp/~miyabe/rumorCloud/rumorlist_keyword.cgi?keyword='.$keywords.'&data=all';

  //curlで取得
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $rumorcloud_url_week);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $html =  curl_exec($ch);
  curl_close($ch);
  file_put_contents("../txt/rumor_week.txt", $html);

  //curlで取得
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $rumorcloud_url_all);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $html =  curl_exec($ch);
  curl_close($ch);
  file_put_contents("../txt/rumor_all.txt", $html);

?>
