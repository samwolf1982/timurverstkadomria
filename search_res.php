<?php
include_once 'includes/header.php';
include_once 'includes/carusele.php';
// include_once 'includes/fullscreenfilter.php';
?>
<style type="text/css">
	<?php
	include_once 'css/search_res.css';
	?>

</style>
<script type="text/javascript">
	<?php
	include_once 'js/search_res.js';
	?>
</script>
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
<!-- filter -->
<div class="container" style="    margin-top: 2em;">
	<div class="row">
		<div class="col-sm-12 col-md-2 col-lg-2 nopadding">
			<div class="left-site-bar">

				<div class="news-box">
					<div class="news-title-obj"><a href="">Объекты на 21.01.17</a> </div>

					<table class="table table-striped obj_table">

						<tbody>
							<?php
							$max=4;
							foreach (range(0, $max) as $key => $value) {?>
							<tr>
								<td >Квартиры продажа </td>
								<td class="count_room">8</td>
							</tr>
							<?php }?>  

						</tbody>
					</table>
				</div> 
				<!-- end news box -->
			</div> 
		</div> 
		<div class="col-sm-12 col-md-10 col-lg-10">
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
	</div>
</div>
<!-- end filter -->

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
<div class="container sortline hide">
	<div class="row" style="    font-family: 'Open Sans Condensed', sans-serif;">
		<div class="col-sm-4 nopadding"><strong class="title_room">Квартиры</strong>
			<a class="clear_link subscribe_link" href=""><span class="glyphicon glyphicon-envelope"></span> Подписаться на обновление базы</a>
		</div>
		<div class="col-sm-8">
			<i>Сортировать:</i>
			<a href="" class="btn btn-default_w_border">Цене</a>  
			<a href="" class="btn btn-default_w_border">Площади</a>  
			<a href="" class="btn btn-default_w_border">Дате</a>  
			<i>Показывать:</i>
			<a href="" class="btn btn-default_w_border">30</a>  
			<a href="" class="btn btn-default_w_border">50</a>  
			<a href="" class="btn btn-default_w_border">100</a>  

			<span class="title_room pull-right">355 Объектов</span>
		</div>

	</div>
	<div class="row">
	</div>
</div>
<!-- end sortline -->














<!-- main wrap content -->
<div class="container wrap_content">

    <div class="row">
        <div  class="col-md-10" style="padding-right: 0; ">

            <div class="wrap_catalog"> 





                <?php  
                foreach (range(0, 5) as $key => $value) { ?>

                <div id="catalog" class="catalog_upper">
                    <!--   <div class="container"> -->
                    <div class="row">
                        <div class="col-sm-4">
 
                         <!--    <a class="open_fancybox" href="">
                                <img class="img-thumbnail img-responsive" src="img/verstka/78787878-320x220.jpg" alt=""/>
                            </a> -->
                                <?php foreach (range(1,5) as $k => $v): ?>

                    <div class="hidewrap <?=$v==1?'':'hide' ?>">
                <a class=" fancybox" rel="ligthbox<?=$value; ?>" href="img/verstka/78787878-320x220.jpg">
                    <img class="img-responsive" alt="" src="img/verstka/78787878-320x220.jpg" /> </a>
                    </div>

                               <?php endforeach ?>

                      

                        </div>
                        <div class="col-sm-8">
                            <p class="title_item">Купить квартиру в г.Одесса по ул. Балковская</p>
                            <p><a class="clear_link" href="">Вторичная недвижимость</a></p>
                            <p>Стоимость: <i>85 000$</i></p>

                            <table class="table">

                                <tbody>
                                    <tr>
                                        <td>3 комнаты</td>
                                        <td><a class="clear_link" href="">Приморский р-н</a></td>
                                        <td>Общая - 42.5м<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td>5 этаж</td>
                                        <td><a class="clear_link" href="">Центр</a></td>
                                        <td>Жилая - 21.5<sup>2</sup></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                                     <a class=" fancybox btn btn-default" rel="ligthbox<?=$value; ?>" href="img/verstka/78787878-320x220.jpg">
                                                     Смотреть все фото
                    </a>
                                         

                                        </td>

                                        <td>Кухня - 21.5<sup>2</sup></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>


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
                        <div class="col-sm-4 text-center hide">
                            <a href="" class="clear_link"><i class="icon-like"></i>Добавить в избранное</a>
                        </div>

                    </div>
                    <!-- </div> -->




                    <li >
                        &nbsp; 
                        <!-- !!!!! обязательно ??? потом подправить -->
                    </li>
                </div>

                <?php } ?>
                <!-- end item catalo room -->
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
        <div class="col-md-2 text-center">
            <div class="row">



                <div class="left-site-bar">

                    <div class="news-box wrap_gogle_map">
                        <div id="map"></div>
                        <div class="pull-left">
                            <a href="" class="clear_link"><i class="icon-map"></i>На большой карте</a>
                        </div>



                    </div> 

                    <!-- end news box -->

                    <div class="news-box viewed_rooms">
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
						<a class="left carousel-control  hide" href="myCarousel5" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control hide" href="myCarousel5" role="button" data-slide="next">
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






			<!--footer start from here-->
			<?php
			include_once 'includes/footer.php';
			?>