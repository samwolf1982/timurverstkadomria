<?php
include_once 'includes/header.php';
// include_once 'includes/carusele.php';
//  include_once 'includes/fullscreenfilter.php';
?>



        <!-- vertical carusele -->



<style type="text/css">
	<?php
	include_once 'css/filials.css';
	//include_once 'libs/jquery.ad-gallery.css';
	?>

</style>
<script type="text/javascript">
	<?php
	include_once 'js/filials.js';
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
<!-- end button -->


<!-- main wrap content -->
<div class="container wrap_content">

	<div class="row">
		<div  class="col-sm-12 col-md-12 col-lg-9" style="padding-right: 0; padding-left: 0; ">

			<div class="wrap_catalog  "> 

		<div class="col-sm-12">
		</div>
		<div class="col-sm-12" style="text-indent: 0.5em;     padding-right: 5em;">
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptas dignissimos ut corrupti dolores, maiores provident a debitis ipsam deserunt harum cumque hic unde, tempore accusamus aut similique. Qui, ducimus.</div>
			<div>Natus eius aperiam commodi, rem dolore perspiciatis minima ducimus! Similique repellendus voluptatibus eligendi reiciendis omnis suscipit cupiditate sint possimus sapiente ratione consectetur explicabo impedit deleniti dignissimos porro non, molestias vitae.</div>
			<div>Aperiam officia consequatur enim, totam, est velit odio officiis excepturi optio illum magnam illo distinctio culpa porro! Eaque dolores dolorum aspernatur consequatur beatae accusantium, fugiat. Quam laboriosam fugit hic alias.</div>
			<div>Nisi delectus itaque ullam veniam doloremque eum repellat labore non et rerum inventore molestias, voluptatibus reiciendis, maiores cumque laborum in fugiat harum provident iure, commodi? Ut quam consectetur alias eum.</div>
	
 <br>


		</div>



 <?php foreach (range(0, 3) as $key => $value) { ?>

      

<div class="row">

    <div class="hidden-sm col-md-1 ">

  </div>
  <div class="col-sm-6 col-md-4 filial">
    <div class="thumbnail " style="margin-left: -1em;">
    <a href="">  <img src="/img/verstka/left.jpg" alt="..."> </a>
      <div class="caption">
        <!-- <h3>Thumbnail label</h3> -->
       <!--  <p>Адресс: magnam illo distinctio </p> -->
           <table class="table clear_table">

    <tbody>
    <tr>
        <td style="padding-top: 0;">Адрес:</td>
        <td style="padding-top: 0;">magnam illo distinctio</td>   
      </tr>
      <tr>
        <td style="padding-top: 0;">Телефон</td>
        <td style="padding-top: 0;">
                <div  class="tel">1234567989</div>
                                <div class="tel">1234567989</div>
                                                <div class="tel">1234567989</div>
                                                                <div class="tel">1234567989</div>
        </td>   
      </tr>

       <tr>
        <td style="padding-top: 0;">E-mail</td>
        <td style="padding-top: 0;">demo@sobcak.com</td>   
      </tr>
  

    </tbody>
  </table>

 
   
      </div>
    </div>
  </div>

    <div class="hidden-sm col-md-1 ">

  </div>
  <div class="col-sm-6 col-md-4 filial">
    <div class="thumbnail " style="margin-left: -1em;">
    <a href="">  <img src="/img/verstka/left.jpg" alt="..."> </a>
      <div class="caption">
        <!-- <h3>Thumbnail label</h3> -->
       <!--  <p>Адресс: magnam illo distinctio </p> -->
           <table class="table clear_table">

    <tbody>
    <tr>
        <td style="padding-top: 0;">Адресс:</td>
        <td style="padding-top: 0;">magnam illo distinctio</td>   
      </tr>
      <tr>
        <td style="padding-top: 0;">Телефон</td>
        <td style="padding-top: 0;">
                <div  class="tel">1234567989</div>
                                <div class="tel">1234567989</div>
                                                <div class="tel">1234567989</div>
                                                                <div class="tel">1234567989</div>
        </td>   
      </tr>

       <tr>
        <td style="padding-top: 0;">E-mail</td>
        <td style="padding-top: 0;">demo@sobcak.com</td>   
      </tr>
  

    </tbody>
  </table>

 
   
      </div>
    </div>
  </div>

      <div class="hidden-sm col-md-1 ">
  </div>
</div>

 <?php  }  ?>

          
	









			</div> 
			<!-- end wrap content -->




		</div>


		<!-- side bar -->
<div class="col-sm-12 col-md-12 col-lg-3 text-center" style="    padding: 0;">
			<div class="row">



				<div class="left-site-bar">

 




					<div class="news-box wrap_gogle_map news-title-obj">
					<div class="title_ibj">Филиалы на карте</div>
					
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




								<div class="news-box wrap_contact_form">
					
<div class="contact-form-border">
                    <div class="contact-form-title page-header">
                       <h3 > <a href="" class="clear_link nodecor">Филиалы</a></h3>
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