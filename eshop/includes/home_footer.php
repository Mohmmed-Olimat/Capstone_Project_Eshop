
<footer class="bgblack p-t-25 p-b-20" id='footer'><!-- Footer Start -->
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-4">
<h4 class="stext-301 cl0 p-b-15">
Categories
</h4>
<ul>
	<?php
	if($data=$cat->readAll()){
    foreach ($data as $key => $value) { 
echo"
<li class='p-b-10'>
<a href='products.php?catid={$value['cat_id']}&name={$value['cat_name']}' class='stext-107 cl7 hov-cl1 trans-04'>
{$value['cat_name']}
</a>
</li>";
}
}
?>


</ul>
</div>
<div class="col-sm-6 col-lg-4">
<h4 class="stext-301 cl0 p-b-15">
Help
</h4>
<ul>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Track Order
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
Shipping
</a>
</li>
<li class="p-b-10">
<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
FAQs
</a>
</li>
</ul>
</div>
<div class="col-sm-6 col-lg-4">
<h4 class="stext-301 cl0 p-b-15">
GET IN TOUCH
</h4>
<p class="stext-107 cl7 size-201">
Any questions? call us on (+1) 96 716 6879
</p>
<p class="stext-107 cl7 size-201">
Need help? send email at  Eshop@info.com
</p>
<div class="p-t-27">
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-facebook"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-instagram"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-twitter"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-pinterest-p"></i>
</a>
<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
<i class="fa fa-youtube-play"></i>
</a>
</div>
</div>
</div>
<div class="p-t-20">

<p class="stext-107 cl6 txt-center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is from <a href="https://colorlib.com/" target="_blank"> Colorlib </a>Edited by <a href="" target="_blank"> Olimat </a>

</p>
</div>
</div>
</footer>

<div class="btn-back-to-top" id="myBtn">
<span class="symbol-btn-back-to-top">
<i class="zmdi zmdi-chevron-up"></i>
</span>
</div>



<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})

		$('.smooth-goto').on('click', function() {  
    $('html, body').animate({scrollTop: $(this.hash).offset().top - 50}, 1000);
    return false;
});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>

<script src="vendor/parallax100/parallax100.js"></script>
<script>
        $('.parallax100').parallax100();
	</script>

<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>

<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"603f65acdfcedfa9","version":"2020.12.1","si":10}'></script>
</body>
</html>