<?php
// create arrays for one place updating on page
//investors array.  Update/modify or to add additional investor simply add additional line, no code work necessary 0n main page.
$inv = array(
    array("name"=>"Emily Melton","title"=>"Managing Partner","photo"=>"emily.png"),
	array("name"=>"Josh Stein","title"=>"Managing Partner","photo"=>"josh.png"),
	array("name"=>"Chirag Chotalia","title"=>"Partner","photo"=>"chirag.png"),
	array("name"=>"Mohammad Islam","title"=>"Partner","photo"=>"mohammad.png"),
	array("name"=>"Chris Kelley","title"=>"Partner","photo"=>"chris.png"),
	array("name"=>"Heidi Roizen","title"=>"Board Partner","photo"=>"heidi.png")
);

// operations array, Update/modify here or add additional operations here - 
$ops = array(
    array("name"=>"Carol Wentworth","title"=>"Marketing Partner","photo"=>"carol.png"),
	array("name"=>"Jen Kodner","title"=>"Talent Partner","photo"=>"jen.png"),
	array("name"=>"Johanna Lesch","title"=>"CFO","photo"=>"johanna.png")
);

//sections on index, Update/modify here, the variables of the items that change and class name. 
//to add class to page, go to page and add tags with class name where you want to place them, make sure your info is here.

$sections = array(
	array("className"=>"companyInfo","Section"=>"Investment Team", "height"=>"1196px", "bkColor"=>"#694e74"),
	array("className"=>"operations","Section"=>"Operations Team", "height"=>"759px", "bkColor"=>"#f26a36"),
	array("className"=>"company","Section"=>"Companies", "height"=>"1173px", "bkColor"=>"#5eaaa1"),
	array("className"=>"contact","Section"=>"Contact", "height"=>"961px", "bkColor"=>"#ed1a3d"),
);

// next section for companies 
/* hover colors pink #ed1a3d | orange #f26a36" | purple #694e74" | yellow #fecd05
if adding additional colors, please do so here "", */
$logoHover = array("#ed1a3d","#f26a36","#694e74","#fecd05","#fecd05","#694e74","#f26a36","#ed1a3d","#ed1a3d","#f26a36","#694e74","#fecd05","#fecd05","#694e74","#f26a36","#ed1a3d");
//array_reverse();

// company logo array.
$coLogos = array("azuqua.svg","balena.svg","betterup.svg","circleci.svg","diamanti.svg","doximity.svg","elation.svg","forward.svg","front.svg","helix01.svg","helix02.svg","humanlongevity.svg","kiwi.svg","launchDarkly.svg","livongo.svg","loftium.svg");

$empRowCount = 3;
$ttlColors = count($logoHover);
$ttlLogos = count($coLogos);
$noCoRows = ($ttlLogos/$ttlColors);
?>

<style>

<?php for($i=0;$i<count($sections);$i++){ ?>
.<?php echo $sections[$i]['className']; ?>{
	position:relative;
	height:<?php echo $sections[$i]['height']; ?>;
	width:100%;
	z-index:1;
	margin:0 auto;
	color:#0d3b5b;
	top:0;
	left:0;
	border:1px solid #fff;
	}
.<?php echo $sections[$i]['className']; ?>:before{
	position:absolute;
	z-index:-1;
	top:0;
	left:0;
	width:49%; /** this needs to be dynamic**/
	min-height:241px;
	background-color:<?php echo $sections[$i]['bkColor']; ?>;
	text-align:left;
	padding: 69px 0px 0px 122px; /* need to adjust this */
	font-family:"ProximaNovaAExtrabold", sans-serif; 
	font-size:32px; /* need to adjust this */
	color:#fff;
	content:"<?php echo $sections[$i]['Section']; ?>";
	}

	
<?php } ?>
<?php for($i=0;$i<count($logoHover);$i++){ ?>
.cbp<?php echo $i; ?>{ 
	width:300px; 
	height:224px;
	display:inline-block;
	margin:0px -2px -7px -2px;
}
.cbp<?php echo $i; ?>:hover{
	background-color:<?php echo $logoHover[$i]; ?>;
}	
<?php } ?>

.companyPhotoBox{
	width: 100%;
	height: 100%;
	background-size:80%;	
	background-repeat: no-repeat;
	background-position: center center;
	border: 1px solid #ececec;
}	

