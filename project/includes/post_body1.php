<div class="post_body"><?php
 include ("includes/connect.php");
 
 $query = "select * from posts order by rand() LIMIT 0,6";
 $run = mysql_query($query);
 while($row=mysql_fetch_array($run)){
	 $post_id = $row['post_id'];
	 $title = $row['post_title'];
	 $date = $row['post_date'];
	 $author = $row['post_author'];
	 $image = $row['post_image'];
	 $content = $row['post_content'];
?>
<h2><a style="text-decoration:none;" href="pages.php?id=<?php echo $post_id;?>" ><?php echo $title; ?></a></h2>
<p>Published on:&nbsp;&nbsp;<b><?php echo $date;?></b></p>
<p align="right">Posted By: &nbsp;&nbsp;<b><?php echo $author;?></b></p>
<p align="justify"><?php echo $content; ?></p>
<p align="right" class='link_red'><a href="pages.php?id=<?php echo $post_id;?>" >Read more</a></p>
<?php } ?></div>