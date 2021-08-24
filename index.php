<?php
require_once 'connect.php';
require_once 'functions.php';

if (!empty($_POST))
{
    saveMessage();
    header("Location:{$_SERVER['PHP_SELF']}");
    die;
}

$messages = getMessages();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comment page</title>
</head>
<body>

<form action="index.php" method="POST">
    <p>
        <label for="author">Author</label>
        <input name="author" type="text" id="author" required>
    </p>
    <p>
        <label for="text">Text</label>
        <textarea name="text" height="3" id="text" required></textarea>
    </p>
    <button type="submit">Send</button>
</form>
<hr>

<?php if (!empty($messages)): ?>
    <?php foreach($messages as $message): ?>
    <div class="message">
        <p>Author: <?= $message['author']; ?> | Date: <?= $message['date'] ?> </p>
        <div><?= nl2br(htmlspecialchars($message['text'])); ?></div>
    </div>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>