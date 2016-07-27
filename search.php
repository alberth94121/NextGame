<!DOCTYPE HTML>

<?php
	include 'api.php';
	dbConnect();
	
	if(isset($_GET["page"])){ 
		$page  = $_GET["page"]; 
	} 
	else{ 
		$page=1; 
	};
	if(isset($_GET["query"])){ 
		$search  = $_GET["query"]; 
	} 
	else{ 
		$search=""; 
	};
	if(isset($_GET["id"])){ 
		$system = $_GET["id"]; 
	} 
	else{ 
		$system=""; 
	};
	$perPage = 10;
	$start = ($page-1) * $perPage; 
	$sql = "SELECT COUNT(gameID) FROM Games WHERE (systemID=$system AND name LIKE '%$search%')"; 
	$rs = @mysql_query($sql); 
	$row = mysql_fetch_row($rs);  
	$total = ceil($row[0] / $perPage); 
?> 

<html>
	<head>
			<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
			<title>NextGame</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="">
			<meta name="author" content="">
			
			<!-- Bootstrap -->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/bootstrap-responsive.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet"> 
			<link href="css/table.css" rel="stylesheet"> 
			
			<!--Font-->
			<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
			   
			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			  
			  <!-- Fav and touch icons -->
			  <link rel="shortcut icon" href="ico/favicon.ico">
			  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
			  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
			  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
			  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

			<!-- SCRIPT -->  
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="js/bootstrap.min.js"></script>
					
	</head>

	<body>
		<!-- Header -->
		<div id="header-row">
			<div class="container">
				<div class="row">
					<!-- Logo -->
					<div class="span3"><img src="img/NextGame.png"></div>

					<!-- Nav -->  
					<div class="span9">
						<div class="navbar  pull-right">
							<div class="navbar-inner">
								<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li class="active"><a href="index.html">Home</a></li>
										<li class="active"><a href="pc.php">PC</a></li>
										<li class="active"><a href="ps4.php">PS4</a></li>
										<li class="active"><a href="xbox.php">Xbox</a></li>
										<li class="active"><a href="3ds.php">3DS</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		  
		<!-- Title -->
		<div class="container">		
			<div class="row">
					  <div class="span12 cnt-title2" style="padding:20px">
					  <?php
					    if($system == 1){
							echo '<h1 style="text-align:left;margin:20px">PC Games</h1>'; 
						 }
						else if($system == 2){
							echo '<h1 style="text-align:left;margin:20px">PS4 Games</h1>'; 
						 }
						else if($system == 3){
							echo '<h1 style="text-align:left;margin:20px">Xbox One Games</h1>'; 
						 }
						else if($system == 4){
							echo '<h1 style="text-align:left;margin:20px">Nintendo 3DS Games</h1>'; 
						 }
						else
							echo '<h1 style="text-align:left;margin:20px">All Games</h1>';
					  ?>
					  </div>				   
			</div>
		</div>
		
		<!-- SearchBos -->
		<div class="container">	
			<div class="row">	
				<div class="span12 cnt-title2" >
					<form action="search.php?" >
						<?php
							$text2='<input type="hidden" name="id" value="'.$system.'" />';
							echo $text2;				
						?>	
						<input type="text" name="query" style="height: 15px;"/><br> 
						<input type="hidden" name="page" value="1" />	
						<input  class='button3' type="submit" value="Search"> 
					</form>	
				</div>
			</div>
		</div>

		<!-- Pages -->
		<div class="container">	
			<div class="row">	
				<div class="span12 cnt-title2" style="padding:0px">
				<p class="nav">				
					<?php
						if($page > 1){
							$p=$page-1;
							echo "<a  href='search.php?id=$system&query=$search&page=$p' class='button'>Prev </a>";
							echo '';
						}
						else {
							echo "<a class='button'>Prev</a>";
							echo '';
						}
						
						$pre = $page;
						$amt = 5;
						if($pre >= 1+ $amt){
							$num = $pre-$amt;
							while($num < $pre){
								echo "<a href='search.php?id=$system&query=$search&page=$num' class='button'>$num </a>";
								echo '';
								$num+=1;
							}
						}
						else{
							$num = 1;
							while($num < $pre){
								echo "<a href='search.php?id=$system&query=$search&page=$num' class='button' >$num </a>";
								echo '';
								$num+=1;
							}
						
						}
						
						echo "<a class='button2' ><strong>$page</strong></a>";
						echo '';
						
						$pre = $page;
						if($pre <= $total-$amt){
							$num = $pre+1;
							while($num <= $pre+$amt){
								echo "<a class='button' href='search.php?id=$system&query=$search&page=$num'>$num </a>";
								echo '';
								$num+=1;
							}
						}
						else{
							$num = $pre+1;
							while($num <= $total){
								echo "<a class='button' href='search.php?id=$system&query=$search&page=$num'>$num </a>";
								echo '';
								$num+=1;
							}
						}
						
						if($page < $total){
							$next=$page+1;
							echo "<a class='button' href='search.php?id=$system&query=$search&page=$next'> Next</a>";
							echo '';
								
						}
						else {
							echo "<a class='button'>Next</a>";
							echo '';
						}
					?>
				</p>
				</div>
			</div>
		</div>

		<!-- Table -->
		<div class="container">	
			<div class="span12" >
				<table>
					<thead>
						<tr>
							<th>
							</th>
							<th>
							  Name
							</th>
							<th>
							  Description
							</th>
							<th class="last">
							  Release Date
							</th>
							</tr>
					</thead>
					
					<tbody>
					<?php
						$query = @mysql_query("SELECT * FROM Games WHERE (systemID=$system AND name LIKE '%$search%') ORDER BY releaseDate LIMIT $start,$perPage");
						
						while( $row = @mysql_fetch_assoc($query)) 
						{
						    $image =  $row['gameID'];
							$src = "<img src='img/$image.png'>";
							$name = $row['name'];
							$description = $row['description'];
							$date = $row['releaseDate'];
							
							echo "<tr><td>$src</td><td>$name</td><td>$description</td><td><t11>$date</t11></td>";
						 
						}
					?>
					  
					</tbody>
				</table>
					
			</div>
		</div>


	</body>
</html>