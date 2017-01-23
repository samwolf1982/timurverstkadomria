<?php
include_once 'includes/header.php';
include_once 'includes/carusele.php';
 include_once 'includes/fullscreenfilter.php';
?>
<style type="text/css">
	<?php
	include_once 'css/novostroiki.css';
	//include_once 'libs/jquery.ad-gallery.css';
	?>

</style>
<script type="text/javascript">
	<?php
	include_once 'js/novostroiki.js';
	?>

</script>

<script type="text/javascript" src="libs/adg-galery/jquery.ad-gallery.js"></script>
<!-- <div class="container">
  <div class="row">
    <div class="col-*-*"></div>
  </div>
  <div class="row">
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
  </div>
  <div class="row">
    ...
  </div>
</div>
-->


<!-- breadcrumb -->
<div class="container">
	<div class="row">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a  class="clear_link"  href="">Доминанта</a></li>
			<li class="breadcrumb-item"><a  class="clear_link"  href="">Library</a></li>
			<li class="breadcrumb-item active">Поиск</li>
		</ol>
		
		
	</div>
</div>
<!-- end breadcrumb -->

<!-- sortline -->
<div class="container sortline">
	<div class="row" style="    font-family: 'Open Sans Condensed', sans-serif;">
	 <div class="col-sm-12 col-md-4" style="padding: 0;">
	 <div class="btn btn-block fill_button">

	 <span class="buy_text">Реализовано м<sup>2</sup></span>
	
	<span class="clock"></span>
	  <span class="buy_text"> м<sup>2</sup></span>	
	 </div> 	
	 


	 </div>
	 <div class="col-sm-6 col-md-2">
	 	 <div class="btn btn-block fill_button">

	 <span class="buy_text">Приморский</span>		
	 </div> 
	 </div>
	 <div class="col-sm-6 col-md-2">
	 	 	 <div class="btn btn-block fill_button">

	 <span class="buy_text">Киевский</span>		
	 </div> 
	 </div>
	 <div class="col-sm-6 col-md-2">
	 	 	 <div class="btn btn-block fill_button">

	 <span class="buy_text">Малиновский</span>		
	 </div> 
	 </div>
	 <div class="col-sm-6 col-md-2">
	 	 	 <div class="btn btn-block fill_button">

	 <span class="buy_text">Cуворовский</span>		
	 </div> 
	 </div>
	

	</div>

</div>
<!-- end sortline -->


<!-- main wrap content -->
<div class="container wrap_content">

	<div class="row">
		<div  class="col-md-9" style="padding-right: 0; ">

			<div class="wrap_catalog  nodecor"> 



   <?php foreach (range(0, 2) as $k => $v) {?>

 <div class="col-sm-12 cards-row " > 
   <?php foreach (range(0, 2) as $key => $value) {?>
   
    <div class="col-sm-6 col-md-4 ">
  <a href=""> <div class="thumbnail">
      <img src="https://1.bp.blogspot.com/-aFQ-W_KTFWQ/V6BdtpSUy6I/AAAAAAAAAH4/xD_U-BYItSsNvk1UGfROqLBzzU1h32oXQCLcB/s320/4-diwali-greeting-cards-by-ajay-acharya.jpg" alt="Bootstrap Thumbnail: Beautiful Bootstrap Thumbnail like Material Design Cards">
      <div class="caption nopadding">
      <div class="wrap_h3">
        <h3>Bootstrap Thumbnail Customization</h3>
        </div>
        <p class="card-description card_region">
        <strong class="clear_link">Район: </strong> <span style="text-transform: uppercase;"> Киевский </span> <strong>
        </p>

                <p class="  card-description ">
        <strong class="clear_link">Цены: </strong> <span class="clear_link"> от 12 000 грн/м <sup>2</sup></span>
        </p>
  
      </div>
    </div>
</a>
</div>
<?php } ?>    
</div>

<?php } ?> 

				<!-- end item catalo room -->
