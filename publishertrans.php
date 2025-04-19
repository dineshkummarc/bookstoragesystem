 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php

						$pid= $_POST['Publisher_ID'];
						$pn= $_POST['Publisher_name'];
					    $pa= $_POST['Publisher_Address'];
						$ai= $_POST['Author_ID'];

						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO publisher
								(Publisher_ID,Publisher_name,Publisher_Address, Author_ID)
								VALUES ('".$pid."','".$pn."','".$pa."','".$ai."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "publisher.php";
		</script>
                    </div>