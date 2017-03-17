<?php
include_once 'includes/header.php';
// include_once 'includes/carusele.php';
//  include_once 'includes/fullscreenfilter.php';
?>



<!-- vertical carusele -->



<style type="text/css">
	<?php
	include_once 'css/filial.css';
	//include_once 'libs/jquery.ad-gallery.css';
	?>

</style>
<script type="text/javascript">
	<?php
	include_once 'js/filial.js';
	?>

</script>




<!-- <script type="text/javascript" src="libs/adg-galery/jquery.ad-gallery.js"></script> -->
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



<!-- button -->
<div class="container sortline" style="padding-top: 1em;">
	<div class="row" style="    font-family: 'Open Sans Condensed', sans-serif;">


		<div class="col-sm-12 pull-left">
			<h1 class="title_room some_info
			broni_info">Наша команда</h1>	
		</div>	 


	</div>
</div>
<!-- end button -->


<!-- main wrap content -->
<div class="container wrap_content">

	<div class="row">
		<div  class="col-sm-12 col-md-12 col-lg-9" style="padding-right: 0; padding-left: 0; ">

			<div class="wrap_catalog  "> 

				<div class="col-sm-12">









					<!-- filter -->


					<div class="col-sm-12 col-md-12 col-lg-12 hide">
						<form action="" class="form-inline">
							<div class="col-sm-6 col-md-12 wrap_fields">
								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">
											<label class="control-label" for="search_id">Поиск по ID:</label>
											<input type="text" class="form-control" id="search_id" placeholder="Введите ид">
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">

											<input style="width: 60%; margin-left: 4px;" type="text" class="form-control pull-right" id="price_from" placeholder="От"><label class="control-label pull-right" for="price">Цена</label>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">   
											<input type="text" class="form-control" id="price_to" placeholder="До">

										</div>
									</div>
								</div> <!-- end row -->


								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">
											<label class="control-label rigth_district_sm" for="all_district">Выберите район</label>
											<input type="text" class="form-control rigth_district_sm" id="all_district" placeholder="Все районы">
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">

											<input type="text" class="form-control" id="district" placeholder="Район">
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">   
											<input type="text" class="form-control" id="count_rooms" placeholder="Количество комнат">
										</div>
									</div>
								</div> <!-- end row -->


								<div class="row">
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">
											<label class="control-label rigth_district_sm" for="all_district">Тип недвижимости</label>
											<input type="text" class="form-control rigth_district_sm" id="type_realty" placeholder="Квартира">
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">

											<input type="text" class="form-control" id="some_type" placeholder="Любой тип">
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div class="form-group pull-right">   
											<input type="text" class="form-control" id="buy" placeholder="Покупка">
										</div>
									</div>
								</div> <!-- end row -->


							</div>
							<div class="col-sm-6 col-md-12 wrap_button">
								<div class="col-md-6 text-center "><a href="" class="btn btn-default btn-block" > онлайн консультация специалиста</a></div>
								<div class="col-md-6 text-center hide "><a href="" class="btn btn-default btn-block" > заказать звонок</a></div>
								<div class="col-md-6 text-center "><a href="" class="btn btn-default btn-block" > поиск</a></div>
							</div>
						</form>


					</div>

					<!-- end filter -->

					<div class="hidden-sm  hidden-md col-md-3 ">
						<div class="wrap_img">
							<a href="">  <img src="/img/verstka/left.jpg" alt="..."> </a>
						</div>
					</div>
					<div class="col-sm-6    col-md-5 ">

						<table class="table table-condensed">

							<tbody>
								<tr>
									<td style="padding-top: 0;"><img src="/img/verstka/house.png"></td>
									<td style="padding-top: 0;">
										<div  class="adress">Адрес: lorem lor loerwsxs sdeg</div>
										<div class="adress">E-mail: demo@sobcak.com</div>
									</td>   
								</tr>
								<tr>
									<td style="padding-top: 0;"><img src="/img/verstka/phone2.png"></td>
									<td style="padding-top: 0;">
										<div  class="tel">1234567989</div>
										<div class="tel">1234567989</div>
										<div class="tel">1234567989</div>
										<div class="tel">1234567989</div>
									</td>   
								</tr>




							</tbody>
						</table>



					</div>
					<div class="col-sm-6    col-md-4">

						<table class="table table-condensed">

							<tbody>
								<tr>
									<td style="padding-top: 0;"><img src="/img/verstka/clock.png"></td>
									<td style="padding-top: 0;">
										<div  class="adress">пн-пт 9:00-18:00</div>
										<div class="adress">сб-вс:<span style="color:rgba(159,20,90,1)">выходной</span></div>
									</td>   
								</tr>
								<tr>
									<td style="padding-top: 0;"><img src="/img/verstka/mail2.png"></td>
									<td style="padding-top: 0;">
										<div  class=""><a href="" class="clear_link">Оправить заявку в офис</a></div>

									</td>   

								</tr>

								<tr>
									<td style="padding-top: 0;"><img src="/img/verstka/phone2.png"></td>
									<td style="padding-top: 0;">
										<div  class=""><a href="" class="clear_link">Заказать звонок</a></div>

									</td>   
								</tr>




							</tbody>
						</table>


					</div>


					<div class="col-sm-12 wrap_map" style="height: 350px;" >

						<div id="map"></div>
					</div>

					<div class="col-sm-12">

						<h2 class="page-header">Объекты филиала №2</h2>
					</div>


					<?php foreach (range(0, 5) as $key => $value) { ?>

					<div class="col-sm-12 wrap_map2">

						<div class="">

							<div class="col-sm-3 col-md-2 ">
								<img class="img-responsive" src="/img/verstka/78787878-320x220.jpg">
							</div>    
							<div class="col-sm-3 col-md-2 wrap_price">

								<p>333 333 333 UAN</p>
								<p>25 000 $</p>
							</div>



							<div class="col-sm-6 col-md-3 ">
								<p>Одесса/Приморский</p>
								<p>Аркадиевский переулок</p>
							</div>
							<div class="col-sm-6 col-md-2 ">
								<p class="wrap_price">
									2-комнатная квартира
								</p>
							</div>
							<div class="col-sm-6 col-md-3 ">
								<div>
									<p style="display:block !important">Общая площадь: 97 м²</p>
									<p>Жилая - 56,0 м²</p>
									<p>Кухня - 7,6 м²</p>
								</div>
							</div>



						</div></div>

						<?php } ?>



						<div class="col-sm-12">
							<div class="show-all-objects pull-left">
								<a class="clear_link" href="">Смотреть все обекты филиала №2</a>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="">
								<div class="form-field">

									<div class="input-field">
										<input name="s_id" type="text" id="s_id" placeholder="Введите ID">
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-6 text-center "><a href="" class="btn btn-default btn-block fill_button"> поиск</a></div>


						<div class="col-sm-12">
							<div class="show-all-objects pull-left">
								<a class="clear_link" href="">Расширенный поиск</a>
							</div>
						</div>













					</div>
















				</div> 
				<!-- end wrap content -->




			</div>


			<!-- side bar -->
			<div class="col-sm-12 col-md-12 col-lg-3 text-center" style="    padding: 0;">
				<div class="row">



					<div class="left-site-bar">





