<?php
require "config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['title'];?></title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include "header.php"?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="articles.php?category=1">Все записи</a>
              <h3>Новейшее_в_блоге</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
  
                  <?php
                           $articles = mysqli_query($connection,"SELECT * FROM `articles`  ");
                     ?>
                  

                  <?php
                   
                    while ($art = mysqli_fetch_assoc($articles)) {
                      ?>
                      
                        <article class="article">
                    <div class="article__image" style="background-image: url(static/images/<?php echo $art['image'];?>);"></div>
                    <div class="article__info">
                      <a href="article.php?id=<?php echo $art['id'];?>"><?php echo $art['title'];?></a>
                      <div class="article__info__meta">
                       
                       
                      </div>
                      <div class="article__info__preview"><?php echo $art['text'];?></div>
                    </div>
                  </article>

                      <?php 
                    }
                          

                  ?>

            <div class="block">
              <h3>Комментарии</h3>
              <div class="block__content">
                <div class="articles articles__vertical">
                  
                   <?php
                           $comments = mysqli_query($connection,"SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 5  ");
                     ?>
                  

                  <?php
                   
                    while ($comment = mysqli_fetch_assoc($comments)) {
                      ?>
                      
                        <article class="article">
                    <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="article.php?id=<?php echo $comment['articles_id'];?>"><?php echo $comment['author'];?></a>
                      <div class="article__info__meta">
                       
                       
                      </div>
                      <div class="article__info__preview"><?php echo $comment['text'];?></div>
                    </div>
                  </article>

                      <?php 
                    }
                          

                  ?>


                  <article class="article">
                    <div class="article__image" style="background-image: url(/media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Название статьи #1</a></small>
                      </div>
                      <div class="article__info__preview">Бла бла бла бла бла бла бла, и думаю еще что бла бла бла бла бла бла бла ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

   

  </div>

</body>
</html>