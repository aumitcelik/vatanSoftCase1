<?php
$jsonFile = file_get_contents('data.json');
$veriler = json_decode($jsonFile, true);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>vatanSoftCase1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
    <h1>Yorumlar</h1>
    
    <div class="comments-list">
    <?php foreach ($veriler['comments'] as $comment): ?>
        <div class="comment">
            <div class="comment-title"><?php echo $comment['title']; ?></div>
            <div class="comment-content"><?php echo $comment['content']; ?></div>
            <?php if (!empty($comment['comment_to_comment'])): ?>
                <div class="reply">Cevap: <?php echo $comment['comment_to_comment']; ?></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>

</body>
</html>
