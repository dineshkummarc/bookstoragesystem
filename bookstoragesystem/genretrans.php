<?php include'header.php' ;?>
<?php include'connection.php' ;?>


 <div class="col-lg-12">
                <?php
						$gn= $_POST['Genre'];
						$gr= $_POST['Genre_Restriction'];
					   
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO genre
								(Genre,Genre_Restriction)
								VALUES ('".$gn."','".$gr."')";
								mysqli_query($db,$query)or die (mysqli_error($db));;
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "genre.php";
		</script>
                    </div>