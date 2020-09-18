<!-- <?php foreach ($groupe as $g) {print_r($g); echo $g['group_name'];}  ?> -->
<html>
	<title> product filter </title>
	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<br />
					<br />
					<br />
					<div class="list-group">
						<h3>Filter By Department</h3>
						<?php
						foreach($groupe as $row){
						?>
						<div class="list-group-item checkbox">
						<label><input type="checkbox" class="common_selector brand " value="<?php echo $row['group_name'] ?>"><?php echo $row['group_name'] ?></label>
						
						</div>
						<?php 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>						
</html>