<!-- 						<div class=" col-sm-12">


							<div class="col-sm-6">
								<div class="thumbnail ">
									<a href="">  <img src="/img/verstka/manchenko.jpg" alt="..."> </a>
									<div class="caption">
										<h4>Котельникова Анна Геннадиевна</h4>
										<p>Агент по недвижимости </p>
										<p>(063) 132-80-08</p>
										<p>(098) 495-06-23</

										</div>
									</div>
								</div>

							
							<div class="col-sm-6">

								<div class="thumbnail ">
									<a href="">  <img src="/img/verstka/manchenko.jpg" alt="..."> </a>
									<div class="caption">
										<h4>Котельникова Анна Геннадиевна</h4>
										<p>Агент по недвижимости </p>
										<p>(063) 132-80-08</p>
										<p>(098) 495-06-23</

										</div>
									</div>
								</div>








</div>
		 -->					




 












							<div class="news-box wrap_contact_form">

								<div class="contact-form-border">
									<div class="contact-form-title page-header">
										<h3 > <a href="" class="clear_link nodecor">Директор</a></h3>
									</div>

									<div class="thumbnail right-caption span4">
										<img class="span2" src="/img/verstka/manchenko.jpg" width="140" alt="">
										<div class="caption">
											<p>Ваш эксперт</p>		 														
											<h5 class="title_new"><a href="">Манченко Марина Юрьевна</a></h5>

											<p class="title_new"> <i class=""><span class="glyphicon glyphicon-earphone clear_link"></span>(048) 702-83-82,<wbr><br>(048) 703-01-95</i></p>

											<p class="title_new"><span class="fa fa-mobile  clear_link"></span><i class="">(048) 702-83-82,<br> (048) 703-01-95</i> </p>

											<i class="pull-right2">Время работы офиса:
												пн-пт: с 09:00 до 21:00
												сб-вс: с 10:00 до 18:00</i>

											</div>
										</div>

										<!-- end expert info -->
										<!-- contact form -->
										<div class="contact-form-box">
											<form class="contact-form" action="" method="post">
												<!-- name -->
												<div class="form-field">
													<div class="input-img"><img src="/img/verstka/user.png"> </div>
													<div class="input-field">
														<input name="name" type="text" id="name" placeholder="Ваше имя">
													</div>
												</div>
												<!-- phone -->
												<div class="form-field">
													<div class="input-img"><img src="/img/verstka/phone2.png"> </div>
													<div class="input-field">
														<input name="phone" type="text" id="phone" placeholder="Номер телефона">
													</div>
												</div>
												<!-- mail -->
												<div class="form-field">
													<div class="input-img"><img src="/img/verstka/mail2.png"> </div>
													<div class="input-field">
														<input name="email" type="text" id="email" placeholder="Эл. почта">
													</div>
												</div>
												<!-- massage -->
												<div class="form-text-area">
													<div class="input-img"><img src="/img/verstka/message.png"> </div>
													<div class="input-area">
														<textarea id="textarea" name="message" placeholder="Интересует продажа двухкомнатной квартиры в Одессе по ул. Балковская"></textarea>
													</div>
												</div>
												<!-- submit -->
												<div class="form-submit scale"><br>                               <a href="" class="btn btn-default">Свяжитесь со мной</a>  
												</div>
											</form>
										</div>
										<!-- end contact form -->
									</div>



								</div> 


           
          <h2 class="clear_link">Наша команда</h2><br>


          <div class="news-box  some_wrap">


