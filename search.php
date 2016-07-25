<!DOCTYPE HTML>

<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'test2';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass)or die("Can't connect");;
	mysql_select_db($db, $conn);
	
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
	$perPage = 2;
	$start = ($page-1) * $perPage; 
	$sql = "SELECT COUNT(gameID) FROM pcGames WHERE name LIKE '%$search%'"; 
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
		  <!--HEADER ROW-->
		  <div id="header-row">
			<div class="container">
			  <div class="row">
					  <!--LOGO-->
					  <div class="span3"><h1>NextGame</h1></div>
					  <!-- /LOGO -->

					<!-- MAIN NAVIGATION -->  
					  <div class="span9">
						<div class="navbar  pull-right">
						  <div class="navbar-inner">
								<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li class="active"><a href="index.html">Home</a></li>
										<li class="active"><a href="test.php">PC</a></li>
										<li class="active"><a href="index.html">Xbox</a></li>
										<li class="active"><a href="index.html">PS4</a></li>
									</ul>
								</div>
						   </div>
						</div>
					  </div>
			  </div>
			</div>
		  </div>
		  
		<div class="container">		
				<!--Home-->
				<div class="row">
					  <div class="span12 cnt-title2" style="padding:20px">
					   <h1 style="text-align:left;margin:20px">PC Games</h1>  
					  </div>				   
				</div>
		</div>
		
		<div class="container">	
			<div class="row">	
				<div class="span12 cnt-title2" >
					<form action="search.php?" >
							<input type="text" name="query" style="height: 15px;"/><br> 
							<input type="hidden" name="page" value="1" />							
							<input  class='btn btn-default' type="submit" value="Search"> 
					</form>	
				</div>
			</div>
		</div>



		<div class="container">	
			<div class="row">	
				<div class="span12 cnt-title2" style="padding:0px">
				<p class="nav">				
					<?php
						if($page > 1){
							$p=$page-1;
							echo "<a  href='search.php?page=$p&query=$search' class='btn btn-default'>Prev </a>";
							echo ' ';
						}
						else {echo "<a class='btn btn-default'>Prev</a>";
						echo ' ';}
						
						$pre = $page;
						$amt = 5;
						if($pre >= 1+ $amt){
							$num = $pre-$amt;
							while($num < $pre){
								
							
								echo "<a href='search.php?page=$num&query=$search' class='btn btn-default'>$num </a>";
								echo ' ';
								$num+=1;
							}
						}
						else{
							$num = 1;
							while($num < $pre){
								
								echo "<a href='search.php?page=$num&query=$search' class='btn btn-default' >$num </a>";
								echo ' ';
								$num+=1;
							}
						
						}
						echo "<a class='btn btn-default' ><strong>$page</strong></a>";
						echo ' ';
						
						$pre = $page;
						if($pre <= $total-$amt){
							$num = $pre+1;
							while($num <= $pre+$amt){
								
								echo "<a class='btn btn-default' href='search.php?page=$num&query=$search'>$num </a>";
								echo ' ';
								$num+=1;
							}
						}
						else{
							$num = $pre+1;
							while($num <= $total){
								
								echo "<a class='btn btn-default' href='search.php?page=$num&query=$search'>$num </a>";
								echo ' ';
								$num+=1;
							}
						
						}
						

						
						if($page < $total){
							$p=$page+1;
							echo "<a class='btn btn-default' href='search.php?page=$p&query=$search'> Next</a>";
							echo ' ';
								
						}
						else {echo "<a class='btn btn-default'>Next</a>";
							echo ' ';}
						
					
					?>
				</p>
				</div>
					

			</div>
		</div>

	
 
		<div class="container">	
			<div class="span12" >
		

				<table >
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
						$query = @mysql_query("SELECT * FROM pcGames WHERE name LIKE '%$search%' ORDER BY releaseDate LIMIT $start,$perPage");
						
						while( $row = @mysql_fetch_assoc($query)) 
						{
						    $image =  $row['gameID'];
							$src = "<img src='img/$image.png'>";
							$name = $row['name'];
							$description = $row['description'];
							$date = $row['releaseDate'];
							$link = $row['link'];
							
							echo "<tr><td>$src</td><td>$name</td><td>$description</td><td>$date</td>";
						 
						}
					?>
					  
					</tbody>
	   
				</table>
					
			</div>
		</div>


	</body>
</html>