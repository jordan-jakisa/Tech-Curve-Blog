<?php 

function getPublishedPosts(){
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']);
		array_push($final_posts, $post);
	}
	return $final_posts;
}
function getPostTopic($post_id){
	global $conn;
	$sql = "SELECT * FROM topics WHERE id=(SELECT topic_id FROM post_topic WHERE post_id=$post_id) LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic;
}
function getPost($slug){
	global $conn;
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($conn, $sql);
	$post = mysqli_fetch_assoc($result);
	if ($post){
		$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}
function getAllTopics(){
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}
 
?>
