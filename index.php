<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!--CSS-->
    <?php include './elements/header.php'; ?>
    <!--//CSS-->
</head>

<body>
    <header>
        <!--Header-->
        <?php include './elements/headerDesign.php'; ?>
        <!--//Header-->
    </header>

    <section class="main-container video-content">
        <div class="container video-content-inner">
            <div class="row">
                <div class="col-md-6 col-sm-12 content-text">
                    <h1>Video Editing Agency</h1>
                    <p>
                        “At CreatesYou, we help content creators, influencers, and business
                        owners take their editing to the next level. Our goal is to
                        streamline their workflow and free up their time so they can focus
                        on what they do best – creating amazing content. With a team of
                        skilled editors and a passion for creativity, we work closely with
                        our clients to bring their visions to life.
                    </p>

                    <div class="col-md-6 col-sm-12 btn-group">
                        <a class="btn btn-primary contact-btn" href="wallpaper.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contact us</a>
                    </div>
                </div>
                <div class="col-md-6 content-demo">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qZVTkn2NjS0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>


    </section>
    <section class="main-container ">
        <div class="container wallpapers-content">
            <div class="row wallpapers-content-inner text-start">
                <div class="col-md-5 text">
                    <h1>Free Wallpapers</h1>
                </div>
                <div class="col-md-3 wall-btn ">
                    <div class="btn-group">
                        <a class="btn btn-primary contact-btn" href="wallpaper.php">Download All!</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="main-container our-services">
        <div class="container">
            <div class="content-header">
                <h1>Our Services</h1>
                <span></span>
            </div>

            <div class="service-item">
                <ul>
                    <li><a href="youtube.php">Youtube</a></li>
                    <li><a href="wedding.php">Wedding</a></li>
                    <li><a href="reels.php">Reels/Tiktok Shorts</a></li>
                    <li><a href="realestate.php">Real estate</a></li>
                    <li><a href="businessads.php">Business Ads Courses</a></li>
                </ul>
            </div>
        </div>
    </section>
    <?php include 'reels-video.php'; ?>
    <section class="main-container blog-post">
        <div class="container video-content-inner">
            <div class="row">
                <div class="col-md-6 content-demo">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4ac8P2nVGgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 content-text">

                    <p>
                        “At CreatesYou, we help content creators, influencers, and business
                        owners take their editing to the next level. Our goal is to
                        streamline their workflow and free up their time so they can focus
                        on what they do best – creating amazing content. With a team of
                        skilled editors and a passion for creativity, we work closely with
                        our clients to bring their visions to life.
                    </p>
                    <button type="button" class="contact-btn">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i> Contact us
                    </button>
                </div>

            </div>
        </div>


    </section>
    <section class="main-container review">
        <div class="container">
            <div class="row ">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="review-inner">
                        <div class="review-text ">
                            <h5>When a great soul like S A Hassan Apon and a dedicated creative team work hard together day and night to keep all the commitments that they gave to their client, something great actually happens! They consider their work as their final and only chance, so they always make it outstanding. I highly recommend S A Hassan Apon to all who are really looking for a committed team to work with on their big day.</h5>
                        </div>
                        <div class="reviewer mb-3">Shuvo Dip & Susmita Mondol</div>
                        <div class="reviewer-picture mb-3">
                            <img src="assets/image/get2.jpg" alt="" srcset="" width="60" height="60">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="review-inner">
                        <div class="review-text ">
                            <h5>When a great soul like S A Hassan Apon and a dedicated creative team work hard together day and night to keep all the commitments that they gave to their client, something great actually happens! They consider their work as their final and only chance, so they always make it outstanding. I highly recommend S A Hassan Apon to all who are really looking for a committed team to work with on their big day.</h5>
                        </div>
                        <div class="reviewer mb-3">Shuvo Dip & Susmita Mondol</div>
                        <div class="reviewer-picture mb-3">
                            <img src="assets/image/get2.jpg" alt="" srcset="" width="60" height="60">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="review-inner">
                        <div class="review-text ">
                            <h5>When a great soul like S A Hassan Apon and a dedicated creative team work hard together day and night to keep all the commitments that they gave to their client, something great actually happens! They consider their work as their final and only chance, so they always make it outstanding. I highly recommend S A Hassan Apon to all who are really looking for a committed team to work with on their big day.</h5>
                        </div>
                        <div class="reviewer mb-3">Shuvo Dip & Susmita Mondol</div>
                        <div class="reviewer-picture mb-3">
                            <img src="assets/image/get2.jpg" alt="" srcset="" width="60" height="60">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
    </section>

    <footer>
        <!--Footer-->
        <?php include './elements/footerDesign.php'; ?>
        <?php include './elements/footer.php'; ?>
        <!--//Footer-->
    </footer>
</body>

</html>