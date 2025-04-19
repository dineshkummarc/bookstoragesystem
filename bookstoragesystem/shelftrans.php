<?php include'header.php' ;?>
<?php include'connection.php' ;?>


 <div class="col-lg-12">
                <?php
						$st= $_POST['shelf_type'];
						
					   
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO shelf_location
								(shelf_type)
								VALUES ('".$st."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "shelflocation.php";
		</script>
                    </div>