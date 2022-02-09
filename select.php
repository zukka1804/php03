<?php
//1.  DB接続します
require_once('funcs.php');
// ↑これを最初に呼び出す
$pdo = db_conn();
// ↑その上で関数にする

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM testament_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="u_view.php?id='.$result["id"].'"> ';
    $view .= $result['testator_name'] ."様の遺言書:". $result["indate"] ;
    $view .= '</a>';
       // 削除用のaタグリンクを貼る---------------------------------------------------
       $view .= '<a href="delete.php?id=' . $result['id'] . '">';//追記
       $view .= '  [削除]';//追記
       $view .= '</a>';//追記
       // 削除用---------------------------------------------------------------------

    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>遺言書作成</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
