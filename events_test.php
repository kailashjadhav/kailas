<?php
if(isset($_GET['event'])) $eid =$_GET['event'];
else $eid =$_GET['id'];

include '2k18/connect.php';
	$ename="";
	$name="";
	$logo="";
	$logo="http://aavishkargcek.com/2k18/logos/".$eid.".jpg";
	$banner="http://aavishkargcek.com/2k18/uploads/".$eid.".jpg";
	$sql= "SELECT * from info WHERE eid=".$eid;
	$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$name=$row["name"];
				}
			}

	$tagline="";
	$non_tech="";
	$day="";
	$dept="";
	$reg_fees="";
	$cpname="";
	$cpmob="";
	$maxp="";
	$note="";
	$round1="";
	$round2="";
	$round3="";
	$round4="";
	$round5="";
	$rule1="";
	$rule2="";
	$rule3="";
	$rule4="";
	$rule5="";
	$desc="";
	$sql= "SELECT * from basic_details WHERE eid=".$eid;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$ename=$row["event_name"];
			$tagline=$row['tagline'];
			$non_tech=$row['non_tech'];
			$day=$row['day'];
			$dept=$row['dept'];
			$reg_fees=$row['reg_fees'];
			$cpname=$row['cperson_name'];
			$cpmob=$row['cperson_mob'];
			$desc=$row['description'];
		}
	}

	$sql= "SELECT * from detailed_design WHERE eid=".$eid;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$maxp=$row['max_participants'];
			$note=$row['note'];
		}
	}

	$sql= "SELECT * from round WHERE eid=".$eid;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$round1=$row['round1'];
			$round2=$row['round2'];
			$round3=$row['round3'];
			$round4=$row['round4'];
			$round5=$row['round5'];
		}
	}

	$sql= "SELECT * from rules WHERE eid=".$eid;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$rule1=$row['rule1'];
			$rule2=$row['rule2'];
			$rule3=$row['rule3'];
			$rule4=$row['rule4'];	
			$rule5=$row['rule5'];	
	}
	}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AAVISHKAR 2k18 | <?php echo $ename;?></title>

<script>
//google analytics code
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-90319576-1', 'auto');
ga('send', 'pageview');
</script>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php">

