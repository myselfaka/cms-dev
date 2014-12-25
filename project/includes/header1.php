<html>
<head>
<script>
var image1=new Image();
image1.src='';
var image2=new Image();
image2.src='';
</script></head>
<body>

<div id="header">
 <img  src="images/msid-21053579.jpg" style="float:left;">
 <img   src="images/news.jpg" style="float:right;">
 <script>
 var step = 1;
 function slideit(){
	 
	 if(!document.images)
	  return
	 document.images.slide.src=eval("image"+step+".src");
	 if(step<2)
	 step++;
	 else 
	 step=1;
	 setTimeout("slideit()",500); 
	 }slideit()
 </script>
 </div>
 </body>
 </html>