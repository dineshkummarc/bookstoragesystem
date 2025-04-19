<?php include'connection.php' ;
session_start();
?>
 <div class="col-lg-12">
                <?php
						$ds= $_POST['ds'];
						$dc= $_POST['dc'];
						$books= $_POST['books'];
						$gen= $_POST['genre'];
						$st= $_POST['shelf_type'];
						$cn= $_POST['cn'];
						
					   
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO transaction
								(date_stored,date_claimed,book_title,genre,shelf_type,client_name)
								VALUES ('".$ds."','".$dc."','".$books."','".$gen."','".$st."','".$_SESSION['fname']." ".$_SESSION['lname']."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "transaction.php";
		</script>
                    </div>