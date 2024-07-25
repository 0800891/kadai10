
<?php
session_start();
require_once('funcs.php');
loginCheck();
/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//0. SESSIONデータ取得
$user_id = $_SESSION['user_id'];
echo $user_id ;

//1. POSTデータ取得
if(isset($_POST['building_id'])){
$building_id = $_POST['building_id'];
echo $building_id ;
}

if(isset($_POST['design_code_id'])){
  $design_code_id = $_POST['design_code_id'];
  echo $design_code_id ;
  }


// if(isset($_POST['URL'])){
// $URL = $_POST['URL'];
// }
// if(isset($_POST['comment'])){
// $comment = $_POST['comment'];
// }
// if(isset($_POST['image'])){
// $image = $_POST['image'];
// }
//2. DB接続します
// try {
//     //ID:'root', Password: xamppは 空白 ''
//     $pdo = new PDO('mysql:dbname=gs_db_kadai07;charset=utf8;host=localhost', 'root', '');
// } catch (PDOException $e) {
//     exit('DBConnectError:'.$e->getMessage());
// }
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
                gs_bm_table_r1(id, user_id, building_id, name,design_code_id, date )
                VALUES( NULL,:user_id,:building_id,:name ,:design_code_id, now() ) ');

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':building_id', $building_id, PDO::PARAM_INT);
$stmt->bindValue(':name', "", PDO::PARAM_STR);
$stmt->bindValue(':design_code_id', $design_code_id, PDO::PARAM_INT);
// $stmt->bindValue(':URL', "", PDO::PARAM_STR);
// $stmt->bindValue(':comment', $building_id, PDO::PARAM_STR);
// $stmt->bindValue(':image', $building_id, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    // $error = $stmt->errorInfo();
    // exit('ErrorMessage:'.$error[2]);
    sql_error($stmt);
} else {
    //５．index.phpへリダイレクト
  // header('Location: index.php');
  redirect('index.php');

}
?>