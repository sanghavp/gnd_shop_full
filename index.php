<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GND SHOP</title>
	<link rel="icon" type="icon/image" href="gndshop_page/picture/icon_page.png">
	<!-- bootrap	cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Nhúng link slick slider -->
	<link
		rel="stylesheet"
		type="text/css"
		href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
	/>
	<script
		type="module"
		src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
	></script>
	<script
		nomodule
		src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
	></script>



		<style>
		#mot,#hai{
			border: 1px solid black;
			height: 40px;
		}
	</style>
  	<!-- Style.css -->
    <link rel="stylesheet" href="gndshop_page/css/style.css">
	<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "111761141275476");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    

</head>
<body>

<!--== begin body ==-->


<div class="fluid-container fixed-top">

<?php
	include("adminpage/config/config.php");
	include("gndshop_page/general_module/top.php");
	include("gndshop_page/general_module/navbar.php");

?>
</div>
<?php
	include("gndshop_page/main_page/main.php");
?>


<?php
	include("gndshop_page/general_module/brandclothings.php");
	include("gndshop_page/general_module/fourfeature.php");
	include("gndshop_page/general_module/footer.php");
?>
<!--== BEGIN scrollTop_button ==-->
<div class="scrollTop_button">
	<i class="fas fa-chevron-up"></i>
</div>
<!--== end scrollTop_button ==-->

<!--== bootrap cdn ==-->
			<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/519523246d.js" crossorigin="anonymous"></script>

    	<!-- slick slider -->
	<script
	type="text/javascript"
	src="https://code.jquery.com/jquery-1.11.0.min.js"
	></script>
	<script
	type="text/javascript"
	src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
	></script>
	<script
	type="text/javascript"
	src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
	></script>
    
  	<!-- Custom Script -->
 	<script src="gndshop_page/js/js.js"></script>
 

 <script>
	$(document).ready(function(){
		$(".nav-link").hover(function(){
			x = $(this).attr("id");
			$.get("gndshop_page/general_module/navbar_ajax.php",{iddmajax:x},function(data){
				$(".menu_item_mega").html(data);
			})
		})
	})

 </script>
</body>
<!--== end body ==-->
</html>
