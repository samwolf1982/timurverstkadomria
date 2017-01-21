<?php
include_once 'includes/header.php';
?>

<div class="container">

	<div class="col-md-3 text-center bottom-align-text">
		<div class="wrap-media">
			<div class="media ">
				<div class="media-top">
					<div class="lead"> Сеть офисов «Доминанта»  сегодня: </div>
				</div>
				<div class="media-body">
					<a href="/filials"><img class="scale" src="img/verstka/left.jpg"></a>
				</div>
			</div>
		</div>



	</div>
	<div class="col-md-9">
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">


				<?php
				foreach (range(0, 5) as $key => $value) {?>
				<div class="item <?= $value==0?'active':'';?> ">
					<img src="img/verstka/center-1140x380.png" alt="Chania" >
					<div class="carousel-caption">
						<h3>Chania</h3>
						<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
					</div>
				</div>  


				<?php }
				?>
				



			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>


<!-- filter -->
<div class="container" style="padding-top: 1.5em;">
	<div class="row">
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
				<div class="col-md-4 text-center "><a href="#" class="btn btn-default btn-block" > онлайн консультация специалиста</a></div>
				<div class="col-md-4 text-center "><a href="#" class="btn btn-default btn-block" > заказать звонок</a></div>
				<div class="col-md-4 text-center "><a href="#" class="btn btn-default btn-block" > Найти</a></div>
			</div>
		</form>
	</div>
</div>
<!-- end filter -->


