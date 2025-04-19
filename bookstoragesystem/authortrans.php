 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                	
						$name= $_POST['Name'];
					    $add= $_POST['Address'];
						
						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO author
								(Name, Address)
								VALUES ('".$name."','".$add."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "author.php";
		</script>
                    </div>