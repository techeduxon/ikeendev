<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>	
<script type="text/javascript">
$(document).on('click','.can-pan',function(event){
   event.preventDefault();
   // alert('hi');
});
$(document).on('click','.hide-nshow-read1',function(){

var ids = $(this).attr('idd');
if($(this).text() === 'Read More'){

  $('.'+ ids).addClass('active');
  $(this).html('Read Less');
}else{
  $('.'+ids).removeClass('active');
  $(this).html('Read More');
}


});
</script>
