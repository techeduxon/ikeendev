<?php

class Course_filter_model extends CI_Model
{
  public function searc_f($data){
    if (isset($data)) {
        $query = "SELECT DISTINCT  trainig_id FROM tbl_training_detail WHERE `status` = 1";
    // if (isset($data["minimum_price"], $data["maximum_price"]) && !empty($data["minimum_price"]) && !empty($data["maximum_price"])) {
    //         $query .= "
    //    AND product_price BETWEEN '" . $data["minimum_price"] . "' AND '" . $data["maximum_price"] . "'
    //   ";
    //     }
        
        // if (!empty($data["search"])) {
        //     $query .= " AND month IN('" . $brand_filter . "') ";
        // }

        if (!empty($data["man"])) {
            $brand_filter = implode("','", $data["man"]);
            $query .= " AND month IN('" . $brand_filter . "') ";
        }
        if (!empty($data["mode_c"])) {
            $color_filter = implode("','", $data["mode_c"]);
            $query .= "
       AND mode IN('" . $color_filter . "')
      ";
        }
        if (!empty($data["timings"])) {
            $gender_filter = implode("','", $data["timings"]);
            $query .= "
       AND timing IN('" . $gender_filter . "')
      ";
        }

        $query2 = $this->db->query($query);
        $result = $query2->result_array(); 
        
        $output    = '';

if(!empty($result)){ foreach ($result as $row){
    $value = $this->db->select('*')->Where('id',$row['trainig_id'])->get('tbl_training')->row();
if(!empty($value)){
$details = $this->db->select('*')->Where('trainig_id',$value->id)->get('tbl_training_detail')->result();
 /*if (!empty($data["search"])) {
    if($data["search"] == $value->title){*/
?>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
        <div class="box-content">
            <div class="image">
                <img src="<?= base_url().'uploads/home_images/'.$value->image ?>">
            </div>
            <div class="name-content">
                <h6><?= $value->title ?></h6>
                <p><i class="fa fa-eercast" aria-hidden="true"></i> Authorised</p>
            </div>
            <div class="sider-content">
                <div class="console-slider-cor">

                    <?php if(!empty($details)){
                        foreach ($details as $val) { ?>
                    <div class="item-cord">
                        <div class="left">
                            <h3><?= $val->month ?></h3>
                            <p><?= date('d', strtotime($val->start_date)).' - '.date('d', strtotime($val->end_date)) ?></p>
                            <p><?= date('h:i A', strtotime($val->start_time)) ?></p>
                            <p><?= date('h:i A', strtotime($val->end_time)) ?></p>
                        </div>

                        <div class="right">
                            <div class="top">
                                <h6>₹ <?= $val->mrp ?></h6>
                                <h6>₹ <?= $val->sell_price ?></h6>
                            </div>
                            <div class="min">
                                <h6><i class="fa fa-desktop" aria-hidden="true"></i> <?= $val->mode ?></h6>
                                <h6><i class="fa fa-free-code-camp" aria-hidden="true"></i> <?= $val->timing ?></h6>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>  
        </div>
    </div>
<?php /*} }*/
                    } } } } 
    }
 }
}

?>