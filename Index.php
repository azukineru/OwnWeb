<html>

<head>
	<title>My Very Own Website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="css/animation.css" type="text/css" media="screen"/>
	<script src="js/pace.min.js"></script>
	
</head>

<body>

	<img src="img/bg_line.png" style="width:100%;z-index:2; position:absolute; top:0; left:0;">

	<div id="main_image" style="width: 600; height: 300;margin-left: 100px; margin-top: 0px; position: absolute; z-index:-5;">
		<img class="animated bounceInDown" id="second" src="img/main_img.png" />
	</div>

	<div id="main_menu_container" style="width: 400; height: 400; margin-left: 735px; margin-top: 75px; padding: 5px; position: absolute; z-index: 10">
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
		<a id="menu03" href="#modal-03">
		<div class="menu animated bounceInLeft hvr-shadow-radial" id="menu3">
			<span><b>About Me</b></span>
		</div>
		</a>
	</div>

	<div id="main_menu_shadow" style="width: 400; height: 400; margin-left: 738px; margin-top: 80px; padding: 5px; position: absolute; z-index: 9">
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
			<span><b>About Me</b></span>
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

    <!--menu03-->
        <div id="modal-03">           
            <div id="btn-close-modal" class="close-modal-03"> 
                <a href="#"><img src="img/close.png" style="width: 50px; height:50px; float:right; margin-top :20px; margin-right:20px; "></a>
            </div>
            
            <div class="modal-content">            	
                <div style="margin-top:30px;width: 25%; height: auto; float:left;">
                	<a onclick="smoothScroll(document.getElementById('summary_section'))"><div class="menu menu_about"><span><b>Summary</b></span></div></a>
                	<a onclick="smoothScroll(document.getElementById('skills_section'))"><div class="menu menu_about"><span><b>Skills</b></span></div></a>
                	<a onclick="smoothScroll(document.getElementById('education_section'))"><div class="menu menu_about"><span><b>Education</b></span></div></a>
                	<a onclick="smoothScroll(document.getElementById('projectlist_section'))"><div class="menu menu_about"><span><b>Project List</b></span></div></a>
                	<a onclick="smoothScroll(document.getElementById('organization_section'))"><div class="menu menu_about"><span><b>Organization History</b></span></div></a>
                </div>

                <div style="width:20%; height:100px; float:left; margin-top:-75px; margin-left:-270px;">
                	<h1>About Me</h1>                	
                </div>

                <div id="subcontent3">
                	<div class="summary_section" id="summary_section" style="height:auto; margin-top:10px; border:1px solid #fff">
                		<u><h3>Summary</h3></u>
                		<p>
                			<u>Innovative IT enthusiast</u>, offering knowledge in software development and software engineering. 
                			Utilizes highly attuned analytical skills to develop IT. Also likes to create and design things. Highly organized with strong capacity to prioritize workload, 
                			quickly learn new things, delegate deliverables, and steer project completion within established deadlines.                			
                			<br><br>
                			Name : Faishal Azka Jellyanto<br>
                			Place & Date of Birth : Blitar, 18 September 1993<br>
                			Address : Perumahan Wisma Indah G.43 Jl. Abimanyu no. 8, Blitar, East Java, Indonesia<br>
                			Gender : Male<br>
                			Phone Number : +6282333700666<br>
                			Email : azukineru@gmail.com<br>
                			Website : www.hikarinmoe.com<br>
                		</p>
                	</div>

                	<div class="skills_section" id="skills_section" style="height:auto; margin-top:10px; border:1px solid #fff">
                		<u><h3>Skills</h3></u>
                		<p>
                			Development/ Environment Tools/ Techniques: Android Studio, Eclipse, Sublime Text, Unity 3D, CodeBlocks<br>
                			Operating Systems: Windows 7, Windows 8.1<br>
                			Programming Languages: PHP, JavaScript, C, C++, C#, Java<br>
                			Databases: MySQL, PostgreSQL<br>
                			Other Skills: HTML5, CSS3, Adobe Photoshop, Corel Draw, Blender<br>
                		</p>
                	</div>

                	<div class="education_section" id="education_section" style="height:auto; margin-top:10px; border:1px solid #fff">
                		<u><h3>Education</h3></u>
                		<p>
                			<h3>Bachelor in Informatics</h3>
                			2012-2016<br>
                			Institut Teknologi Sepuluh Nopember Surabaya<br>
                			Focused in Interaction, Graphic, and Art subject<br>
							also study in Software Engineering, Net Centric Computation, and Artificial Intelligence subject.<br>
							GPA 3.46<br>
                		</p>
                	</div>

                	<div class="projectlist_section" id="projectlist_section" style="height:auto; margin-top:10px; border:1px solid #fff">
                		<u><h3>Project List</h3></u>
                		<p>
							<ul>
								<li>Hotel Information System</li>
								December 2013<br>
								Hotel Information System that used to provide services about checking room availability, booking room, etc. This is Final Project in Database Subject, and were made using PHP.
								<br>
								<li>Kendo Club Information System</li>
								February 2015<br>
								https://github.com/ardhinata/MPPL_SI_Kendo<br>
								Kendo Club Information System is used to maintain Kendo Club member, add club news, and maintain club gallery. This project were made using PHP.
								<br>
								<li>Secure Chat</li>
								April 2015<br>
								https://github.com/IssenShiro/KIJ/tree/master/Tugas_1_SecureChat<br>
								Dekstop based application for sending message with AES Encryption and Diffie-Helman Scheme in C++ using Qt Framework.
								<br>
								<li>Web Based Certificate Authority</li>
								May 2015<br>
								https://github.com/IssenShiro/KIJ/tree/master/Tugas_2_DigitalCertificate<br>
								College project to create Web based Certificate Authority. Made using Nodejs.
								<br>
								<li>Codeloud</li>
								May 2015<br>
								https://github.com/karstenaa/CodeLoud-Frontend<br>
								Cloud Computing Final Project which provides Platform as a Service (PaaS) to maintain, develop, and execute code in git repository.
								<br>
								<li>Last Man Standing</li>
								June 2016<br>
								https://www.youtube.com/watch?v=gDAVWtUitlY<br>
								Final Project of Game Development subject. It is a game about shooting zombies with various features.
								<br>
								<li>Mine Meander</li>
								July 2016<br>
								https://github.com/azukineru/MM-Android<br>
								https://play.google.com/store/apps/details?id=com.minemeander<br>
								Undergraduate theses project. It is 2D Platformer Game with Dynamic World Generator feature. Made using Java/LibGDX.
								<br>
							</ul>
                		</p>
                	</div>

                	<div class="organization_section" id="organization_section" style="height:auto; margin-top:10px; border:1px solid #fff">
                		<u><h3>Organization History</h3></u>
                		<p>
                			<h3>ITS Foreign Language Society</h3>
                			July 2012-June 2013<br>
                			Staff at Japanese Language Department<br>
                			ITS Foreign Language Society is ITS Club that mainly used to improve students language skill. It is divided into English Department and Japanese Department. This club also manage and maintain any event related to languages and cultures.
							<br>

							<h3>Himpunan Mahasiswa Teknik-Computer Informatika ITS (HMTC ITS)</h3>
                			July 2013-June 2014<br>
                			Staff at Information Media Department<br>
                			Manage all news and media inside the organization. Also hold any event related to journalistic and information media.
							<br>

							<h3>Schematics ITS 2013</h3>
                			September 2013-October 2013<br>
                			Staff at Security and Licensing Division<br>
                			Event held by Himpunan Mahasiswa Teknik Computer-Informatika (HMTC) ITS.<br>
							Includes 4 main events:<br>
							-National Logic Competition (NLC)<br>
							-National Programming Contest (NPC)<br>
							-National Seminar of Technology (NST)<br>
							-Revolutionary Entertainment and Expo with Various Art (REEVA)
							<br>
                		</p>
                	</div>

                </div>
            </div>
        </div>


	<script src="js/jquery.min.js"></script>
  	<script src="js/animatedModal.js"></script>
  	<script src="js/gallery.js"></script>
  	<script src="js/about_page.js"></script>

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
        $("#menu03").animatedModal({
            modalTarget:'modal-03',
            animatedIn:'bounceInDown',
            animatedOut:'bounceOutUp',
            color:'#3498db',
        });
	</script>

</body>

</html>