<!--               <div class="col-md-12">
              	<ul class="pagination">
  <li><a href="">«</a></li>
  <li><a href="">1</a></li>
  <li><a class="active" href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li><a href="">5</a></li>
  <li><a href="">6</a></li>
  <li><a href="">7</a></li>
  <li><a href="">»</a></li>
</ul>

              </div> -->
              <div class="col-md-12">
              	<ul class="pagination">
  <li><a href="">«</a></li>
  <li><a href="">1</a></li>
  <li><a class="active" href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li><a href="">5</a></li>
  <li><a href="">6</a></li>
  <li><a href="">7</a></li>
  <li><a href="">»</a></li>
</ul>

              </div>


			</div> 
			<!-- end wrap content -->




		</div>


		<!-- side bar -->
		<div class="col-md-3 text-center" style="    padding: 0;">
			<div class="row">



				<div class="left-site-bar">

 




					<div class="news-box wrap_gogle_map news-title-obj">
					Обект на карте
					<div>&nbsp;</div>
						<div id="map"></div>
						<div class="pull-left">
							<a href="" class="clear_link"><i class="icon-map"></i>На большой карте</a>
						</div>



					</div> 

					<!-- end news box -->

					<div class="news-box viewed_rooms hide">
						<div class="news-title"><a href="">Недавно смотрели</a> </div>


           <?php
           foreach (range(0,4) as $key => $value) { ?>
         			<a href="" class="clear_link">
							<div class="thumbnail  span4 clear_border">
								<img src="http://placehold.it/120x160" alt="">
								<div class="caption">
									<h4 class="clear_link">85 000 $</h4>
									<p>г. Одесса</p>
									<p>ул. Балковская 95а</p>
									<!-- <p><a href="" class="clear_link">Вернуться</a></p> -->
								</div>
							</div>
						</a>
         <?php  }?>			



					</div> 




				</div>



			</div>


		</div>
		<!-- end left sidebar -->







	</div> 
	<!-- end row -->
</div>
<!--end  main wrap content -->

































<div class="container">
	<!-- Example row of columns -->
	<div class="row">

		<div id="catalog5"  >
			<div class="catalog-title-about"><span>Наши партнеры</span></div>

			<div class="catalog">


				<div class="col-md-12">
					<br>
					<div id="myCarousel5" class="carousel slide" data-ride="carousel" >
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel5" data-slide-to="1"></li>
							<li data-target="#myCarousel5" data-slide-to="2"></li>
							<li data-target="#myCarousel5" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">


							<?php
							foreach (range(0, 4) as $key => $value) {?>
							<div class="item <?= $value==0?'active':'';?> ">
								<div class="wrap_carousele">




									<?php foreach (range(0, 2) as $k => $v) {?>


									<div class="col-sm-4 clear_padding wrap_item partner_padding">
										<div class="col-sm-12 clear_padding">
											<div class="thumbnail  span5">
												<a href="">	<img class="span3" src="/img/verstka/intostroi-200x50.png" alt=""></a>
												<div class="caption">

												</div>
											</div>
										</div>

									</div>




									<?php }
									?>



								</div>
							</div>  
							<?php }
							?>




						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control  hide" href="#myCarousel5" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control hide" href="#myCarousel5" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>



			</div>
			<li >
				&nbsp; 
				<!-- !!!!! обязательно ??? потом подправить -->
			</li>
		</div>


	</div>	</div>















	<script type="text/javascript">


	</script>











		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron bottom-line">

			<div class="row">

				<div class="col-md-6 col-lg-6 " style="padding-right: 0;">
					<div class="pull-right">
						<a href=""><img src="img/verstka/footl.png"></a></div>
					</div>
					<div class="col-md-6 col-lg-6" style="padding-left: 0;">

						<div class="pull-left" >
							<a href=""><img src="img/verstka/footr.png"></a></div>
						</div>
					</div>

				</div>


			</div>




		<!-- 	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB2kS5Y_XmTaIwC2h0uFxml1SDnrqYqnw&callback=initMap"
			async defer></script> -->
			<!--footer start from here-->
			<?php
			include_once 'includes/footer.php';
			?>