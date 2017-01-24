<?php
include_once 'includes/header.php';
//include_once 'includes/carusele.php';
// include_once 'includes/fullscreenfilter.php';
?>
<style type="text/css">
	<?php
	include_once 'css/room.css';
	//include_once 'libs/jquery.ad-gallery.css';
	?>

</style>
<script type="text/javascript">
	<?php
	include_once 'js/room.js';
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
		<div class="backtolist"><a class="btn btn-default" href="">Вернуться к списку</a>	</div>
		
	</div>
</div>
<!-- end breadcrumb -->

<!-- sortline -->
<div class="container sortline">
	<div class="row" style="    font-family: 'Open Sans Condensed', sans-serif;">
		<div class="col-sm-8">
		<div class="col-sm-12">
			<h1 class="title_room">Продажа двухкомнатной квартиры в Одессе по ул. Балковская</h1>
		</div>
		<div class="col-sm-12">
		<div class="col-sm-6"><a href="" class="clear_link"><i class="icon-like "></i>Добавить в избранное</a></div>
		<div class="col-sm-6">	<a class="btn btn-default pull-right" href="">Предложить торг</a></div>

		
		</div>
		
			

		</div>
		<div class="col-sm-4 price_block">
			<div class="col-sm-12 clear_link">89 000 $</div>
			<div class="col-sm-12">1 100 $м<sup>2</sup></div>
			<div class="col-sm-12">
			 	<a class="btn btn-default pull-left" href="">грн</a>
			 	<a class="btn btn-default pull-left" href="">$</a>
			 	<a class="btn btn-default pull-left" href="">€</a>
			</div>
		</div>

	</div>
	<div class="row">
	</div>
</div>
<!-- end sortline -->


<!-- main wrap content -->
<div class="container wrap_content">

	<div class="row">
		<div  class="col-md-9" style="padding-right: 0; ">

			<div class="wrap_catalog"> 





				<?php  
				foreach (range(0, 0) as $key => $value) { ?>

				<div id="catalog" class="catalog_upper">
					<!--   <div class="container"> -->
					<div class="row">

<div class="col-sm-12">
<div class="up_slider">
 <ul class="bxslider1 ">

     <?php foreach (range(0, 8) as $key => $value) { ?> 
    <li>
  <div class="wrap_img">
  <a class="fancybox" rel="group" href="/img/verstka/img2-500x350.jpg"> <img src="/img/verstka/img2-500x350.jpg" class="full_with_img" alt="Chania"> </a>
  </div>
  </li>
    <?php } ?>

</ul>
 </div>
<div id="bx-pager-r">





 <ul class="bxslider2">
     <?php foreach (range(0, 8) as $key => $value) { ?> 
 <li>
  <a data-slide-index="<?=$value;?>" href=""><img class="img-thumbnail" src="/img/verstka/img2-500x350.jpg" />
 </a>
 </li>
     <?php } ?>

 </ul>
</div>



<style type="text/css">

</style>

</div>




<div class="col-sm-6">
	
 <div class="wrap_p">
 	<p class="wrap_up_room_intro"> <a href="" class="clear_link"><i class="icon-like "></i>Двухкомнатная квартира</a></p>
 	<p><a href="" class="clear_link"><i class="icon-detail "></i>4-й этаж 9-этажного дома, кирпичный</a> </p>
 	<p><a href="" class="clear_link"><i class="icon-map "></i>Приморский р-н</a></p>
 	<p><a href="" class="clear_link"><i class="icon-pdf "></i>Скачать буклет</a></p>
 </div>
</div>
<div class="col-sm-6">

 <div class="wrap_p">
 	<p>Общая - <strong>42,5м<sup>2</sup></strong></p>
 		<p>Жылая - <strong>33,5м<sup>2</sup></strong></p>
 			<p>Кухня - <strong>10,5м<sup>2</sup></strong></p>
 	<p class="intro">Балковская/"Семь Самураев", новый дом, сдан. Общая-120/30+24+16/12-кухня, евроремонт, кухня расскрыта, увеличена. Две спальни с эркерами</p>
 	<p class="wrap_room"> <label for="id_room" class="label_id_room">ID: </label>	 <input id="id_room" type="text" readonly  value="999999" class="text-center"></p>
 		        <div class="pull-right total_watch">Просмотров всего: 25</div><br>
 		 		<div class="pull-right total_watch">Просмотров в этом месяце: 125</div>
 </div>

</div>

<div class="col-sm-12">
	<h2 style="padding-left: 1em;">Описание</h2>
  <div class="panel panel-default clear_border_ulr">
    <div class="panel-body "><div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde iste assumenda voluptatum ratione quia, aperiam mollitia dolorem quibusdam ipsa ut expedita nihil perferendis asperiores consequatur reiciendis in provident iusto minima!</div>
							<div>Non cum, voluptate perferendis dolores laborum debitis, fugiat dolorum iure repellendus vel placeat soluta cumque a, corporis, beatae doloremque laudantium? Quae expedita earum odit reiciendis aliquid rerum aspernatur hic dolore!</div></div>
  </div>
    <div class="panel panel-default clear_border">
    <div class="panel-body ">
    <div class="send-request">
                    <span>Хотите узнать об обьекте больше подробностей?</span>
                    <span><a class="clear_link" href="">Пришлите запрос в офис продаж</a> </span>
                    <span>или позвоните по телефону</span>
                    <span><a class="clear_link" href="">8 800 500 1990</a> </span>
    </div>
	</div>
	  <div class="panel-body ">
    <div class="send-request">
                   
                    <span><a href="" class="clear_link pull-left"><i class="icon-like "></i>Добавить в избранное</a></span>
                    

<div class="next-object scale pull-right">
                        <a  href="">
                            <div class="next-text btn btn-default " style="float: left;">Следующий обьект</div>
                            <div class="next-icon" style="float: left;"></div>
                        </a>
                    </div>
  
    </div>
	</div>
  </div>
</div>
<script type="text/javascript">
	
</script>
<style type="text/css">

</style>
<!-- 
						<div class="col-sm-12 description_room">
							<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde iste assumenda voluptatum ratione quia, aperiam mollitia dolorem quibusdam ipsa ut expedita nihil perferendis asperiores consequatur reiciendis in provident iusto minima!</div>
							<div>Non cum, voluptate perferendis dolores laborum debitis, fugiat dolorum iure repellendus vel placeat soluta cumque a, corporis, beatae doloremque laudantium? Quae expedita earum odit reiciendis aliquid rerum aspernatur hic dolore!</div>	

						</div>
						<div class="col-sm-4 text-center">
							<a href="" class="clear_link"><i class="icon-map"></i>На карте</a>
						</div>
						<div class="col-sm-4 text-center">
							<a href="" class="clear_link"><i class="icon-question"></i>Задать вопрос</a>
						</div>
						<div class="col-sm-4 text-center">
							<a href="" class="clear_link"><i class="icon-like"></i>Добавить в избранное</a>
						</div> -->

					</div>
					<!-- </div> -->




					<li >
						&nbsp; 
						<!-- !!!!! обязательно ??? потом подправить -->
					</li>
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



			</div> 
			<!-- end wrap content -->




		</div>


		<!-- side bar -->
		<div class="col-md-3 text-center" style="    padding: 0;">
			<div class="row">



				<div class="left-site-bar">




					<div class="news-box wrap_contact_form">
					
<div class="contact-form-border">
                    <div class="contact-form-title">
                        <a href="">Филиал №1</a>
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




					<div class="news-box wrap_gogle_map">
					Обект на карте
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