<!-- <h2><?php echo $product['lc_style']; ?></h2> -->
<html>
	
	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<body>
		
		
		<div class="container">
			<img src="<?php echo $product['image_usr']; ?>" class="float-center">
			<ul class="nav nav-tabs ">
				<h2><?php echo $product['brand_description']; ?></h2>
				<h3><?php echo $product['display_name_en']; ?></h3>
		    
		    	<li class="active"><a data-toggle="tab" href="#home">Overview</a></li>
		    	<li><a data-toggle="tab" href="#menu1">Detail</a></li>
		    	<li><a data-toggle="tab" href="#menu2">Availabity</a></li>
		    	<li><a data-toggle="tab" href="#menu3">Photo</a></li>
		    </ul>

		  <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		    	<p><h3><b>product Information</h3><i><?php echo $product['online_description_en'] ?></i></b></p>
		    	<p><b>LC STYLE NUMBER  </b> <?php echo $product['lc_style']; ?></p>
		       	
		       	<p><b>VENDOR  </b><?php echo $product['vendor_style']; ?>
		       	<p> <b> CATEGORY  </b> <?php echo $product['category1']; ?></p>
		    	<p><b>BRAND  </b> <?php echo $product['brand_name']; ?></p>

		    </div>
		    <div id="menu1" class="tab-pane fade">
		      <h3>Menu 1</h3>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div id="menu2" class="tab-pane fade">
		      <h3>Menu 2</h3>
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div id="menu3" class="tab-pane fade">
		      <h3>Menu 3</h3>
		      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		    </div>
		  </div>
		</div>

	</body>
</html>
