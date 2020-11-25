<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


 <script src="js/main.js"> </script>

 <script>
  
  $(document).ready(function(){
		$('.burger').click(function(){
			$('aside').addClass('active-show');
			$('.close').delay(2000).addClass('close-aside');
		});

		$('.close').click(function(){
			$('aside').removeClass('active-show');
			$('.close').removeClass('close-aside');
		});

  });
</script>