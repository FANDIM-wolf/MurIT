<?php
require "config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Блог IT_Минималиста!</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div id="wrapper">

     <?php include "header.php"?>

    <?php 
      
       $article=mysqli_query($connection,"SELECT * FROM  `articles` WHERE id =  "  .(int) $_GET['id']);
      
       if(mysqli_num_rows($article) <= 0){
        ?>
            
      <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              
              <h3>NO ARTICLE</h3>
              <div class="block__content">
                <img src="/media/images/post-image.jpg">

                <div class="full-text">
                </div>
              </div>
            </div>

        <?php
       }
       else{
        $art = mysqli_fetch_assoc($article)
        ?>

         <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              
              <h3><?php echo $art['title'];?></h3>
              <div class="block__content">
               <img src="static/images/<?php echo $art['image']; ?>" width=550 height=400>
                <div class="full-text">
                     <?php echo $art['text'];?>

                </div>
              </div>
            </div>
         <?php 
       }
    ?>


  







            <div class="block">
              <a href="#comment-add-form">Добавить свой</a>
              <h3>Комментарии к статье</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Артём aka Snake</a>
                      <div class="article__info__meta">
                        <small>10 минут назад</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Виталий aka Umka</a>
                      <div class="article__info__meta">
                        <small>7 дней назад</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=125);"></div>
                    <div class="article__info">
                      <a href="#">Олег aka SnakeEye</a>
                      <div class="article__info__meta">
                        <small>1.1.1970</small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block" id="comment-add-form">
              <h3>Добавить комментарий</h3>
              <div class="block__content">
                <form class="form">
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="name" placeholder="Имя">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form__control" required="" name="nickname" placeholder="Никнейм">
                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" required="" class="form__control" placeholder="Текст комментария ..."></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
                  </div>
                </form>
              </div>
            </div>
          </section>
          <section class="content__right col-md-4">
           
            

    

  

  </div>

</body>
</html>