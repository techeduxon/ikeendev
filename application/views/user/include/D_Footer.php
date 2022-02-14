<div id="help_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">HELP</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
            <div class="help_modal">
            <form action="" method="post" id="" autocomplete="off">
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group ">
		                        <input class="form-control" name="" type="text" autocomplete="false" placeholder="Name" required="required">
		                    </div>
		                </div>
                    </div>
                    <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group ">
		                        <input class="form-control" name="" type="email" autocomplete="false" placeholder="E-mail" required="required">
		                    </div>
		                </div>
                    </div>
                    <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group ">
		                        <input class="form-control" name="" type="tel" autocomplete="false" placeholder="Contact Number" required="required">
		                    </div>
		                </div>
                    </div>
                    <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group ">
                                <textarea name="" id=""  class="form-control" autocomplete="false"  rows="4"></textarea>
		                    </div>
		                </div>
		            </div>
		            
		            <div class="col-lg-12">
		                <div class="input-box">
		                    <div class="form-group text-right">
		                        <button class="theme-btn" type="submit">submit</button>
		                    </div>
		                </div>
		            </div>
		        </form>
            </div>
      </div>
      
    </div>

  </div>
</div>


<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<script src="<?= base_url().'assets/user-assets/' ?>js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/popper.min.js"></script>
<script src="<?= base_url().'assets/user-assets/' ?>js/bootstrap.min.js"></script>
<script type="text/javascript">
 
 $(document).on('keyup', '#myInput', function(e){
   e.preventDefault();  
   var keyword = $(this).val();
   $.ajax({  
        url:"<?php echo base_url('user/fetch_search'); ?>",  
        method:"POST",  
        data:{keyword:keyword},  
        success:function(data)  
        {  
         $('#myUL').html(data);
        }  
   })  
}); 

$(document).on('keyup', '#myInput1', function(e){
   e.preventDefault();  
   var keyword = $(this).val();
   $.ajax({  
        url:"<?php echo base_url('user/fetch_search'); ?>",  
        method:"POST",  
        data:{keyword:keyword},  
        success:function(data)  
        {  
         $('#myUL1').html(data);
        }  
   })  
});    

$(document).on('click', 'body', function(e){
    $('#myUL').html('');
    $('#myUL1').html('');
});

$(document).on('click', '.desabal-a', function(){
    this.disabled = true;

});
</script>
