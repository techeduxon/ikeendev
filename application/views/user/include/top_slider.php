
<section class="breadcrumb-area about-breadcrumb">    
<div class="slider-all-content"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $bann = $this->db->where('page',$this->uri->segment(1))->get('tbl_banner')->result(); ?>
                <div class="breadcrumb-content about-breadcrumb-content">
                    <div class="section-heading">
                        <?php if(!empty($bann)){ ?>
                        <h2 class="section__title"><?= $bann[0]->title ?></h2>
                        <?php } ?>
                    </div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>
<div class="slider-all-header">
        <div class="slidet-name">
            <?php if(!empty($bann)){foreach($bann as $val){ ?>
            <div class="item-header">
                <img src="<?= base_url().'uploads/home_images/'.$val->image ?>" alt="">
            </div>
            <?php } }else{ 
                $bann = $this->db->where('id',1)->get('tbl_header_data')->row();?>
                
            <img src="<?= base_url().'uploads/home_images/'.$bann->image ?>" alt="" style="height: 350px !important;">
            <?php } ?>
        </div>
    </div>
</section>