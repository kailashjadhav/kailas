<?php
$did=$_GET['did'];
$event = "";
if($did==1)
{
	$dept="Information Technology";
	$event="Information Technology";
}
else if($did==2){
	$event="MCA";
	$dept = "Master of Computer Application";
}
else if($did==3){
	$event="Civil";
	$dept="Civil Engineering";
}
else if($did==4){
	$event="Mechanical";
	$dept="Mechanical Engineering";
}
else if($did==5){
	$event="Elecrtical";
	$dept ="Electrical Engineering";
}
else if($did==6){
	$event="ENTC";
	$dept="Electronics and Telecommunication";
}
else if($did==7){
	$event="Non-Technical";
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">	
<html lang="en-US">
<head>
 <!--
<script type="text/javascript">

  if (screen.width <= 1080) {
    document.location = "/mobile/index.html";
  }
</script>
-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAVISHKAR 2k18 | A National Level Technical Symposium</title>
<link rel="stylesheet" type="text/css" href="http://aavishkargcek.com/content/themes/mytheme/mytheme/css/component.css" />
<link rel="stylesheet" type="text/css" href="http://aavishkargcek.com/content/themes/mytheme/mytheme/css/w3.css" />
<script src="http://aavishkargcek.com/clock_assets/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://aavishkargcek.com/content/themes/mytheme/mytheme/css/w3.css" />
		<link href="http://aavishkargcek.com/style.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="http://aavishkargcek.com/clock_assets/flipclock.css" />

<link rel='stylesheet' id='zerif_bootstrap_style-css'  href='http://aavishkargcek.com/content/themes/mytheme/mytheme/css/bootstrapd7b7.css?ver=4.3' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_fontawesome-css'  href='http://aavishkargcek.com/content/themes/mytheme/mytheme/css/font-awesome.mind3b3.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_pixeden_style-css'  href='http://aavishkargcek.com/content/themes/mytheme/mytheme/css/pixeden-iconsd3b3.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_style-css'  href='http://aavishkargcek.com/content/themes/mytheme/mytheme/styled3b3.css?ver=v1' type='text/css' media='all' />
<link rel='stylesheet' id='zerif_responsive_style-css'  href='http://aavishkargcek.com/content/themes/mytheme/mytheme/css/responsived3b3.css?ver=v1' type='text/css' media='all' />
<meta name="generator" content="AAVISHKAR" />
<style type="text/css" id="custom-background-css">
body.custom-background { background-image: url('content/themes/mytheme/mytheme/images/bg.jpg'); background-repeat: repeat; background-position: top left; background-attachment: scroll; }
</style>
<link rel="icon" href="http://aavishkargcek.com/content/uploads/2015/09/cropped-index-32x32.png" sizes="32x32" />

<!--style to scroll downn effect-->
<style>
/*
 * card
*/

.card{
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
  max-width: 480px;
  background-color: #fff;
}

.card__header{
  position: relative;
}

.card__header:before{
  content: "";
  width: 100%;
  height: 100%;
  background-image: linear-gradient(to bottom, transparent 30%, rgba(0, 0, 0, .6) 70%, rgba(0, 0, 0, .7));

  position: absolute;
  left: 0;
  bottom: 0;
}

.card__title{
  font-size: 2.2rem;
  font-weight: 400;
  color: #fff;
  text-transform: uppercase;
  line-height: 1.5;

  padding-left: 2rem;
  padding-right: 2rem; 
  margin-top: 0;
  margin-bottom: 0;

  position: absolute;
  bottom: 2rem;
  left: 0;
}

.card__link{
  color: inherit;
  text-decoration: none;
}

.card__preview{
  max-width: 100%;
  display: block;
}

.card__body{
  padding: 3rem 2.5rem 2rem;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  flex-grow: 2;
}

.card__content{
  flex-grow: 2;
}

.card__footer{
  font-size: 1.4rem;
  border-top: 1px solid #f0f0f0;
  margin-top: 3rem;
  padding-top: 2rem;

  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}

.card__readmore{
  text-transform: uppercase;
  color: #512da8;
}

.card__meta{
  flex: none;
  display: flex;
  align-items: center;
}

.card__meta-label{
  display: inline-block;
  padding-left: 2.2rem;

  background-repeat: no-repeat;
  background-size: 1.6rem;
  background-position: 1% center;
}

.card__meta-label:not(:first-child){
  margin-left: 1.5rem;
}

.card__meta-comments{
  background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjEyMTIxIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTIxLjk5IDRjMC0xLjEtLjg5LTItMS45OS0ySDRjLTEuMSAwLTIgLjktMiAydjEyYzAgMS4xLjkgMiAyIDJoMTRsNCA0LS4wMS0xOHpNMTggMTRINnYtMmgxMnYyem0wLTNINlY5aDEydjJ6bTAtM0g2VjZoMTJ2MnoiLz4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==);
  background-position: 1% 75%;
}

