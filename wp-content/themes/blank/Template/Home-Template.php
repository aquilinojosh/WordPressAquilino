<?php	
	/* Template Name: Home */
	get_header();
?>
<div class="container">
  <img src="http://localhost/wordpress/wp-content/uploads/2021/05/66320556_685900268545399_4995496850187354112_n.png" alt="Snow" style="width:100%;">
  <div class="centered">Music City</div>
</div>
<div class="container">
		<!--slide show -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/158588019_543183229994929_4976035412665681461_n.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/60334185_676055472845284_8671795354401767424_n.png" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/160247664_466135777850519_6650189538399648082_n.jpg" alt="Third slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/160270297_478934676478565_7654427115852785280_n.jpg" alt="Fourth slide">
	    </div>

	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!--end slide show -->
</div>

<style>
.container {
  position: relative;
  text-align: center;
  color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 700%;
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: white
}
</style>
<?php get_footer(); ?>