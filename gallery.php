<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/gallery.css">
    <title>BDAA</title>
    </head>
    <body>
        <?php include("nav.html");?>
        <div class="col-sm-8 col-lg-8 fadein">
            <div class="jumbotron main-content padded">
                <div class="container-fluid">
                    <h2 style="color: #BB0000">Photo Gallery</h2>
                    <p class="text-muted">Check out these pictures to get a feel for what BDAA meetings and events are all about.</p>
                    <!-- Carousel -->
                    <div style="padding-bottom: 10px;"id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">

                            <!-- Pick one image to be item-active -->
                            <div class="item active">
                                <img class="img-responsive" src="/Images/gallery/business_meeting.JPG">
                            </div>
                            <?php $files = scandir('./Images/gallery/'); ?>
                            <?php foreach($files as $file) { ?>
                            <?php if ($file != ".") { ?>
                            <?php if ($file != "..") { ?>
                            <?php if ($file != "business_meeting.JPG") { ?>
                            <div class="item">
                                <img class="img-responsive" src="/Images/gallery/<?php echo $file;?>">
                            </div>
                            <?php }}}} ?>
                        </div>
                        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <button id="viewAllBtn" class="btn btnred center-block" data-toggle="modal" data-target="#viewAllWindow" style="color:white;" >View All &raquo;</button>
                </div>
            </div>

            <div id="viewAllWindow" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">View All Pictures</h4>
                        </div>
                        <div class="modal-body">
                            <?php $files = scandir('./Images/gallery/'); ?>
                            <?php foreach($files as $file) { ?>
                            <?php if ($file != ".") { ?>
                            <?php if ($file != "..") { ?>
                            <div style="padding-bottom: 15px;" class="col">
                                <img class="img-responsive" src="/Images/gallery/<?php echo $file;?>">
                            </div>
                            <?php }}} ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
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
    ChangeNavActiveClass("#nav-link-gallery");
});
    </script>
</html>