.card__meta-likes{
  background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMjEyMTIxIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPiAgICA8cGF0aCBkPSJNMTIgMjEuMzVsLTEuNDUtMS4zMkM1LjQgMTUuMzYgMiAxMi4yOCAyIDguNSAyIDUuNDIgNC40MiAzIDcuNSAzYzEuNzQgMCAzLjQxLjgxIDQuNSAyLjA5QzEzLjA5IDMuODEgMTQuNzYgMyAxNi41IDMgMTkuNTggMyAyMiA1LjQyIDIyIDguNWMwIDMuNzgtMy40IDYuODYtOC41NSAxMS41NEwxMiAyMS4zNXoiLz48L3N2Zz4=);
}

/* popup */

.popup{
  width: 100%;
  height: 100vh;
  display: none;

  position: fixed;
  top: 0;
  right: 0;
}

#popup-article:target{
  display: block;
}

.popup__block{
  height: calc(100vh - 40px);
  padding: 5% 15%;
  box-sizing: border-box;
  
  margin-top: 20px;
  overflow: auto;
  animation: fade .5s ease-out 1.3s both;
}

.popup:before{
  content: "";
  box-sizing: border-box;
  width: 100%;
  
  box-shadow: inset 0 0 0 20px #f0f0f0;
  background: #fff;

  position: fixed;
  top: 50%;
  will-change: height, top;
  animation: open-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) .65s both;
}

.popup:after{
  content: "";
  width: 0;
  height: 2px;
  background-color: #f0f0f0;
  
  will-change: width, opacity;
  animation: line-animation .6s cubic-bezier(0.83, 0.04, 0, 1.16) both;

  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -1px;
}

@keyframes line-animation{

  0%{
    width: 0;
    opacity: 1;
  }

  99%{
    width: 100%;
    opacity: 1;
  }

  100%{
    width: 100%;
    opacity: 0;
  }  
}

@keyframes open-animation{

  0%{
    height: 0;
    top: 50%;
  }

  100%{
    height: 100vh;
    top: 0;
  }
}

@keyframes fade{

  0%{
    opacity: 0;
  }

  100%{
    opacity: 1;
  }
}

.popup__title{
  margin: 0 0 1em;
}

.popup__close{
  width: 3.2rem;
  height: 3.2rem;
  text-indent: -9999px;
  position: absolute;
  
  background-repeat: no-repeat;
  background-position: center center;
  background-size: contain;
  background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSIjMDAwMDAwIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4gICAgPHBhdGggZD0iTTE5IDYuNDFMMTcuNTkgNSAxMiAxMC41OSA2LjQxIDUgNSA2LjQxIDEwLjU5IDEyIDUgMTcuNTkgNi40MSAxOSAxMiAxMy40MSAxNy41OSAxOSAxOSAxNy41OSAxMy40MSAxMnoiLz4gICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjwvc3ZnPg==);
}

.popup__media{
  margin-bottom: 2rem;
}

@media screen and (min-width: 641px){

  .popup__title{
    font-size: 3.8rem;
  }

  .popup__close{
    top: 40px;
    right: 40px;
  }
  
  .popup__media{
    max-width: 35%;
  }

  .popup__media_left{
    float: left;
    margin-right: 3rem;
  }

  .popup__media_right{
    float: right;
    margin-left: 3rem;
  }  
}

@media screen and (max-width: 640px){

  .popup__title{
    font-size: 2.2rem;
  }

  .popup__close{
    top: 20px;
    right: 20px;
  }
}

