<?php
require_once('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_name = $_POST['book_name'];
    $book_url = $_POST['book_url'];
    $book_comment = $_POST['book_comment'];
    $registered_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO books (book_name, book_url, book_comment, registered_at) VALUES (:book_name, :book_url, :book_comment, :registered_at)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':book_name', $book_name, PDO::PARAM_STR);
    $stmt->bindParam(':book_url', $book_url, PDO::PARAM_STR);
    $stmt->bindParam(':book_comment', $book_comment, PDO::PARAM_STR);
    $stmt->bindParam(':registered_at', $registered_at, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "書籍情報が正常に登録されました。";
    } else {
        echo "エラーが発生しました：" . $stmt->errorInfo()[2];
    }
}
?>
<p><a href="index.php">戻る</a></p>