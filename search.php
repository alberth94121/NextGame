<!DOCTYPE HTML>

<?php
	include 'api.php';
	//dbConnect();
	$db_connection = new mysqli($host, $user, $pw,$db);
	if ($db_connection->connect_errno) {
		echo "Failed to connect to MySQL: (" . $db_connection->connect_errno . ") " . $db_connection->connect_error;
	}
	
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
	$sql = "SELECT COUNT(gameID) FROM Games WHERE (systemID=? AND name LIKE ?)"; 
	if(!($stmt2 = $db_connection->prepare($sql)))
		echo "Prepare failed";
	$p = "%$search%";
	$stmt2->bind_param('is',$system,$p);
	$stmt2->execute();
	$rs=$stmt2->get_result(); 
	$row = $rs->fetch_row();  
	//echo $row[0];
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
					  <div class="span12 cnt-title2" style="padding:20px"><h1 style="text-align:left;margin:20px">
					  <?php
					    if($system == 1){
							echo  'PC Games'; 
						 }
						else if($system == 2){
							echo 'PS4 Games'; 
						 }
						else if($system == 3){
							echo 'Xbox One Games'; 
						 }
						else if($system == 4){
							echo 'Nintendo 3DS Games'; 
						 }
						else
							echo 'All Games';
					  ?>
					  <form   style="text-align: right" action="search.php?">
							<?php
								$inputID ='<input type="hidden" name="id" value="'.$system.'" />';
								echo $inputID;				
							?>	
							<input type="textbox" name="query" style="padding:5px" />  
							<input type="hidden" name="page" value="1" />							
							<input  class='button4' type="submit" value="Search" style=""> 
					</form>	</h1>
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
						
						//$query =$db_connection->query("SELECT * FROM Games WHERE (systemID=$system AND name LIKE '%$search%') ORDER BY releaseDate LIMIT $start,$perPage");
						
						
						
						if(!($stmt = $db_connection->prepare("SELECT * FROM Games WHERE (systemID = ? AND name LIKE ?) ORDER BY releaseDate LIMIT $start,$perPage")))
							 echo "Prepare failed";
						 $p2="%$search%";
						 
						$stmt->bind_param('is',$system,$p2);
						$stmt->execute();
						$rslt=$stmt->get_result();
						while( $row = $rslt->fetch_array(MYSQLI_ASSOC)){
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

	<!-- Footer -->
		<footer>
			<div class="container">
			  <div class="row">
				<div class="span6">Copyright &copy 2016 Albert Huang | All Rights Reserved <br></div>
			  </div>
			</div>
		</footer>
	</body>
</html>