<article>
<div class="blog_section_2">                
                <div class="row">
                    <?php foreach ($posts as $post): ?> 
                    <div class="col-sm-4">
                        <div class="section_1">
                            <a href="<?php echo BASE_URL . 'single_post.php?post-slug=' . $post['slug'] ?>">                       
                                    <div>
                                        <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" style="max-width: 100%; max-height: 200px;" alt="post_image"></div>
                                        <button type="button" class="date-bt"><?php echo date("F j, Y", strtotime($post['created_at'])); ?></button>
                                        <p style="color: rgb(39, 39, 48);"><?php echo $post['title'] ?>
                                        </p>
                    </a>
                </div>

            </div>
        <?php endforeach ?>
                  
    </div>
</div>
</article>
