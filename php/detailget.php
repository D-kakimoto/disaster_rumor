<?php
if (isset($_POST['url'])){

  //curlで取得
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $_POST['url']);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $html =  curl_exec($ch);
  curl_close($ch);

  $html = str_replace("css/common.css", "http://www.mednlp.jp/~miyabe/rumorCloud/css/common.css", $html);
  $html = str_replace("css/jquery.jqplot.min.css", "http://www.mednlp.jp/~miyabe/rumorCloud/css/jquery.jqplot.min.css", $html);
  $html = str_replace("js/jquery.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jquery.js", $html);
  $html = str_replace("js/jquery.selection.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jquery.selection.js", $html);
  $html = str_replace("js/common.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/common.js", $html);
  $html = str_replace("js/jquery.jqplot.min.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jquery.jqplot.min.js", $html);
  $html = str_replace("js/jqplot.barRenderer.min.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jqplot.barRenderer.min.js", $html);
  $html = str_replace("js/jqplot.categoryAxisRenderer.min.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jqplot.categoryAxisRenderer.min.js", $html);
  $html = str_replace("js/jqplot.pointLabels.min.js", "http://www.mednlp.jp/~miyabe/rumorCloud/js/jqplot.pointLabels.min.js", $html);
  $html = str_replace("images/logo.png", "http://www.mednlp.jp/~miyabe/rumorCloud/images/logo.png", $html);
  $html = str_replace('<a href="#top">ページのトップへ戻る</a>', "", $html);
  $html = str_replace('10pt', "5pt", $html);
  echo $html;
}
?>
