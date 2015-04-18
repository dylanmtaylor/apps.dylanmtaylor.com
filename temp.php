<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Dylan Taylor's Application Download Center</title>   
	<script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style.css" type="text/css" title="no title" />
	<link rel="stylesheet" type="text/css" href="sb/shadowbox.css">
	<script type="text/javascript" src="js/jquery.easytabs.min.js"></script>
	<script type="text/javascript" src="sb/shadowbox.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#container').easytabs({defaultContent:1});
		});		
		Shadowbox.init();
	</script>
</head>
<body>
<div id="container">
	<div id="header">Application Download Center</div>
	<ul class="tabs">
		<li><a href="#android-downloads">Android Downloads</a></li>
		<li><a href="#faqs">Frequently Asked Questions</a></li>
		<li><a href="#about">About</a></li>
	</ul>
	<div id="main_content">
		<div id="android-downloads">
			<h1>Android Downloads</h1> <?php 
			error_reporting(E_ALL);
			ini_set('display_errors', '1');
			
			#Application Titles
			$app_names = array("EliteBomb Ultimate SMS Text Bomber", "FiOS WEP Key Calculator",
			"InfiniteSMS Limit Remover", "Simple Dice Rolling Application", "Self Destruct Proof of Concept",
			"EliteGuard Plus SMS Protection","Currency Converter","Find The Mouse","Clippy Clipboard Manager [Public Beta]","Catch The Ball");
			#Shortened Application Names 
			$app_snames = array("elitebomb","fios_wep_calculator","infinite_sms","simple_dice",
			"self_destruct","eliteguard_plus_sms_protection","curr_conv","find_the_mouse","clippy_public_beta","catch_the_ball"); 
			#Application Descriptions
			$app_descs = array(
					"",
					#end of elitebomb description
					"",
					#end of fwc description
					"",
					#end of infinite sms description				
					"",
					#end of simple dice description
					"",
					#end of self destruct description
					"",
					#end of eliteguard plus description
					"",
					#end of currency converter description					
					"",
					#end of find the mouse description					
					"",		
					#end of clippy description
					"Catch the Ball description"
					#end of catch the ball description
				);
			$custom_buttons = array( #names and links of custom buttons for each application
			#simpledice

			#selfdest

			#eliteguard

			#currency converter

			#find the mouse	
			#clippy clipboard manager
			#catch the ball
			);#end of custom buttons
			$has_screenshot = array(true, #eb
			true, #fwc
			true, #inf
			true, #dice
			false, #sdest
			true, #eliteguard 
			true, #currconv
			true, #findthemouse
			true, #clippy
			false #catchtheball
			); 
			$ss = array( #array of arrays of URLs 
			#elitebomb
			array("http://dylanmtaylor.com/wp-content/uploads/2010/12/entry-2.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/entry-1.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/contacts.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/unlimited.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/delay.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/sending.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/remove-limit.png"
			),
			#fwc
			array("http://dylanmtaylor.com/wp-content/uploads/2010/12/blank.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/abcde.png"),
			#infsms
			array("http://dylanmtaylor.com/wp-content/uploads/2011/01/regular-main.png",
				"http://dylanmtaylor.com/wp-content/uploads/2011/01/regular-confirm.png"),
			#simpdice
			array(""),
			#selfdest
			array(""),
			#eliteguard
			array("http://dylanmtaylor.com/wp-content/uploads/2010/12/protected.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/unprotected.png"),
			array("http://dylanmtaylor.com/wp-content/uploads/2010/12/entry.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/menu.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/12/main.png"), #currconv
			array(""), #ftm
			array("http://dylanmtaylor.com/wp-content/uploads/2011/01/Screenshot-1.png",
				"http://dylanmtaylor.com/wp-content/uploads/2011/01/Screenshot.png",
				"http://dylanmtaylor.com/wp-content/uploads/2010/08/clippy-beta-ss1.png"), #clippy
			array("") #ctb			
			);			
			for ($i = 0; $i < count($app_names); $i++) {
				echo "\n\t\t\t<div class=\"application\">\n"; #application tag opening
				echo "\t\t\t\t<h1>"; #opening title tag
				echo $app_names[$i]; #name of the application
				echo "</h1>\n"; #closing title tag
				echo "\t\t\t\t<p>"; #opening description tag
				echo $app_descs[$i]; #application description
				echo "</p>\n"; #closing desc tag	
				echo "\t\t\t\t<div class=\"section\">\n\t\t\t\t\t<div class=\"button-box\">\n"; #beginning of button section
				#screenshot button section
				if ($has_screenshot[$i]) {
					echo "\t\t\t\t\t\t<a href=\"";
					echo $ss[$i][0];
					echo "\" class=\"button\" rel=\"shadowbox[";
					echo $app_snames[$i];
					echo "]\">View Screenshots</a>\n";
					if (count($ss[$i]) > 1) { #the rest of the screenshots for the application need to be on the page, but invisible
						echo "\t\t\t\t\t\t<span style=\"display:none\"> <!-- Additional Screenshots -->\n";
						for ($s = 1; $s < count($ss[$i]); $s++) {
							echo "\t\t\t\t\t\t<a href=\"";
							echo $ss[$i][$s];
							echo "\" class=\"button\" rel=\"shadowbox[";
							echo $app_snames[$i];
							echo "]\"></a>\n";
						}
						echo "\t\t\t\t\t\t</span>\n";
					}
				}
				#and now for custom buttons... this is where is gets chaotic
				for ($c = 0; $c < count($custom_buttons[$i][0]); $c++) {
					echo "\t\t\t\t\t\t<a href=\"";
					echo $custom_buttons[$i][1][$c]; #the link the button points to
					echo "\" class=\"button\">";
					echo $custom_buttons[$i][0][$c]; #the text on the button
					echo "</a>\n";						
				}
				echo "\t\t\t\t\t</div>\n"; #end of the button box section
				echo "\t\t\t\t</div>\n"; #end of the 'section' div
				echo "\t\t\t</div>"; #end of this application				
			} ?>			
		</div>
		<div id="faqs">
			This is the "Frequently Asked Questions" tab. Nothing here yet, check back later!
		</div>
		<div id="about">
			This is the "About" tab. Nothing here yet, check back later!
		</div>
	</div>
	<div id="footer">
		<p>Copyright &copy; <?php echo date("Y"); #2011 ?> <a href="http://dylanmtaylor.com/" class="footer_link">Dylan M. Taylor</a>. All rights reserved.</p>
	</div>
</div>
</body>
</html>
