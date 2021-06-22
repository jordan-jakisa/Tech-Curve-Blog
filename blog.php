<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once('includes/head_section.php');?>
<!-- site metas -->
<title>Blog | Jordan Tech Blog</title>
<meta name="keywords" content="How to Apply to the Machine Learning for Earth Observation Bootcamp by Makerere University, Radiant Earth and Giz, Technology, Blog, Uganda, How to, VPN, News, Jordan Mungujakisa, Home, Why, Jordan Tech Blog, Jordan Tech Curve News">
<meta name="description" content="Technology Blog">
<meta name="author" content="Jordan Mungujakisa">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- body -->
<body>
    <!--navbar.php-->
    <?php include('includes/navbar.php') ?>        
	
	</div>
    <main>
        <!-- Blog Start -->
    <div class="blog_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="blog_text">Our Blog Posts</h1>
                </div>
            </div>
            <article>
                <?php include('includes/post_card.php'); ?>                
            </article>
        
        </div>
    </div> 

    <!--blog end -->
        
    </main>
	
    
    <!--touch_section end -->

    <?php include('includes/footer.php'); ?>