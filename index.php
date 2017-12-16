a<html>
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
                        <p id="jumboText" class="text-muted">The only <b>undergraduate student organization</b> of its kind at The Ohio State University. We aim to inspire students to think analytically, empower them through hands on training, and connect them to potential employers. Winner of the 2016 Excellence Award for Innovation and Change, BDAA is truly Ohio State's central hub for involvement in data analytics.</p>
                    </div>
                </div>
            </div>
            
            <div class='jumbotron main-content'>
                <div class='container padded'>
                    <div class="row padded">
                        <h2 class="">News</h2>
                        <h3 class="text-muted"><b>October is Data Analytics Month</b></h3>
                        <p class="text-muted">Check out the full schedule of events below (or click <a href="Images/site/data_analytics_month.jpg" class="pretty-link">here!</a>)</p>
			<img src="Images/site/data_analytics_month.jpg" style="max-height:100%;max-width:100%">
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
$( document ).ready(function() {
    ChangeNavActiveClass("#nav-link-home");
});
    </script>
</html>
