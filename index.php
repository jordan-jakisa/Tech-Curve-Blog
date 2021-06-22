<?php require_once('config.php') ?>
<?php require_once(ROOT_PATH . '/includes/public_functions.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once('includes/head_section.php');?>
<!-- site metas -->
<title>Home | Jordan Tech Curve News</title>
<meta name="keywords" content="Technology, Blog, Uganda, How to, VPN, News, Jordan Mungujakisa, Home, Why, Jordan Tech Blog, Jordan Tech Curve News, Home, Hello Techies, As a Tech enthusiast, I have always taken it up as a responsibility to scour the realms for existing technologies. And i've made myself well aquainted with a number of them. I was inspired to create this blog by a number of my colleagues and friends asking me for tech related help. I was anha! why not start a blog to share all this so that whenever i create a solution, i can make it available on the blog. On here i am going to be writing technology news, product reviews and gadget tweaks to help you get the most of your tech toys. ">
<meta name="description" content="Technology Blog <?php echo $post['title'] ;?>, <?php echo $post['body'] ;?>, Brothers Karamazov">
<meta name="author" content="Jordan Mungujakisa">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<!-- body -->
<body>
	<!--navbar.php-->
    <?php include('includes/navbar.php') ?> 
   
    <!--banner start -->
    <?php include('includes/banner.php') ?>
    
    <!--services start -->
    <div class="services_main">
    	<div class="container">
    		<div class="creative_taital">
    			<h1 class="creative_text">Inspiration for Tech Curve News</h1>
                <p style="color: #050000; text-align: center;">
                Hello Techies, As a Tech enthusiast, I have always taken it up as a responsibility to scour the realms for existing technologies. And i've made myself well aquainted with a number of them. I was inspired to create this blog by a number of my colleagues and friends asking me for tech related help. I was anha! why not start a blog to share all this so that whenever i create a solution, i can make it available on the blog. On here i am going to be writing technology news, product reviews and gadget tweaks to help you get the most of your tech toys. 
                Thank you. ~ Jordan Mungujakisa </p>
    			<div class="btn_main">
                    <a href="blog.php"><button class="btn btn-dark btn-lg">Go to Blog</button></a>
    		    </div>
    		</div>
        </div>	  
    </div>
    
    <!-- Blog Start -->
    <main>
        <div class="blog_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="blog_text">Our Latest Blog Posts</h1>
                </div>
            </div>
            <?php include('includes/post_card.php'); ?>
        </div>
    </div> 

    <!--blog end -->        
    </main>
    
    

    <!--quote_section start -->
    <?php include('includes/quote.php') ?>
    <!--touch_section start -->

    

    


    <?php include('includes/contact_form.php'); ?>

    <?php include('includes/footer.php'); ?>

    
