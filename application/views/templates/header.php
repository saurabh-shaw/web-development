<html>
	<head>
		<title>fashion</title>
		
		<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<body>
			<nav class="navbar navbar-inverse ">
				
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo base_url() ?>">Dhm</a>
					</div>
					<div id="navbar">
						<ul class="nav navbar-nav">
							<!-- <form class="form-inline ">
						    <input class="form-control " type="text" placeholder="Search">
						    <button class="btn btn-secondary " type="submit" >Search</button>
						    </form> -->
						    <?php
							    echo form_open('search/execute_search');

							    echo form_input(array('name'=>'search'));

							    echo form_submit('search_submit','Search');
							?> 
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo base_url() ?>">Home</a></li>	
						</ul>
					</div>
				</div>
			</nav>