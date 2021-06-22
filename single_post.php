<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php if (isset($_GET['post-slug'])) {
   $post = getPost($_GET['post-slug']);
}
$topics = getAllTopics();
 ?>
<?php require_once('includes/head_section.php');?>
<title> <?php echo $post['title'] ;?> | Jordan Tech Curve News</title>
<meta name="keywords" content="<?php echo $post['title'] ;?>, Tech Curve News, Jordan Mungujakisa, <?php echo $post['body'] ;?>">
<meta name="description" content="<?php echo $post['title'] ;?>, Tech Curve News, Jordan Mungujakisa, <?php echo $post['body'] ;?>">
<meta name="author" content="Jordan Mungujakisa">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- site metas -->
</head>
<!-- body -->
<body>
	<!--navbar.php-->
    <?php include('includes/navbar.php') ?> 
	
    <!--  header end -->
    <!-- Blog Start -->
    <div class="blog_main">
        <div class="container">
            <?php if ($post['published'] == false):?>
                <h2 class="post-title">​Sorry​.​.​. This post has not been published</h2>
            <?php else: ?>

            <div class="row">
                <div class="col-sm-12">
                    <h1 class="blog_text"><?php echo $post['title']; ?></h1>
                </div>
            </div>
            <hr>   

            <div style="margin: 30px; color: black;align-items: center;">
                
                    <img src="<?php echo BASE_URL.'/static/images/'
                    .$post['image']; ?>" 
                    style="max-width: 500px; margin: auto; 
                    max-height: 400px; align-items: center;" 
                    alt="<?php echo html_entity_decode($post['title']); ?>">              
                    </img>
                    <div>
                        <?php echo html_entity_decode($post['body']); ?>
                        <?php include('includes/ads_personal.php')?>
                    </div>               
               
                    

                
               
            </div>   
            <?php endif?>
        </div> 
    
    <div>
        <?php include('includes/disqus_comments.php') ?>
    </div>
        
 

    <!--blog end -->
<?php include('includes/footer.php'); ?>