/*
* demo page
*/

@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 50%;
  }
}

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  font-size: 1.6rem;
  color: #222;
  background-color: #512da8;
  
  margin: 0;
  -webkit-overflow-scrolling: touch;   
  overflow-y: scroll;
}

p{
  margin: 0;
  line-height: 1.5;
}

p:not(:last-child){
  margin-bottom: 1.5rem;
}

img{
  display :block;
  max-width: 100%;
}

a{
  text-decoration: none;
  color: #039be5;
}

.page{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.page__demo{
  flex-grow: 1;
  display: flex;
}

.main-container{
  max-width: 1200px;
  padding-left: 1rem;
  padding-right: 1rem;

  margin-left: auto;
  margin-right: auto;
}

.page__container{
  margin: auto;
}

.footer{
  padding-top: 1rem;
  padding-bottom: 1rem;
  text-align: center;  
  font-size: 1.4rem;
}

.footer__link{
  color: #fff;
}

@media screen and (min-width: 361px){

  .footer__container{
    display: flex;
    justify-content: space-between;
  }
}

@media screen and (max-width: 360px){

  .melnik909{
    display: none;
  } 
}
#tnav {
  background-color: #333;
  position: fixed;
  top: -64px;
  width: 100%;
  display:block;
  transition: top 0.3s;
  z-index:999;
}

#tnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#tnav a:hover {
  background-color: green;
  color: black;
}
</style>
</head>

<body class="home blog custom-background" id="body">
<!-- Code to disable right click-->
<script type="text/javascript">
$(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
    });
    
    //Disable part of page
    //$("#id").on("contextmenu",function(e){
      //  return false;
    //});
});


</script>

<div class="preloader">
	<div>
		<div class="cssload-preloader">
			<div class="cssload-preloader-box">
			Loading......
			</div>
		</div>
	</div>
</div>




 
<body>
<script>
// When the user scrolls down from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("tnav").style.top = "0";
    } else {
        document.getElementById("tnav").style.top = "-64px";
    }
}