<script type="text/javascript">
window._wpemojiSettings =  {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji \/72x72\/","ext":".png","source":{"concatemoji":"http:\/ \/aavishkargcek.com\/includes\/js\/wp-emoji-release.min.js? ver=4.3"}};
!function(a,b,c){function d(a){var  c=b.createElement("canvas"),d=c.getContext&&c.getContext ("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px  Arial","flag"===a?(d.fillText(String.fromCharCode (55356,56812,55356,56807),0,0),c.toDataURL().length>3e3): (d.fillText(String.fromCharCode(55357,56835),0,0),0! ==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var  c=b.createElement ("script");c.src=a,c.type="text/javascript",b.getElementsByTagName ("head")[0].appendChild(c)}var f,g;c.supports={simple:d ("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function (){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function (){c.readyCallback()},b.addEventListener?(b.addEventListener ("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)): (a.attachEvent("onload",g),b.attachEvent ("onreadystatechange",function() {"complete"===b.readyState&&c.readyCallback()})),f=c.source|| {},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e (f.twemoji),e(f.wpemoji)))} (window,document,window._wpemojiSettings);
</script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script><script src="http://aavishkargcek.com/includes/js/wp-emoji-release.min.js? ver=4.3" type="text/javascript"></script>

<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="zerif_font-css" href="http://fonts.googleapis.com/css?family=Lato %3A300%2C400%2C700%2C400italic%7CMontserrat%3A700%7CHomemade +Apple&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
<link rel="stylesheet" id="zerif_font_all-css" href="http://fonts.googleapis.com/css?family=Open+Sans %3A400%2C300%2C300italic%2C400italic%2C600italic %2C600%2C700%2C700italic%2C800%2C800italic&amp;ver=4.3" type="text/css" media="all">
<link rel="stylesheet" id="zerif_bootstrap_style-css" href="content/themes/mytheme/mytheme/css/bootstrapd7b7.css?ver=4.3" type="text/css" media="all">
<link rel="stylesheet" id="zerif_fontawesome-css" href="content/themes/mytheme/mytheme/css/font-awesome.mind3b3.css? ver=v1" type="text/css" media="all">
<link rel="stylesheet" id="zerif_pixeden_style-css" href="content/themes/mytheme/mytheme/css/pixeden-iconsd3b3.css? ver=v1" type="text/css" media="all">
<link rel="stylesheet" id="zerif_style-css" href="content/themes/mytheme/mytheme/styled3b3.css?ver=v1" type="text/css" media="all">
<link rel="stylesheet" id="zerif_responsive_style-css" href="content/themes/mytheme/mytheme/css/responsived3b3.css?ver=v1" type="text/css" media="all">

<script type="text/javascript" src="includes/js/jquery/jqueryc1d8.js?ver=1.11.3"></script>
<script type="text/javascript" src="includes/js/jquery/jquery- migrate.min1576.js?ver=1.2.1"></script>

<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="includes/wlwmanifest.xml"> 
<link rel="icon" href="content/uploads/2015/09/cropped-index-32x32.png" sizes="32x32">
<meta name="generator" content="AAVISHKAR">
<style type="text/css">.recentcomments a{display:inline ! important;padding:0 !important;margin:0 !important;}</style>
</head>

<body class="home blog custom-background">
	<div class="preloader" style="display: none;">
		<div class="status" style="display: none;">&nbsp;</div>
	</div>

<header id="home" class="header" style="min-height: 76px;">
	<div id="main-nav" class="navbar navbar-inverse bs-docs-nav fixed" role="banner" style="min-height: 76px;">
		<div class="container">
			<div class="navbar-header responsive-logo">
				<a href="index.html" class="navbar-brand"><img src="content/themes/mytheme/mytheme/images/logo.png" alt="AAVISHKAR"></a>
					<div style="top:15px;margin-left:65px; position:absolute">
						<a href="index.html" class="navbar-brand"><img src="content/themes/mytheme/mytheme/images/logo2.png" width="90px" alt="AAVISHKAR"></a>
					</div>
					<div style="top:5px;margin-left:500px; position:absolute;">
			
						<a class="navbar-brand"><font color="black"><Strong style="font-size:25px;"><?php echo $ename;?></strong></font></a>
			
					</div>
					<div style="margin-left:1105px; position:absolute">
						<a href="" class="navbar-brand"><img src="<?php echo $logo; ?>" width="70px" alt="<?php echo $ename;?>"></a>
					</div>
			</div>
		</div>
	</div>
</header>

<img src="<?php echo $banner;?>" style="width:100%;" alt="AAVISHKAR">
<script src="content/themes/mytheme/mytheme/js/TweenLite.min.js"></script>
<script src="content/themes/mytheme/mytheme/js/EasePack.min.js"></script>
<script src="content/themes/mytheme/mytheme/js/demo-1.js"></script>

<div id="content" class="site-content">
<section class="about-us" id="aboutus">
	<div class="container">
			<div class="section-header">
				<h2 class="white-text">About <?php echo $ename;?></h2>
				<h6 class="white-text"><?php echo $tagline; ?></h6>
				<br><br>
				<center>
					 <p width="60%" style="text-align: center;font-size: 20px;font-family: -webkit-pictograph;line-height: 27px;width: 75%;color: white;" > 
						<?php echo $desc;?>
					</p> 
				</center>
			</div>

	<div class="row">
	<div class="col-md-12">
	<div id="client-feedbacks" class="owl-carousel owl-theme">
	<div class="widget zerif_testim">
		<div class="feedback-box" data-scrollreveal="enter left after 0.2s over 1s">
			<div class="message">
				<div style="text-align: center;">
				<font><strong>Rounds</strong></font></div>
				 <?php 
					if($round1!=="")
					{
						echo "$round1<br>";
					}
	/*				if($round2!=="")
					{
						echo "2. $round2<br>";
					}
					if($round3!=="")
					{
						echo "3. $round3<br>";
					}
					if($round4!=="")
					{
						echo "4. $round4<br>";
					}
					if($round5!=="")
					{
						echo "5. $round5";
					}
	*/
				 ?>
			</div>
		</div>
	</div>
	<div class="widget zerif_testim">
	<div class="feedback-box" data-scrollreveal="enter right after 0.2s over 1s">
		<div class="message">
			<font><strong>Presented by </strong></font>Department of <?php echo $dept;?>
			<br>
			<?php 
			if($day=="1")
			{
				echo "Day One Event";
			}
			if($day=="2")
			{
				echo "Day Two Event";
			}
			?>
			
			<br>
			<?php 
			if($day=="1")
			{
				echo "On 21 Feb 2018";
			}
			if($day=="2")
			{
				echo "On 22 Feb 2018";
			}
			?>
			<br>
			<?php
			if($non_tech=="yes")
			{
				echo "It's a Non Technical Event";
			}
			if($non_tech=="no")
			{
				echo "It's a Technical Event";
			}
			?>
			<br>Maximum <?php echo $maxp;?> person can participate in a team
			<br>Registration fee is Rs. <?php echo $reg_fees;?> per team	
			<br>
			<p style="color:red;">
			<?php
				if($note!="")
				{
					echo "Note: ".$note;
				}
			?>
			</p>
		</div>
	</div>
	</div>
	<div class="widget zerif_testim">
	<div class="feedback-box" data-scrollreveal="enter left after 0.2s over 1s">
		<div class="message">
			<div style="text-align: center;"><font><strong>Rules/Details</strong></font></div>
					<?php echo $rule1;?>
			</div>
	</div>
	</div>
	
	</div>
	</div>
	</div>
	
</section>

<section class="our-team" id="team">
	<div class="container">
		<div class="section-header">
			<h2 class="dark-text">THE TEAM</h2>
			<h6>Meet the people that made it all happen.</h6>
		</div>
		<div class="row">
	
			<?php
				$sql= "SELECT * from team WHERE eid='".$eid."'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$fname=$row['fname'];
					$lname=$row['lname'];
					$role=$row['role'];
					$mob=$row['mob'];
					$email=$row['email'];
					$flink=$row['flink'];
					$llink=$row['llink'];
					if(!empty($fname) && !empty($role))
					{						
							$pic= "";
							if(file_exists("2k18/team/pics/".trim(strtoupper($fname),' ')."_".trim(strtoupper($lname),' ').".jpg"))
							{
								$pic = "2k18/team/pics/".trim(strtoupper($fname),' ')."_".trim(strtoupper($lname),' ').".jpg";
								
							}		
							else if(file_exists("2k18/team/pics/".trim(strtoupper($fname),' ')."_".trim(strtoupper($lname),' ').".jpeg"))
							{
								$pic = "2k18/team/pics/".trim(strtoupper($fname),' ')."_".trim(strtoupper($lname),' ').".jpeg";
								
							}else{
								$pic = "content/themes/mytheme/mytheme/images/no1.jpg";
							}		
			?>
				<div class="col-lg-3 col-sm-3 team-box" data-scrollreveal="enter left after 0.2s over 1s">
					<div class="team-member">
						<figure class="profile-pic">
							<img src="<?php echo $pic;?>" alt="">
						</figure>
						<div class="member-details">
							<h5 class="dark-text red-border-bottom"><?php echo $fname." ".$lname?></h5>
							<div class="position"><?php echo $role;?></div>
						</div>
						<div class="social-icons">
							<ul>
									<li><a href="tel:+91<?php echo $mob;?>" title="+91<?php echo $mob;?>"><i class="fa fa-mobile-phone"></i></a></li>
									<li><a href="mailto:<?php echo $email;?>" title="<?php echo $email;?>"><i class="fa fa-envelope-o"></i></a></li>
									<?php
										 if(!empty($flink))
										 {
											 echo '<li><a href="'.$flink.'"><i class="fa fa-facebook"></i></a></li>';                        
										 }
										 else
										 {
											 echo '<li><a ><i class="fa fa-facebook"></i></a></li>';                        
										 }
											//echo '<li><a ><i class="fa fa-google-plus-square"></i></a></li>';
											
										 if(!empty($llink))
										 {
											echo '<li><a href="'.$llink.'"><i class="fa fa-linkedin"></i></a></li>';
										 }
										 else
										 {
											 echo '<li><a ><i class="fa fa-linkedin"></i></a></li>';
										 }
									?>
							</ul>
						</div>
					</div>
				</div>
			<?php
				}
			  }
			}
			?>
			
		</div>
	</div>
</section>
		
</div>
<!-- End of site-content -->

<footer id="footer">
		<div class="container">
			<div class="col-md-3 copyright">
				<div class="zerif-copyright-box">
					<a class="aavishkar-copyright" target="_blank" rel="nofollow">Designed with Love &amp; Care<br></a>
					<a class="aavishkar-copyright" href="http://aavishkargcek.com/" target="_blank" rel="nofollow">TEAM AAVISHKAR 2k18</a>
				</div>
			</div>
		</div>
</footer>
 <!-- / END FOOOTER  -->
 
<script type="text/javascript" src="content/themes/mytheme/mytheme/js/bootstrap.min11a8.js? ver=20120206"></script>
<script type="text/javascript" src="content/themes/mytheme/mytheme/js/jquery.knob11a8.js? ver=20120206"></script>
<script type="text/javascript" src="content/themes/mytheme/mytheme/js/smoothscroll11a8.js? ver=20120206"></script>
<script type="text/javascript" src="content/themes/mytheme/mytheme/js/scrollReveal11a8.js? ver=20120206"></script>
<script type="text/javascript" src="content/themes/mytheme/mytheme/js/zerif11a8.js? ver=20120206"></script>

</body></html>