/*########################################################################################################################################### */
@media screen and (min-width:1024px) and (max-width:1400px){	
	<?php for($i=0;$i<count($sections);$i++){ ?>
.<?php echo $sections[$i]['className']; ?>{
	position:relative;
	width:100%;
	z-index:1;
	margin:0 auto;
	color:#0d3b5b;
	top:0;
	left:0;
	border:1px solid #fff;
	padding-bottom:100px;
	}
.<?php echo $sections[$i]['className']; ?>:before{
	position:absolute;
	z-index:-1;
	top:0;
	left:0;
	width:49%;
	height:241px;
	background-color:<?php echo $sections[$i]['bkColor']; ?>;
	text-align:left;
	padding: 69px 0px 0px 122px;
	font-family:"ProximaNovaAExtrabold", sans-serif; 
	font-size:26px;
	color:#fff;
	content:"<?php echo $sections[$i]['Section']; ?>";
	}
<?php } ?>

<?php for($i=0;$i<count($logoHover);$i++){ ?>
.cbp<?php echo $i; ?>{ 
	width:25%; 
	height:224px;
	display:inline-block;
	margin:0px -2px -7px -2px;
}
.cbp<?php echo $i; ?>:hover{
	background-color:<?php echo $logoHover[$i]; ?>;
}	
<?php }?>

.companyPhotoBox{
	width: 100%;
	height: 100%;
	background-size:80%;	
	background-repeat: no-repeat;
	background-position: center center;
	border: 1px solid #ececec;
}	
}

/*############################################################################################################################################# */

@media screen and (min-width:768px) and (max-width:1023px){
<?php for($i=0;$i<count($sections);$i++){ ?>
.<?php echo $sections[$i]['className']; ?>{
	top:0;
	left:0;
	position:relative;
	padding-bottom:100px;
	width:100%;
	z-index:1;
	margin:0 auto;
	color:#0d3b5b;
	border:1px solid #fff;
	}
.<?php echo $sections[$i]['className']; ?>:before{
	position:absolute;
	z-index:-1;
	top:0;
	left:0;
	width:52%;
	height:100px;
	background-color:<?php echo $sections[$i]['bkColor']; ?>;
	text-align:left;
	padding: 60px 0px 0px 80px;
	font-family:"ProximaNovaAExtrabold", sans-serif; 
	font-size:24px;
	color:#fff;
	content:"<?php echo $sections[$i]['Section']; ?>";
	}
<?php } ?>
<?php for($i=0;$i<count($logoHover);$i++){ ?>
.cbp<?php echo $i; ?>{ 
	width:20%; 
	height:200px;
	display:inline-block;
	margin:0px -2px -7px -2px;
}
.cbp<?php echo $i; ?>:hover{
	background-color:<?php echo $logoHover[$i]; ?>;
}	
<?php }?>

.companyPhotoBox{
	width:  100%;
	height: 100%;	
	background-size:80%;
	background-repeat: no-repeat;
	background-position: center center;
	border: 1px solid #ececec;
}	
}

@media screen and (max-width:767px){	
	<?php for($i=0;$i<count($sections);$i++){ ?>
.<?php echo $sections[$i]['className']; ?>{
	top:0;
	left:0;
	margin:0 auto;
	width:100%;
	position:relative;
	z-index:1;
	color:#0d3b5b;
	border:1px solid #fff;
	}
.<?php echo $sections[$i]['className']; ?>:before{
	position:absolute;
	z-index:-1;
	top:0;
	left:0;
	width:100%;
	height:100px;
	background-color:<?php echo $sections[$i]['bkColor']; ?>;
	text-align:left;
	padding: 60px 0px 0px 20px;
	font-family:"ProximaNovaAExtrabold", sans-serif; 
	font-size:24px;
	color:#fff;
	content:"<?php echo $sections[$i]['Section']; ?>";
	}
<?php } ?>
<?php for($i=0;$i<count($logoHover);$i++){ ?>
	.cbp<?php echo $i; ?>{ 
	width:50%; 
	height:200px;
	display:inline-block;
	margin:0px -2px -7px -2px;
}
.cbp<?php echo $i; ?>:hover{
	background-color:<?php echo $logoHover[$i]; ?>;
}	
<?php }?>

.companyPhotoBox{
	width:  100%;
	height: 100%;	
	background-size:80%;
	background-repeat: no-repeat;
	background-position: center center;
	border: 1px solid #ececec;
}	
}



</style>