<div class="">
<?php foreach (range(0, 3) as $key => $value) { ?>

         <div class="col-sm-6 nopadding">
         			<div class="thumbnail ">
									<a href="">  <img src="/img/verstka/manchenko.jpg" alt="..."> </a>
									<div class="caption">
										<h4>Котельникова Анна Геннадиевна</h4>
										<p>Агент по недвижимости </p>
										<p>(063) 132-80-08</p>
										<p>(098) 495-06-23</p>

										</div>
						</div>

         </div>
         <div class="col-sm-6 nopadding">
         		<div class="thumbnail ">
									<a href="">  <img src="/img/verstka/manchenko.jpg" alt="..."> </a>
									<div class="caption">
										<h4>Котельникова Анна Геннадиевна</h4>
										<p>Агент по недвижимости </p>
										<p>(063) 132-80-08</p>
										<p>(098) 495-06-23</p>

										</div>
						</div>
         </div>

<?php } ?>
				
			</div>			
								

      <div class="clearfix"></div>
       </div>   










						


						</div>
						<!-- end left sidebar -->







					</div> 
					<!-- end row -->
				</div>
				<!--end  main wrap content -->
































<div class="clearfix"></div>
				<div class="container">
					<!-- Example row of columns -->
					<div class="row">

						<div id="catalog5"  >
							<div class="catalog-title-about"><span>Наши партнеры</span></div>

							<div class="catalog">


								<div class="col-md-12">
									<br>
									<div id="myCarousel5" class="carousel vertical slide" data-ride="carousel" >
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