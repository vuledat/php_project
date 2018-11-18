<script>
	$(document).ready(function () {


			$(function(){
			  $(window).scroll(function(){
			  	var x = screen.height;
			    var aTop = $(window).height();
			    if($(this).scrollTop()>= aTop/2){
			        $('#scroll').css({"opacity": "1" });
			    }
			    else{
			    	$('#scroll').css({"opacity": "0" });
			    }
			  });
			});
			$('#scroll a').click(function () {
	            $('body,html').animate({
	                scrollTop: 0
	            }, 1000);
	            return false;
	        });
		});
</script>
<div id="scroll" style="position: fixed; bottom: 10px; right: 10px;">
	
	<a href="#"><i class="fas fa-arrow-circle-up text-warning fa-3x"></i></a>
</div>