<?php
// ファイルを開く
$fp = fopen("sample.txt", "w");
 
// ファイルへ書き込み
fwrite($fp, "==== ==== ==== ==== ====\n");
fwrite($fp, "= ファイルへの書き込みテスト\n");
fwrite($fp, "==== ==== ==== ==== ====\n");
 
// ファイルを閉じる
fclose($fp);

/* 配列の作成 */
$array = array("Windows", "Mac", "Linux");
 
/* ファイルポインタをオープン */
$file = fopen("test.csv", "w");
 
/* CSVファイルを配列へ */
if( $file ){
  var_dump( fputcsv($file, $array) );
}
 
/* ファイルポインタをクローズ */
fclose($file);

?>
