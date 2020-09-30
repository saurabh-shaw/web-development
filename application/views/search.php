<?php foreach ($results as $product): ?>
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
								<button2 class="button button2">In-store</button2>
							<?php elseif($product['available_channel']=='Both'): ?> 
								<button class="button button1">online</button>
								<button1 class="button button1" >In-store</button1>
							<?php elseif($product['available_channel']=='offline'): ?> 
								<button class="button button1" >online</button>
								<button2 class="button button2" >In-store</button2>
							<?php endif; ?>

							</b>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>