<div class="container">

    <div class="row">
    <!-- Contenedor Principal -->
    <div class="comments-container">
       

        <ul id="comments-list" class="comments-list">
            <li>
                <div class="comment-main-level">
                    <!-- Avatar -->
                    <div class="comment-avatar"></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="http://creaticode.com/blog"><?php echo $topicResult->Title ?></a></h6>
                            <span><?php echo dateDiff($topicResult->CreatedDate) ?></span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            <?php echo $topicResult->Content ?>
                        </div>
                    </div>
                </div>
                <!-- Respuestas de los comentarios -->
                <ul class="comments-list reply-list">

                    <?php 

                        foreach ($getAnswers as $key => $value) {
                            
                            echo '<li>
                                    <div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name"><a href="http://creaticode.com/blog">Lorena Rojero</a></h6>
                                            <span>'.dateDiff($value->CreatedDate).'</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                           '.$value->Content.'
                                        </div>
                                    </div>
                                </li>';

                        }

                    ?>
                  

                    
                </ul>
            </li>

          
        </ul>
    </div>
    </div>
</div>