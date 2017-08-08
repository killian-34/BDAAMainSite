<html>
    <head>
        <link rel=stylesheet href='/css/animations.css' />
    <title>BDAA</title>
    </head>
    <body>
        <?php include("nav.html");?>
        <div class="col-sm-8 col-lg-8 fadein">
            <!-- Welcome banner -->
            <div class="jumbotron main-content">
                <br />
                <h1 align="center" class="org-title" >Big Data & Analytics Association</h1>
                <div class='container padded'>
                    <div class="row padded">
                        <p id="jumboText" class="text-muted">The only <b>undergraduate student organization</b> at The Ohio State University of its kind. We aim to inspire students to think analytically, empower them through hands on training, and connect them to potential employers. Winner of the 2016 Excellence Award for Innovation and Change, BDAA is truly Ohio State's central hub for involvement in data analytics.</p>
                    </div>
                </div>
            </div>
            
            <div class='jumbotron main-content'>
                <div class='container padded'>
                    <div class="row padded">
                        <h2 class="">News</h2>
                        <h3 class="text-muted"><b>Networking Night Fall 2017</b></h3>
                        <p class="text-muted">Join us for our Networking night on September 25 in the Performance Hall of the Ohio Union.</p>

                        <h3 class="text-muted"><b>BDAA Brunch</b></h3>
                        <p class="text-muted">Don't miss us at the BDAA brunch at ethyl!</p>
                    </div>
                </div>
            </div>
            <div class='jumbotron main-content'>
                <div class='container padded'>
                    <h2 class="pad-left">Upcoming Events</h2>
                    <br />
                    <iframe id="gcal" class="calendar-frame" allowtransparency="true" src="cal.php"></iframe>
                </div>
            </div>
        <?php include("footer.html");?>
            
        </div>
        <div class="col-sm-2 col-lg-2">
        </div>
    </body>
<script type="text/javascript">
        console.log("sup")
$( document ).ready(function() {
    ChangeNavActiveClass("#nav-link-home");
});
    </script>
</html>
