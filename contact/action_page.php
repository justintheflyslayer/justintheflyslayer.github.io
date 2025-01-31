<?php

if(isset($_POST['email'])) {

$email_to = "justintheflyslayer@gmail.com";
$email_subject = "New Message via www.justinflyslayer.ml Contact Form";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "Form Details Below.\n\n";

$email_message = "First Name: ".cleanstring($firstname)."\n";
$email_message = "Last Name: ".cleanstring($lastname)."\n";
$email_message = "Email: ".cleanstring($email)."\n";
$email_message = "Subject: ".cleanstring($subject)."\n";
$email_message = "Message: ".cleanstring($message)."\n";

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

?>

<head>

	<link rel="stylesheet" type="text/css" href="https://www.justinflyslayer.ml/css/style.foot.css" />
	<link rel="stylesheet" type="text/css" href="https://www.justinflyslayer.ml/css/style.head.css" />
	<link rel="stylesheet" type="text/css" href="https://www.justinflyslayer.ml/css/style.main.css" />
	<link rel="icon shortcut" type="image/png" href="https://www.justinflyslayer.ml/img/icon.png" />
	<title>Moderator List &middot; JustinTheFlySlayer</title>

</head>

<body>

	<!-- BEGIN Wrapper/Nav Menu -->

	<div class="head">

		<div class="nav">
            
            <nav class="navbar">
                
                <span class="open-slide">
                
                    <a href="#" onclick="openSideMenu()" style="font-size: 25px;">&#9776;</a>
                
                </span>

                <span id="logo">
                
                    <a href="https://www.justinflyslayer.ml/"><img src="https://www.justinflyslayer.ml/img/icon.png" alt="JustinTheFlySlayer Logo" title="Go home ..." width="35" height="35"></a>
                    
                </span>
            </nav>

            <div id="side-menu" class="side-menu">
                
                <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>
                <li><a href="https://www.justinflyslayer.ml/">Home</a></li>
                <li><a href="https://www.justinflyslayer.ml/leaderboards">Top Frogs Rankings</a></li>
                <li><a href="https://www.justinflyslayer.ml/games">What Justin Plays</a></li>
                <li><a href="https://www.justinflyslayer.ml/prizes">Follower Prizes</a></li>
                <li><a href="https://www.justinflyslayer.ml/mods">Channel Moderator List</a></li>
                <li><a href="https://streamlabs.com/JustinTheFlySlayer/v2/merch">SamRItv Merch Shop</a></li>
                <li><a href="https://www.justinflyslayer.ml/commands">Channel/Bot Commands</a></li>
                <li><a href="https://www.justinflyslayer.ml/appeal">Submit a Ban Appeal</a></li>
                <li><a href="https://www.justinflyslayer.ml/contact">Contact Justin</a></li>
                <li><a href="https://www.justinflyslayer.ml/bug-report">Report a Bug?</a></li>

            </div>

        </div>

	</div>

	<!-- END Wrapper/Nav Menu -->
    
    <!-- BEGIN Page Content -->

	<div id="main">

		<div id="main1">
			
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
            <h2>Thanks for contacting JustinTheFlySlayer!</h2>
            <br />
            <a href="#main2">&DownArrowBar;</a>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <div id="main2">

            	<p>The time period to get a response is normally 1-2 weeks. Please be patient.</p>

            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />

        </div>

    </div>

    <!-- END Page Content -->

    <!-- BEGIN Page Scripts -->

    <script>
        
        function openSideMenu() {

            document.getElementById('side-menu').style.width = '414px';

        }

        function closeSideMenu() {

            document.getElementById('side-menu').style.width = '0px';

        }

    </script>

    <script>

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("gttBtn").style.display = "block";
          } else {
            document.getElementById("gttBtn").style.display = "none";
          }
        }

        function goToTop() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

    </script>

    <!-- END Page Scripts -->

    <div class="footer">
        
        <span id="span1-desktop">
            
            <table>
                
                <col span="1" class="wide">

                    <tr>

                        <th id="col-td1">Links:</th>
                        <th>Social:</th>
                        <th id="col-td2">Contact SamRI:</th>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml">Home</a></td>
                        <td><a href="https://twitch.tv/JustinTheFlySlayer">Twitch</a></td>
                        <td id="col-td2">Justin "The Fly Slayer" Young</td>
                    
                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/leaderboards">Top Frog Rankings</a></td>
                        <td><a href="https://twitter.com/JustinFlySlayer">Twitter</a></td>
                        <td id="col-td2">Phone (Text-Only): +1 (760)503-4254</td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/games">Games Justin Plays</a></td>
                        <td><a href="https://youtube.com/channel/UCF1CoH-IZ_U26YHeUI-B_lw">YouTube</a></td>
                        <td id="col-td2"><a href="https://www.justinflyslayer.ml/contact">Email: justintheflyslayer@gmail.com</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/prizes">Follower Prizes</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/mods">Channel Moderator List</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://streamlabs.com/justintheflyslayer/v2/merch">Justin's Merch Shop</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/commands">Channel/Bot Commands</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/appeal">Submit a Ban Appeal</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/contact">Contact Justin</a></td>

                    </tr>

                </col>

                <br />

                <col span="1" class="wide">

                    <tr>

                        <td id="col-td1"> &bull; <a href="https://www.justinflyslayer.ml/bug-report">Report a Bug?</a></td>

                    </tr>

                </col>

            </table>

            <br />
            <br />
            <br />

            <p>This Website was made by Justin "The Fly Slayer" Young and is hosted by <a href="https://pages.github.com">GitHub Sites.</a> Some scripts were not developed by Justin. All non-original scripts' rights belong to their respective developers. No claim is laid to said scripts.</p>

        </span>

        <span id="span1-mobile">
            
            <p>This Website was made by Justin "The Fly Slayer" Young and is hosted by <a href="https://pages.github.com">GitHub Sites.</a> Some scripts were not developed by Justin. All non-original scripts' rights belong to their respective developers. No claim is laid to said scripts.</p>

        </span>

    </div>

</body>

<?php

}
?>