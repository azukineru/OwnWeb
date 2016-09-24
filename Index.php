<html>

<head>
	<title>My Very Own Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/animation.css" type="text/css" media="screen"/>
	<script src="js/pace.min.js"></script>
	
</head>

<body>

	<div id="main_image" style="width: 600; height: 300; border:1px solid black; margin-left: 300px; margin-top: 80px; position: absolute; z-index:-5;">

	</div>

	<div id="main_menu_container" style="width: 400; height: 400; border:1px solid black; margin-left: 735px; margin-top: 75px; padding: 5px; position: absolute; z-index: 10">
		<a id="menu01" href="#modal-01">
		<div class="menu animated bounceInLeft hvr-shadow-radial" id="menu1">
			<span><b>Home</b></span>
		</div>
		</a>
		<a id="menu02" href="#modal-02">
		<div class="menu animated bounceInLeft hvr-shadow-radial" id="menu2">
			<span><b>Gallery</b></span>
		</div>
		</a>
		<a href="#">
		<div class="menu animated bounceInLeft hvr-shadow-radial" id="menu3">
			<span><b>About</b></span>
		</div>
		</a>
	</div>

	<div id="main_menu_shadow" style="width: 400; height: 400; border:1px solid black; margin-left: 740px; margin-top: 80px; padding: 5px; position: absolute; z-index: 9">
		<a href="#">
		<div class="menu_shadow animated bounceInLeft" id="menu1">
			<span><b>Home</b></span>
		</div>
		</a>
		<a href="#">
		<div class="menu_shadow animated bounceInLeft" id="menu2">
			<span><b>Gallery</b></span>
		</div>
		</a>
		<a href="#">
		<div class="menu_shadow animated bounceInLeft" id="menu3">
			<span><b>About</b></span>
		</div>
		</a>

		
	</div>

	<!--menu01-->
        <div id="modal-01">           
            <div id="btn-close-modal" class="close-modal-01"> 
                <a href="#"><img src="img/close.png" style="width: 50px; height:50px; float:right; margin-top :20px; margin-right:20px; "></a>
            </div>
            
            <div class="modal-content">            	
                <div id="subcontent1">
                	<h3>Archive List</h3>
                </div>
                <div id="subcontent2">
                	<h3>First Post ( Hello World ! )</h3>                	
                	<div class="date-post">Thursday,22 September 2016</div>
                	<br>
                	<p>
                	Yahoo~ this is my first post. I would like to introduce you about my website. Basically I will use my website to post
                	things like news or review about anime/manga/visual novel. Since I like those kind of things, I will post a lot of things
                	about it. Beside that, I'm also going to post about my drawing or my artwork. You know.. drawing is also one my hobbies, so yeah...
                	I'll do my best. You can check Gallery menu if you want to see all my drawings.
                	Alright.. I guess that's all for my introduction post, please look forward to it. Thank you...
					</p>
                </div>
            </div>
        </div>

    <!--menu02-->
        <div id="modal-02">           
            <div id="btn-close-modal" class="close-modal-02"> 
                <a href="#"><img src="img/close.png" style="width: 50px; height:50px; float:right; margin-top :20px; margin-right:20px; "></a>
            </div>
            
            <div class="modal-content">            	
                <div style="height:400px;background-color: white; padding-top: 50px; padding-left: 20px; padding-right: 20px; padding-bottom: 20px;">
                	<div id="image-container">
                		<div class="sub-image"><img src="img/1.jpg" onclick="showImage(this.src, 'img/1.jpg');" /></div>
                		<div class="sub-image"></div>
                		<div class="sub-image"></div>
                		<div class="sub-image"></div>

                		<div class="sub-image"></div>
                		<div class="sub-image"></div>
                		<div class="sub-image"></div>
                		<div class="sub-image"></div>

                		<div class="animated bounceInLeft" id="largeImgPanel" onclick="this.style.display='none'">
            			<img id="largeImg"
                 			style="height:100%; margin:0; padding:0;" />
        				</div>
                	</div>                	
                </div>
            </div>
        </div>

	<script src="js/jquery.min.js"></script>
  	<script src="js/animatedModal.js"></script>
  	<script src="js/gallery.js"></script>

  	<script>
  		$("#menu01").animatedModal({
            modalTarget:'modal-01',
            animatedIn:'bounceInDown',
            animatedOut:'bounceOutUp',
            color:'#3498db',
        });
        $("#menu02").animatedModal({
            modalTarget:'modal-02',
            animatedIn:'bounceInDown',
            animatedOut:'bounceOutUp',
            color:'#3498db',
        });
	</script>

</body>

</html>