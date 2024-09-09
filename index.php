<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍登録フォーム</title>
</head>
<body>
    <h1>書籍登録フォーム</h1>
    <form action="insert.php" method="post">
        <div>
            <label for="book_name">書籍名：</label>
            <input type="text" id="book_name" name="book_name" required>
        </div>
        <div>
            <label for="book_url">書籍URL：</label>
            <input type="url" id="book_url" name="book_url" required>
        </div>
        <div>
            <label for="book_comment">書籍コメント：</label>
            <textarea id="book_comment" name="book_comment" required></textarea>
        </div>
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
    <p><a href="select.php">登録済み書籍一覧を表示</a></p>
</body>
</html>