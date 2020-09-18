<!-- <?php 	print_r($product); ?> -->
<?php
    $total = 0;
    foreach($product as $dp) {
        $total += 1;  
    }
    $total = (string)$total;
?>
<html>
	<head>
		<style>
			.button {
				background-color: #4CAF50;
				border: none;
				color: white;
				padding: 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				}
			.button1 {border-radius: 2px;
				}
			.button2 {background-color: #e7e7e7; color: black;} 

			</style>
		<title>fashion</title>
		
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<body>		
		<div class="container">										
			<ul class="nav nav-tabs ">
				<li class="active"><a data-toggle="tab" href="#menu1">Blogs</a></li>
				<li><a data-toggle="tab" href="#menu2">Products(<?php echo $total; ?>)</a></li>	
			</ul>

		    <div class="tab-content">
			  	<div id="menu1" class="tab-pane fade in active">
			      <h3>Menu 1</h3>
			      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			    </div>
			    <div id="menu2" class="tab-pane fade ">

			     	<?php foreach ($product as $product): ?>
			     		<br><br><br><br>
			     		<div class="carousel-inner">
							<div class="item carousel-item active">
								<div class="row">
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<div class="img-box">
												<img src="<?php echo $product['image_usr']; ?>" class="float-left"><br>
											</div>
											<div class="thumb-content">
												<b><br>
													<a href="<?php echo site_url('/product/'.$product['lc_style']); ?>"><?php echo $product['brand_description']; ?></a>s 
													<br><?php echo $product['display_name_en']; ?>
													<br><br>
													<?php if($product['available_channel']=="Online"): ?>
														
														<button class="button button1">online</button>
														<button2 class="button button2">In-store</button>
													<?php elseif($product['available_channel']=='Both'): ?> 
														<button class="button button1">online</button>
														<button1 class="button button1" >In-store</button>
													<?php elseif($product['available_channel']=='offline'): ?> 
														<button class="button button1" >online</button>
														<button2 class="button button2" >In-store</button>
													<?php endif; ?>

												</b>
											</div>						
										</div>
									</div>
								</div>
							</div>
						</div>

			     	<?php endforeach; ?>
			      
			    </div> 
			</div>
		</div>
	</body>
<html>
	