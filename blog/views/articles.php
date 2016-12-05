<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <div>
                <?php foreach($articles as $a): 
                ?>
                <div class="article">
                <h3>
                    <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a> 
                </h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=$a['content']?></p>
                <?php endforeach ?>    
            </div>  
        </div>
        <footer>
        <p>Мой первый блог <br>Copyright &copy; 2015</p>
        </footer>
        </div>
    </body>
</html>  