<!-- main wrap content -->
<div class="container wrap_content">

	<!-- side bar -->
	<div class="col-md-3 text-center">
		<div class="row">



			<div class="left-site-bar">

				<div class="news-box">
					<div class="news-title"><a href="#">Новости</a> </div>

					<ul class="article_ul">


						<?php
						$max=3;
						foreach (range(0, $max) as $key => $value) {?>
						<li class="article_intro">
							<div class="wrap_in_article">
								<div class="col-sm-12 "> <span class="pull-left data_article">06.12.2016</span></div>
								<div class=" pull-left col-sm-12 "> <p class="pull-left lead title_article"><a href="#">  Lorem ipsum dolor sit amet, consectetur adipisicing elit </a></p></div>
								<div class="content_article col-sm-12"><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quasi, tempora hic cupiditate itaque eaque deserunt quaerat, corrupti nam commodi impedit.</p></div>
								<div class="col-sm-12"> <span class="details_article pull-right"><a href=""> Подробней </a></span>
								</div> 
								<?= $value==$max?'':' <div class="col-sm-12"><hr></div>';?>     
							</div>

						</li>


						<?php }
						?>





						<li >
							&nbsp; 
							<!-- !!!!! обязательно ??? потом подправить -->
						</li>

					</ul>

				</div> 

				<!-- end news box -->
			</div>



		</div></div>
		<!-- end left sidebar -->
		<div class="col-md-9" style="padding-right: 0; ">

			<div class="wrap_catalog"> 

				<div id="catalog" class="catalog_upper">
					<div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

					<div class="catalog">

						<?php $max=2;
						foreach (range(0, $max) as $key => $value) {?>

						<div class="col-md-4 col-sm-4">
							<div class="tile">
								<!-- one item -->
								<?php
								$max2=2;
								foreach (range(0, $max2) as $key => $value) {?>
								<div class="catalog-item">
									<div class="item-title">
										<div class="sum">2580</div>
										<p class="item_title_p"><a style="text-transform: uppercase;" href="">Квартиры</a><br/>
											<a href="">Одессы</a> и <a href="">Одесской области</a> </p>
										</div>
										<ul class="catalog-links">
											<li><img src="/img/verstka/triangle-catalog.png"> <a class="catalog_links" href="">квартиры</a> </li>
											<li><img src="/img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры до 500 тыс. грн</a> </li>
											<li><img src="/img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры до 1 млн. грн</a> </li>
											<li><img src="/img/verstka/triangle-catalog.png"><a class="catalog_links" href="">квартиры свыше 1 млн. грн</a> </li>
										</ul>
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
							&nbsp; 
							<!-- !!!!! обязательно ??? потом подправить -->
						</li>
					</div>




					<div id="catalog2" class="catalog_upper" >
						<div class="catalog-title"><span>Каталог недвижимости "Доминанта"</span></div>

						<div class="catalog">


							<div class="col-md-12">
								<br>
								<div id="myCarousel2" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel2" data-slide-to="1"></li>
										<li data-target="#myCarousel2" data-slide-to="2"></li>
										<li data-target="#myCarousel2" data-slide-to="3"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">


										<?php
										foreach (range(0, 5) as $key => $value) {?>
										<div class="item <?= $value==0?'active':'';?> ">
											<div class="wrap_carousele">




												<?php foreach (range(0, 2) as $k => $v) {?>


												<div class="col-sm-4 clear_padding">
													<div class="col-sm-12 clear_padding">
														<div class="col-sm-12 col-md-5 image_wrap clear_padding">
															<a href="">	<img class="image_inner   pull-left" src="/img/verstka/img2-320x220.jpg"> </a>
														</div>
														<div class="col-sm-12 col-md-7 clear_padding">
															<div class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></div>
															<div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
															<div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>

															<div class="price_uan_new ">Цена: 3 333 333 UAN</div>



															<div class="price_dol_new pull-right">89 333 $</div><br/>
															<div class="details_new pull-right"><a href="">Подробней..</a></div>



														</div>
													</div>

												</div>


												<div class="col-sm-4 clear_padding">
													<div class="col-sm-12 clear_padding">
														<div class="col-sm-12 col-md-5 image_wrap clear_padding">
															<a href="">	<img class="image_inner   pull-left" src="/img/verstka/img2-320x220.jpg"> </a>
														</div>
														<div class="col-sm-12 col-md-7 clear_padding">
															<div class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></div>
															<div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
															<div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>

															<div class="price_uan_new ">Цена: 3 333 333 UAN</div>



															<div class="price_dol_new pull-right">89 333 $</div><br/>
															<div class="details_new pull-right"><a href="">Подробней..</a></div>



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
									<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
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









					<div id="catalog2" class="catalog_upper">
						<div class="catalog-title"><span>Эксклюзивные предложения</span></div>

						<div class="catalog">


							<div class="col-md-12">
								<br>
								<div id="myCarousel3" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel3" data-slide-to="1"></li>
										<li data-target="#myCarousel3" data-slide-to="2"></li>
										<li data-target="#myCarousel3" data-slide-to="3"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">


										<?php
										foreach (range(0, 5) as $key => $value) {?>
										<div class="item <?= $value==0?'active':'';?> ">
											<div class="wrap_carousele">




												<?php foreach (range(0, 2) as $k => $v) {?>


												<div class="col-sm-4 clear_padding">
													<div class="col-sm-12 clear_padding">
														<div class="col-sm-12 col-md-5 image_wrap clear_padding">
															<a href="">	<img class="image_inner   pull-left" src="/img/verstka/img2-320x220.jpg"> </a>
														</div>
														<div class="col-sm-12 col-md-7 clear_padding">
															<div class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></div>
															<div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
															<div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>

															<div class="price_uan_new ">Цена: 3 333 333 UAN</div>



															<div class="price_dol_new pull-right">89 333 $</div><br/>
															<div class="details_new pull-right"><a href="">Подробней..</a></div>



														</div>
													</div>

												</div>


												<div class="col-sm-4 clear_padding">
													<div class="col-sm-12 clear_padding">
														<div class="col-sm-12 col-md-5 image_wrap clear_padding">
															<a href="">	<img class="image_inner   pull-left" src="/img/verstka/img2-320x220.jpg"> </a>
														</div>
														<div class="col-sm-12 col-md-7 clear_padding">
															<div class="title_new"><a href="">Жилой комплекс "Сити Парк"</a></div>
															<div class="address_new">Сити-парк – это комплекс из 4 жилых 9-16-этажных д..</div>
															<div class="sqauare_new">Общая площадь: 88м<sup>2</sup></div>

															<div class="price_uan_new ">Цена: 3 333 333 UAN</div>



															<div class="price_dol_new pull-right">89 333 $</div><br/>
															<div class="details_new pull-right"><a href="">Подробней..</a></div>



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
									<a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
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






				</div> 
				<!-- end wrap content -->




			</div>
		</div>
		<!--end  main wrap content -->























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