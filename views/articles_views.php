<html>
    <head>
        <meta charset="UTF-8">
        <title>My Likes Plagin</title>
        <link rel="stylesheet" type="text/css" href="stile/style.css">
    </head>
    <body>
        <?php foreach($articles as $article): ?>
            <div class="article">
                <p>Номер статьи: <?php echo $article['id']?></p>
                <h2>Заголовок статьи: <?php echo $article['name']?></h2>
                <p>Текст статьи: <?php echo $article['description']?></p>
                <p>Количество лайков: <?php echo $article['likes']?></p>
                <div class="like">
                    <a href="index.html">
                        <div class="wraper_heart">
                            <div class="heart icon"></div>
                        </div>
                        <div class="text_like">Like</div>
                        <div class="namber">
                            <?php 
                            if ($article['likes'] != 0){
                                echo $article['likes'];
                            }
                            ?>
                        </div>
                    </a>
                </div>
                <hr>
            </div>
        <?php endforeach ?>
    </body>
</html>

