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
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <meta property="og:url"  content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
      <meta property="og:type"               content="blog" />
      <meta property="og:title" content="<?= $news['title1'] ?>">
      <meta property="og:image" content="<?= base_url().'uploads/home_images/' ?><?= $news['image'] ?>">
      <!-- end cssload-loader -->
      <!--======================================
         START HEADER AREA
         ======================================-->
      <?php include ('include/Header.php'); ?>
      <?php include ('include/top_slider.php'); ?>
      <section class="blog-details section-padding">
         <div class="container">
            <div class="blog-details-wrap">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="card-item blog-card">
                        <div class="card-image">
                           <a href="javascript:void(0)" class="card__img"><img src="<?= base_url().'uploads/home_images/' ?><?= $news['image'] ?>" style="height: 600px;" alt=""></a>
                           <div class="card-badge">
                              <span class="badge-label"><?= date('d-M',strtotime($news['created_at'])) ?></span>
                           </div>
                        </div>
                        <!-- end card-image -->
                        <div class="card-content">
                           <h3 class="card__title mt-0"><?= $news['title1'] ?></h3>
                           <div class="card-action">
                              <ul class="card-duration d-flex align-items-center">
                                 <li><span class="la la-user"></span>By <?= $news['title2'] ?></li>
                                 <!--   <li><span class="blog__panel-comment"><span class="la la-commenting"></span>4 Comments</span></li>
                                    <li><span class="blog__panel-likes"><span class="la la-thumbs-up"></span>130 Likes</span></li> -->
                              </ul>
                           </div>
                           <!-- end card-action -->
                           <div class="card-body">
                              <p></p>
                              <h3 class="widget-title pb-3">Content</h3>
                              <p><?= $news['description'] ?></p>
                              <div class="section-block"></div>
                              <div class="tags-item tag-widget padding-top-30px d-flex align-items-center justify-content-between">
                                 <!--  <ul class="list-items">
                                    <li><span>Tags:</span></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">UI Design</a></li>
                                    </ul> -->
                                 <ul class="social-profile">
                                    <li><span>Share:</span></li>
                                    <li><a target="_blank" href="https://wa.me/?text=<?= current_url() ?>"><i class="fa fa-whatsapp"></i></a></li>
                                    <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?= current_url() ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/share?url=<?= current_url() ?>"><i class="fa fa-twitter"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                                 </ul>
                              </div>
                           </div>
                           <!-- end card-body -->
                        </div>
                        <!-- end card-content -->
                     </div>
                     <!-- end card-item -->
                     <?php if(!empty($session)){ ?>
                     <div class="author-wrap padding-top-30px">
                        <h3 class="widget-title">About the author</h3>
                        <ul class="comments-list padding-top-30px">
                           <li>
                              <form action="<?= base_url().'User/saveComment' ?>" method="post">
                                 <div class="col-sm-12 form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" name="comment"  required="required" placeholder="Enter New Comment" rows="5"><?php if(!empty($this->session->flashdata('comment'))){ echo $this->session->flashdata('comment'); }?></textarea>
                                    <input type="hidden" name="blogId" value="<?= $this->uri->segment('2'); ?>">
                                 </div>
                                 <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfZBhQaAAAAALe1rIuy_PAXrdgph33lrMOiHuRX"></div>
                                 </div>
                                 <div class="col-sm-12">
                                    <button class="btn btn-primary">Post</button>
                                 </div>
                              </form>
                           </li>
                        </ul>
                     </div>
                     <!-- end author-wrap -->
                     <hr>
                     <?php } ?>
                     <div class="comments-wrapper">
                        <h3 class="widget-title"><?= count($comment) ?> Comments</h3>
                        <?php if(!empty($comment)){ ?>
                        <ul class="comments-list padding-top-30px">
                           <?php $i=0; foreach($comment as $val){ $i++; ?>
                           <li>
                              <div class="comment">
                                 <div class="comment-avatar">
                                    <img class="avatar__img" alt="" src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg">
                                 </div>
                                 <div class="comment-body">
                                    <div class="meta-data">
                                       <h3 class="comment__author"><?= $val['name'] ?></h3>
                                       <p class="comment__date"><?= date('d M, Y - h:i A',strtotime($val['created_at'])) ?></p>
                                    </div>
                                    <p class="comment-content">
                                       <?= $val['comment'] ?>
                                    </p>
                                    <?php if(!empty($session)){ ?>
                                    <div class="comment-reply">
                                       <a class="theme-btn reply-comment" href="javascript:void(0)" id="<?= $i ?>">
                                       <span class="la la-mail-reply"></span> Reply
                                       </a>
                                    </div>
                                    <div>
                                       <form action="<?= base_url().'User/replyComment/'.$this->encrypt_id->encryptor('encrypt',$val['id']) ?>" method="post" id="comment-form<?= $i ?>" style="display: none;">
                                          <div class="col-sm-12 form-group">
                                             <label>Comment</label>
                                             <textarea class="form-control" name="comment"  required="required" placeholder="Enter New Comment" rows="5"><?php if(!empty($this->session->flashdata('reply'))){ echo $this->session->flashdata('reply'); }?></textarea>
                                             <input type="hidden" name="blogId" value="<?= $this->uri->segment('2'); ?>">
                                          </div>
                                          <div class="form-group">
                                             <div class="g-recaptcha" data-sitekey="6LfZBhQaAAAAALe1rIuy_PAXrdgph33lrMOiHuRX"></div>
                                          </div>
                                          <div class="col-sm-12">
                                             <button class="btn btn-primary">Reply</button>
                                          </div>
                                       </form>
                                    </div>
                                    <?php } ?>
                                    <!-- <div class="helpful__action d-flex align-items-center">
                                       <span class="helpful__action-text">Was this review helpful?</span>
                                       <button class="btn">Yes</button>
                                       <button class="btn">No</button>
                                       <div class="msg-action-dot">
                                           <div class="dropdown">
                                               <a class="action-dot" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="la la-ellipsis-v"></i>
                                               </a>
                                               <div class="dropdown-menu border">
                                                   <ul>
                                                       <li><a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form"><i class="la la-flag mr-2"></i>Report abuse</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>
                                       </div> -->
                                    <!-- </div> -->
                                 </div>
                              </div>
                              <!-- end comment -->
                              <ul class="comments-reply">
                                 <?php foreach($val['reply'] as $reply){ ?>
                                 <li>
                                    <div class="comment">
                                       <div class="comment-avatar">
                                          <img class="avatar__img" alt="" src="<?= base_url().'assets/user-assets/' ?>images/team7.jpg">
                                       </div>
                                       <div class="comment-body">
                                          <div class="meta-data">
                                             <h3 class="comment__author"><?= $reply['name'] ?></h3>
                                             <p class="comment__date"><?= date('d M, Y - h:i A',strtotime($reply['created_at'])) ?></p>
                                          </div>
                                          <p class="comment-content">
                                             <?= $reply['comment'] ?>
                                          </p>
                                       </div>
                                    </div>
                                 </li>
                                 <?php } ?>
                              </ul>
                              <!-- end comment -->
                           </li>
                           <?php } ?>
                        </ul>
                        <?php } ?>
                        <!-- <div class="see-more-review-btn margin-bottom-50px">
                           <div class="btn-box text-center">
                               <button type="button" class="theme-btn theme-btn-light">load more comments</button>
                           </div> end btn-box --
                           </div> -->
                     </div>
                     <!-- end comments-wrapper -->
                  </div>
                  <!-- end col-lg-8-->
                  <div class="col-lg-4">
                     <div class="sidebar blog-sidebar">
                        <div class="sidebar-widget recent-widget">
                           <h3 class="widget-title">Latest News</h3>
                           <span class="section-divider"></span>
                           <?php  if(!empty($all_news)){  ?>
                           <?php foreach ($all_news as $key => $val) {  ?>
                           <?php if($val['type'] =="news_and_article"){  ?>
                           <div class="recent-item">
                              <div class="recent-img">
                                 <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>">
                                 <img src="<?= base_url().'uploads/home_images/' ?><?= $val['image'] ?>" alt="blog image">
                                 </a>
                              </div>
                              <!-- end recent-img -->
                              <div class="recentpost-body">
                                 <span class="recent__meta"><a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>"><?= date('d-M-yy',strtotime($val['created_at'])) ?> By <?= $val['title2'] ?></a></span>
                                 <h4 class="recent__link">
                                    <a href="<?= base_url().'Edu-Blog/'.$this->encrypt_id->encryptor('encrypt',$val['id'])?>"><?= substr($val['title1'],0,30) ?></a>
                                 </h4>
                              </div>
                              <!-- end recent-img -->
                           </div>
                           <!-- end recent-item -->
                           <?php } } } ?>
                        </div>
                        <!-- end sidebar-widget -->
                     </div>
                     <!-- end sidebar -->
                  </div>
                  <!-- end col-lg-4 -->
               </div>
               <!-- end row -->
            </div>
            <!-- end blog-details-wrap -->
         </div>
         <!-- end container -->
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
      <script src="<?= base_url().'assets/user-assets/' ?>js/develop.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php if(!empty($this->session->flashdata('message'))){ ?>
      <script type="text/javascript">
         swal('warning','<?= $this->session->flashdata('message') ?>','warning');
      </script>
      <?php } ?>
      <?php if(!empty($this->session->flashdata('success'))){ ?>
      <script type="text/javascript">
         swal('success','<?= $this->session->flashdata('success') ?>','success');
      </script>
      <?php } ?>
      <script type="text/javascript">
         $(document).on('click','.reply-comment',function(){
             var id = $(this).attr('id');
             $('#comment-form'+id).toggle();
         })
      </script>
      </body>
</html>