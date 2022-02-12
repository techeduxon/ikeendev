<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ikeendev </title>
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/fancybox.css">
    <link rel="stylesheet" href="<?= base_url().'assets/user-assets/' ?>css/tooltipster.bundle.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<?php include ('include/Header.php'); ?>
<?php include ('include/top_slider.php'); ?>
<section class="blog-details section-padding">
    <div class="container">
    <h3 class="widget-title"><?= $que[0]->que ?></h3>

        <?php if(!empty($ans)){ foreach($ans as $val){ ?>

        <div class="blog-details-wrap">
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="author-wrap ">
                        <ul class="comments-list padding-top-30px">
                            <li>
                                <div class="comment new-comment">
                                    <div class="comment-avatar new-comment-avatar">
                                        <img class="avatar__img" alt="" src="<?= base_url().'assets/user-assets/' ?>images/team.jpg">
                                    </div>
                                    <div class="comment-body new-comment-body ">
                                        <div class="meta-data">
                                            <div class="new-name-and-data">
                                                <h3 class="comment__author font-size-24"><?= $val->name ?></h3>
                                                <p class="comment__date line-height-18"><a href="#" class="primary-color-3"><?= $val->email ?></a></p>
                                            </div>
                                            <div class="date-right">
                                                <h6><?= date('M d',strtotime($val->created_at)) ?></h6>
                                            </div>
                                        </div>

                                        <div class="contetn-do">
                                            <div class="cooked">
                                                <p><?= $val->ans ?></p>
                                                <p>Happy learning!</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-6 col-xl-6">
                                                <ul class="social-profile">
                                                    <li><a href="https://www.facebook.com/sharer.php?u=<?= current_url() ?>"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="https://twitter.com/share?url=<?= current_url() ?>&text=<?= $val->name ?>&via=<?= $val->name ?>&hashtags=<?= $val->name ?>"><i class="fa fa-twitter"></i></a></li>
                                                    <!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
                                                    <li><a href="https://www.linkedin.com/shareArticle?url=<?= current_url() ?>&title=<?= $val->name ?>"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- <div class="col-lg-6 col-xl-6">
                                                <ul class="social-profile text-right">
                                                    <li><a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div><!-- end comment -->
                            </li>
                            
                        </ul>
                    </div><!-- end author-wrap -->
                    
                </div><!-- end col-lg-8-->
                <div class="col-lg-4 po-chang-top">
                    <div class="date-formet-right">
                            <ul>
                                <li><b><?= date('M d Y',strtotime($val->created_at)) ?></b></li>
                                <li><b><?php 
                                            $datetime1 = new DateTime($val->created_at);
                                              $datetime2 = new DateTime();
                                              $interval = $datetime1->diff($datetime2);
                                              echo $interval->format('%a d ago')."<br>";
                                           ?> </b></li>
                            </ul>
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end blog-details-wrap -->
    <?php } } ?>
        <div class="row ">
            <div class="col-lg-8">
                <div class="text-right">
                    <a href="javascript:void(0);" class="theme-btn show-a-btn"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a>
                </div>
            </div>
        </div>
        <div class="hide-and-show-topgel" style="display: none;">
        <?php if(!empty($ses)){ ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-end">
                        <div class="col-lg-11">
                            <div class="form-retan">
                                <form action="<?= base_url().'User/save_forum_ans' ?>" method="post">
                                  <div class="form-group">
                                    <label for="textarea">Answer:</label>
                                    <textarea type="text" required="required" rows="6" class="form-control" name="ans" id="summernote"></textarea>
                                    <input type="hidden" name="forum_id" value="<?= $que[0]->id ?>">
                                  </div>
                                  <button type="submit" class="btn theme-btn">Reply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div><!-- end container -->
</section>

<?php include ('include/Footer.php'); ?>
<!-- template js files -->

<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/magnific-popup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/isotope.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/waypoint.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particles.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/particlesRun2.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/fancybox.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/wow.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/date-time-picker.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/jquery.filer.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/emojionearea.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/smooth-scrolling.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/tooltipster.bundle.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/develop.js"></script>
<script>
    $(document).ready(function() {
        $(".show-a-btn").click(function(){
          $(".hide-and-show-topgel").slideToggle();
        });
        $('#summernote').summernote();
    });
  </script>
</body>

</html>