<?php
include_once 'includes/header.php';
include_once 'includes/carusele.php';
include_once 'includes/fullscreenfilter.php';
?>






<!-- main wrap content -->
<div class="container wrap_content">

	<div class="col-md-12 text-center">
		
	</div>

	<!-- side bar -->
	
	<div class="col-md-2 text-center">

		<div class="row">



			<div class="left-site-bar">

				<div class="news-box">
	


				</div> 

				<!-- end news box -->

	<div class="news-box">


				</div> 

			</div>



		</div>

   
		</div>
		<!-- end left sidebar -->
		<div  class="col-md-10" style="padding-right: 0; ">

			<div class="wrap_catalog"> 

				<div id="catalog" class="catalog_upper" >
					<div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

					<div class="catalog">
					<div class="panel" style="padding-top: 1em;">
					
 <a href="dominanta.php" target="_blank" class="btn btn-default btn-block ">Главная</a>

 <a href="search_res.php"  target="_blank" class="btn btn-default btn-block ">Поиск</a>



 <a href="room.php" target="_blank"  class="btn btn-default btn-block ">Карточка</a>
  <a href="novostroiki.php"  target="_blank" class="btn btn-default btn-block ">Новостройки</a>


 <a href="novostroiki_podrobno.php"  target="_blank" class="btn btn-default btn-block ">Новостройки подробно</a>

 <a href="" class="btn btn-default btn-block ">Главная</a>
 <a href="" class="btn btn-default btn-block ">Главная</a>

					</div>
                        
				           

						</div>
						<li >
							&nbsp; 
							<!-- !!!!! обязательно ??? потом подправить -->
						</li>
					</div>




			



























				</div> 
				<!-- end wrap content -->




			</div>
		</div>
		<!--end  main wrap content -->





























		<div class="container hide">
			<!-- Example row of columns -->
			<div class="row">
							<div id="catalog_partners" class="catalog_partners" >
					<div class="catalog-title-about"><span>Наши партнеры</span></div>

					<div class="catalog">

						<?php $max=3;
						foreach (range(0, $max) as $key => $value) {?>

						<div class="col-md-3 col-sm-3">
							<div class="tile">
								<!-- one item -->
								<?php
								$max2=0;
								foreach (range(0, $max2) as $key => $value) {?>
								<div class="catalog-item">
									  <div class="thumbnail user_thumbnail">
      <img src="http://test.dominanta-d.com/image/cache/catalog/1_main/brands/intostroi-200x50.png" alt="...">
      <div class="caption">
        <!-- <h3 class="user_name">Екатерина</h3>
        <h5 class="user_job">Топ-менеджер</h5>
       <div class="review-text">
                   С Доминантой у меня получилось реализовать практически невозможную сделку, была очень сложная недвижимость! Я очень довольна			   				   				                   </div> -->
        
      </div>
    </div>


									
									</div>
									<!-- end item -->


									<?php }
									?>




								</div>

							</div>





							<?php }
							?>






						</div>
						<li >
					<!-- 	<div class="col-md-12 text-center "><a href="#" class="btn btn-default btn-block recall" > Оставить отзыв</a></div> -->
							<!-- !!!!! обязательно ??? потом подправить -->
					    &nbsp;
						</li>
					</div>
			</div>

			<hr>
		</div> <!-- /container -->





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


<div id="map"></div>
		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
							<div id="catalog_about" class="catalog_upper" >
					<div class="catalog-title-about"><span>Отзывы о нас</span></div>

					<div class="catalog">

						<?php $max=3;
						foreach (range(0, $max) as $key => $value) {?>

						<div class="col-md-3 col-sm-3">
							<div class="tile">
								<!-- one item -->
								<?php
								$max2=0;
								foreach (range(0, $max2) as $key => $value) {?>
								<div class="catalog-item">
									  <div class="thumbnail user_thumbnail">
      <img  src="/img/verstka/3333333.jpg" alt="...">
      <div class="caption">
        <h3 class="user_name">Екатерина</h3>
        <h5 class="user_job">Топ-менеджер</h5>
       <div class="review-text">
                   С Доминантой у меня получилось реализовать практически невозможную сделку, была очень сложная недвижимость! Я очень довольна			   				   				                   </div>
        <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
      </div>
    </div>


									
									</div>
									<!-- end item -->


									<?php }
									?>




								</div>

							</div>





							<?php }
							?>






						</div>
						<li >
						<div class="col-md-12 text-center "><a href="#" class="btn btn-default btn-block recall" > Оставить отзыв</a></div>
							<!-- !!!!! обязательно ??? потом подправить -->
						</li>
					</div>
			</div>

			<hr>
		</div> <!-- /container -->



		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2>Heading</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
			</div>

			<hr>
		</div> <!-- /container -->





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




			<!--footer start from here-->
			<?php
			include_once 'includes/footer.php';
			?>