<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */
ini_set('display_errors', 1);
//1. POSTデータ取得

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$property1 = $_POST['property1'];
$property2 = $_POST['property2'];
$property3 = $_POST['property3'];
$relation1 = $_POST['relation1'];
$relation2 = $_POST['relation2'];
$relation3 = $_POST['relation3'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$method1 = $_POST['method1'];
$method2 = $_POST['method2'];
$method3 = $_POST['method3'];
$amount = $_POST['amount'];
$group_name = $_POST['group_name'];
$group_address = $_POST['group_address'];
$lawyer_name = $_POST['lawyer_name'];
$lawyer_address = $_POST['lawyer_address'];
$lawyer_birth = $_POST['lawyer_birth'];
$ps = $_POST['ps'];
$testator_address = $_POST['testator_address'];
$testator_name = $_POST['testator_name'];
$testator_birth = $_POST['testator_birth'];
$id = $_POST["id"];

// 表示確認
// echo $number1;
// echo $number2;
// echo $number3;
// echo $property1;
// echo $property2;
// echo $property3;
// echo $relation1;
// echo $relation2;
// echo $relation3;
// echo $name1;
// echo $name2;
// echo $name3;
// echo $method1;
// echo $method2;
// echo $method3;
// echo $amount;
// echo $group_name;
// echo $group_address;
// echo $lawyer_name;
// echo $lawyer_address;
// echo $lawyer_birth;
// echo $ps;
// echo $testator_address;
// echo $testator_name;
// echo $testator_birth;



// 表示、表示確認したら全てコメントアウト🤗
// echo $name;
// echo $email;
// echo $content;

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();



//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare('UPDATE testament_an_table SET number1 = :number1, property1 = :property1, relation1 = :relation1, name1 = :name1, 
method1 = :method1, number2 = :number2, property2 = :property2, relation2 = :relation2, name2 = :name2, method2 = :method2, number3 = :number3, 
property3 = :property3, relation3 = :relation3, name3 = :name3, method3 = :method3, amount = :amount, group_name = :group_name, 
group_address = :group_address, lawyer_name = :lawyer_name, lawyer_address = :lawyer_address, lawyer_birth = :lawyer_birth, 
ps = :ps, testator_address = :testator_address, testator_name = :testator_name, testator_birth = :testator_birth, indate = sysdate() WHERE id = :id;' );



//  2. バインド変数を用意
$stmt->bindValue(':number1', $number1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':number2', $number2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':number3', $number3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':property1', $property1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':property2', $property2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':property3', $property3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':relation1', $relation1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':relation2', $relation2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':relation3', $relation3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name1', $name1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name2', $name2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name3', $name3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':method1', $method1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':method2', $method2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':method3', $method3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':number1', $number1, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':number2', $number2, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':number3', $number3, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':amount', $amount, PDO:: PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':group_name', $group_name, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':group_address', $group_address, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lawyer_name', $lawyer_name, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lawyer_address', $lawyer_address, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lawyer_birth', $lawyer_birth, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('ps', $ps, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('testator_address', $testator_address, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('testator_name', $testator_name, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('testator_birth', $testator_birth, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

// hiddenで受け取ったidをbindValueを用いて「安全かチェック」をする＝SQLインジェクション対策
$stmt->bindValue(':id', $id, PDO::PARAM_STR); //数値 なぜ？DBの設定でidを登録するときにINTにしているから🤗
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}

