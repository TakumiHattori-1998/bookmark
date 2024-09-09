<?php
require_once('db_connect.php');

$sql = "SELECT * FROM books ORDER BY id DESC";
$stmt = $pdo->query($sql);
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録済み書籍一覧</title>
</head>
<body>
    <h1>登録済み書籍一覧</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>書籍名</th>
            <th>書籍URL</th>
            <th>書籍コメント</th>
            <th>登録日時</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo htmlspecialchars($book['id']); ?></td>
            <td><?php echo htmlspecialchars($book['book_name']); ?></td>
            <td><a href="<?php echo htmlspecialchars($book['book_url']); ?>" target="_blank"><?php echo htmlspecialchars($book['book_url']); ?></a></td>
            <td><?php echo nl2br(htmlspecialchars($book['book_comment'])); ?></td>
            <td><?php echo htmlspecialchars($book['registered_at']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="index.php">戻る</a></p>
</body>
</html>