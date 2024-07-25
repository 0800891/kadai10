<?php
session_start();
require_once('funcs.php');
loginCheck();

try {

   
    $user = "root";
    $password = "";

    // $dbh = new PDO("mysql:host=localhost; dbname=gs_db_kadai07; charset=utf8", "$user", "$password");
    $dbh = db_conn();

    $stmt = $dbh->prepare('DELETE FROM gs_bm_table_r1 WHERE id = :id');

    $stmt->execute(array(':id' => $_GET["id"]));

    echo "削除しました。";

} catch (Exception $e) {
    $text = 'エラーが発生しました。:' . "\n" . $e->getMessage();
          echo $text;
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>削除完了</title>
  </head>
  <body>          
  <p>
      <a href="select.php">投稿一覧へ</a>
  </p> 
  </body>
</html>