function smallscr() {
	
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<div class="demo-1">	

</div>
<div id="popup-article" class="popup">
  <div class="popup__block">
    <h1 class="popup__title">The my adventure in the France and photography with Tour De France</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eaque optio vitae in explicabo recusandae sit id sapiente excepturi tempore, nemo, nulla odio deleniti rerum nisi perferendis aut molestias! Incidunt nesciunt iusto praesentium! In at maiores quibusdam enim quis, quam!</p>
    <img src="https://static.pexels.com/photos/172484/pexels-photo-172484.jpeg" class="popup__media popup__media_right" alt="The foto of nature">
    <p>Architecto magni dolores cumque tenetur nemo id aperiam, ratione temporibus at, consectetur totam, fuga et illo rerum earum dicta. Vitae ullam harum enim aliquid hic commodi voluptas cumque iste ex accusantium architecto doloremque reprehenderit, asperiores vero dolor, esse inventore dolorem.</p>
    <p>Excepturi eaque, reprehenderit dolores, cum molestias repellendus in expedita. Placeat totam, quos pariatur quidem explicabo id harum ab voluptatum. Necessitatibus, aliquam! Dolorum voluptatem ut laudantium excepturi cumque, hic iure impedit ullam accusantium error natus recusandae, quia fuga quo voluptates officiis?</p>    
    <p>Dignissimos debitis eos necessitatibus accusantium natus voluptates illo blanditiis corporis minus. Repudiandae libero quae, illo error expedita consectetur possimus voluptate eum esse quam molestiae tempore dignissimos ipsam similique ab quod. Ea earum adipisci rem voluptatem aliquid voluptatum deleniti necessitatibus provident.</p>
    <p>Dicta eum amet impedit maiores accusamus numquam saepe necessitatibus temporibus ut! Velit ducimus repellendus fuga repudiandae culpa voluptatibus delectus praesentium totam odit ratione, tenetur assumenda, labore esse et nostrum a, aut veritatis. Nihil, voluptas, impedit? Magnam dolorum, iure repellendus vitae.</p>
    <p>Temporibus voluptatum voluptatibus iste, nam atque dignissimos quam labore sequi adipisci tempore exercitationem quos, libero, reprehenderit facere quasi soluta, itaque at eum cum possimus! Facilis, tempora soluta at quis. Nemo expedita voluptate esse nam ex odit, sequi eveniet quibusdam, dolores?</p>
    <p>Praesentium laboriosam iste dolore cumque voluptatibus deleniti quia, delectus provident, illum aperiam, atque molestiae. Cum delectus, doloribus expedita eius veritatis assumenda deleniti veniam reprehenderit animi ut, eaque asperiores, dicta incidunt omnis repellendus dolorum enim inventore rerum voluptatem saepe error id.</p>
    <a href="#" class="popup__close">close</a>
  </div>
</div>

<script src="http://aavishkargcek.com/content/themes/mytheme/mytheme/js/TweenLite.min.js"></script>
<script src="http://aavishkargcek.com/content/themes/mytheme/mytheme/js/EasePack.min.js"></script>
<script src="http://aavishkargcek.com/content/themes/mytheme/mytheme/js/demo-1.js"></script>

<div id="content" class="site-content">
<section class="focus" id="focus"  name="events">
<div class="container" >
	<div class="section-header" >
		<h2 class="white-text"><?php echo $event;?> Events</h2>
		<h6>Blood, Sweat & Respect. The first two you give, the last one you earn.</h6>
		
	</div>
	
	
	<div class="row">
	
	<?php 
	$host="199.79.62.23:3306";
	$user="aavishka";
	$pass="events_aavishkar@17";
	$db="aavishka_events";
	$conn = new mysqli($host, $user, $pass, $db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
		if($did!=7)
			$sql= "SELECT * from basic_details WHERE dept='$dept'";
		else
			$sql= "SELECT * from basic_details WHERE non_tech='yes'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$tagline=$row['tagline'];
				$non_tech=$row['non_tech'];
				$day=$row['day'];
				$dept=$row['dept'];
				$reg_fees=$row['reg_fees'];
				$cpname=$row['cperson_name'];
				$cpmob=$row['cperson_mob'];
				$ename=$row['event_name'];
				$eid=$row['eid'];
				if($non_tech == "no")
					$non_tech ="Technical";
				else if($non_tech == "yes")
					$non_tech = "Non-Technical";
				$dd = "";
				if($day ==1)
					$dd = "21 feb";
				else if($day ==2)
					$dd = "22 feb";
				
				echo '
				<div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter right after 0.2s over 1s">
					<div class="service-icon">
					<a target="_blank" href="http://aavishkargcek.com/events_test.php?event='.$eid.'"><i class="pixeden" style="background:url(/2k18/logos/'.$eid.'.jpg) no-repeat center;width:120px; height:120px;"></i> <!-- FOCUS ICON--></a>
				</div>
            		<h5 class="red-border-bottom">'.$ename.'</h5>
				<p>'.$tagline.', Presented by <b>'.$dept.'</b>. Day '.$day.' '.$non_tech.' Event on <b>'.$dd.'</b>. Participate with Registration Fees '.$reg_fees.'. Contact to '.$cpname.' <a href="tel:+91'.$cpmob.'">'.$cpmob.'</a>.</p>
				</div>';
			}
	}
	
	
	?>
			
	</div>
</div>



</section>

	 
</div>
</section>

<script type='text/javascript' src='http://aavishkargcek.com/content/themes/mytheme/mytheme/js/bootstrap.min11a8.js?ver=20120206'></script>
<script type='text/javascript' src='http://aavishkargcek.com/content/themes/mytheme/mytheme/js/jquery.knob11a8.js?ver=20120206'></script>
<script type='text/javascript' src='http://aavishkargcek.com/content/themes/mytheme/mytheme/js/smoothscroll11a8.js?ver=20120206'></script>
<script type='text/javascript' src='http://aavishkargcek.com/content/themes/mytheme/mytheme/js/scrollReveal11a8.js?ver=20120206'></script>
<script type='text/javascript' src='http://aavishkargcek.com/content/themes/mytheme/mytheme/js/zerif11a8.js?ver=20120206'></script>

</body>
</html>