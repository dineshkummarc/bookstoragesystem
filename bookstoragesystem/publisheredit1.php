<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$pn = $_POST['Publisher_name'];
		    $pa = $_POST['Publisher_Address'];
			$ai= $_POST['Author_ID'];
			
		
	 			$query = 'UPDATE publisher set Publisher_name ="'.$pn.'",
					Publisher_Address ="'.$pa.'", Author_ID="'.$ai.'"
					 	WHERE
					Publisher_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "publisher.php";
		</script>
 <?php include 'footer.php'; ?>