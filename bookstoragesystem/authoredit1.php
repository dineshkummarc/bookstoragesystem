<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$Name = $_POST['Name'];
		    $Address = $_POST['Address'];
		
			
		
	 			$query = 'UPDATE author set Name ="'.$Name.'",
					Address ="'.$Address.'" WHERE
					Author_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "author.php";
		</script>
 <?php include 'footer.php'; ?>