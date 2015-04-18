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
					"EliteBomb is an incredibly powerful SMS text bomber.
					It allows you to send between 1 and 5000 text messages by choosing preset values, and is the first SMS bombing application for Android to offer 
					the ability to send an unlimited amount of text messages. You can customize the delay between each message, ranging from no delay at all to 30 seconds. 
					The 'Plus' version offers the ability to use 'Rapid-Fire Mode', which is able to send messages at a <em>significantly</em> faster rate because it doesn't 
					check if the previous message sent before queueing another message to be sent. Also, the 'Plus' version contains absolutely no annoying advertisements. 
					Make sure that you read the <a rel=\"shadowbox[elitebomb-license-agreement]\" href=\"/licenses/elitebomb\" >license agreement</a> before downloading EliteBomb. 
					EliteBomb has absolutely no limits of any kind, what-so-ever. ;)
					<br/>Note: On devices running version 1.6 of the Android operating system, the 'Lite' version is required. Sorry! :(",
					#end of elitebomb description
					"FiOS WEP Calculator lets you easily calculate the <em>default</em> WEP key for an Actiontec MI424WR router (Gen 1 & 2). 
					Just enter the network name to instantly calculate the key! The 'Lite' version of FiOS WEP Calc will remain free with unlimited usage forever, 
					but it is supported by advertisements. In addition to that, the 'Lite' version can only use the 'Select Wireless Network' functionality on 
					'remembered' FiOS networks. Please consider purchasing the ad-free 'Pro' version if you find this application useful. 
					For usage on <em>authorized</em> FiOS networks only.",
					#end of fwc description
					"By default, the Android operating system limits the number of messages you can send in an hour without a confirmation dialog popping up to 100. 
					'InfiniteSMS' allows you to easily remove the Android operating system's built-in SMS sending limitation with a simple click of a button, 
					removing the need to manually edit system setting databases. This will allow any application to send an unlimited number of text messages 
					without the annoying pop-up messages. This requires a <em><a href=\"http://www.androidpolice.com/2010/04/15/rooting-explained-top-5-benefits-of-rooting-your-android-phone/\">rooted device</a></em>. 
					EliteBomb has this SMS limit removal functionality built-in.",
					#end of infinite sms description				
					"'Simple Dice' is just a simple, yet incredibly lightweight and open-source dice rolling application. 
					It works very well, and supports almost all versions of Android. 'Simple Dice' includes a dice rolling animation and dice rolling sound effects 
					to add excitement and realism. Watch the dice roll from number to number until they stop on randomly generated numbers! 
					You can roll the dice by clicking anywhere on the screen or by shaking the device (accelerometer required). 
					The non-donation package available below is supported by unobtrusive advertisements.",
					#end of simple dice description
					"This is a proof of concept of an application that, upon running, removes it's main class from the Dalvik package manager, 
					preventing itself from running again. This application serves no other purpose and is not malicious in any way. 
					Please note that the launcher icon will remain, although you won't be able to open it.",
					#end of self destruct description
					"EliteGuard Plus is a very lightweight application that protects you from being SMS bombed. 
					Because it runs in the background passively, meaning it's not actively running until an SMS message is received, it has a very small impact on 
					battery consumption, and silently blocks repeated text messages without interrupting you.",
					#end of eliteguard plus description
					"This is a simple, quick, accurate, and efficient currency converter that uses exchange rates provided by Google to convert between currencies. Less than 2KB of data is used to retrieve current exchange rate data. Includes 94 different international currencies! As of version 0.4, rates are cached for offline usage.",
					#end of currency converter description					
					"\"Find the Mouse\" is a simple game that I originally made to teach a friend how to make a basic Android game.
					It is now an open source project licensed under version 3 of the GNU General Public license. 
					The idea is to guess which card the mouse is behind in 3 tries or less. 
					Pressing the \"Menu\" or \"Search\" buttons restarts the game.",
					#end of find the mouse description					
					"Clippy is an advanced clipboard manager and plain text editor. 
					It allows you to edit the current contents of the clipboard, apply text filters, save  and retrieve \"clippings\", and much more. 
					Clippy is a great tool to help you keep track of notes, easily share content with friends/acquaintances, and stay organized.",		
					#end of clippy description
					"Catch the Ball description"
					#end of catch the ball description
				);
			$custom_buttons = array( #names and links of custom buttons for each application
			#elitebomb
				array(
					array("Get Regular Version [FREE]",
						"Get 'Lite' Version [FREE]",
						"Purchase 'Plus' Version [$1.99]"
						),
					array("http://code.dylanmtaylor.com/apps/android/EliteBomber.apk",
						"http://code.dylanmtaylor.com/apps/android/EliteBomb-Lite.apk",
						"javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),
			#fwc
				array(
					array("Download 'Lite' Version [FREE]",
						"Purchase 'Pro' Version [$0.99]"
						),
					array("http://code.dylanmtaylor.com/apps/android/FiOS-WEP-Calculator-LITE.apk",
						"javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),
			#infsms
				array(
					array("Download InfiniteSMS [FREE]",
						"Purchase Donation Version [$2.99]",
						),
					array("http://code.dylanmtaylor.com/apps/android/InfiniteSMS.apk",
						"javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),
			#simpledice
				array(
					array("Download Simple Dice [FREE]",
						"Purchase Donation Version [$0.99]",
						"View Source Code"
						),
					array("http://code.dylanmtaylor.com/apps/android/Simple-Dice-Free.apk",
						"javascript:alert('I am unable to accept payments at this time. Check back later.');",
						"https://github.com/aliendude5300/Simple-Dice/"
						)
				),
			#selfdest
				array(
					array("Download Self Destruct Proof of Concept [FREE]",
						"More Information and Source Code"
						),
					array("http://code.dylanmtaylor.com/apps/android/Self-Destruct.apk",
						"http://dylanmtaylor.com/2010/11/11/an-explanation-of-my-recent-self-destruct-application/"
						)
				),
			#eliteguard
				array(
					array("Purchase EliteGuard Plus [$1.99]"
						),
					array("javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),
			#currency converter
				array(
					array("Custom Button"
						),
					array("javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),	
			#find the mouse	
				array(
					array("Custom Button"
						),
					array("javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),		
			#clippy clipboard manager
				array(
					array("Custom Button"
						),
					array("javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				),		
			#catch the ball
				array(
					array("Custom Button"
						),
					array("javascript:alert('I am unable to accept payments at this time. Check back later.');"
						)
				)		
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
