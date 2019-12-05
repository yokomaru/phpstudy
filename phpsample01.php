<?php
echo "1) ".basename("/etc/sudoers.d", ".d").PHP_EOL;
echo "2) ".basename("/etc/sudoers.d").PHP_EOL;
echo "3) ".basename("/etc/passwd").PHP_EOL;
echo "4) ".basename("/etc/").PHP_EOL;
echo "5) ".basename(".").PHP_EOL;
echo "6) ".basename("/");

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
    echo 'あなたはInternet Explorerを使用しています<br />';
  }

  echo $_SERVER['HTTP_USER_AGENT'];
?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
?>
<h3>strposが非falseを返しました</h3>
<center><b>あなたはInternet Explorerを使用しています</b></center>
<?php
} else {
?>
<h3>strposがfalseを返しました</h3>
<center><b>あなたはInternet Explorerを使用していません</b></center>
<?php
}
?>
<?php
echo memory_get_usage(); // 処理前のメモリ使用量の表示
 
// メモリの使用量を調べたい処理
 
echo memory_get_usage(); // 処理後のメモリ使用量の表示
?>