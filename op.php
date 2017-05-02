<?php 
	include 'try1.php';
	
	$query = "SELECT * FROM name ORDER BY id DESC LIMIT 10";
	$run = $con->query($query);
	echo '<div id="chat_data" style="oveflowy:scroll">';
	while($row = $run->fetch_array()) :
		?>
			
				<span style="color:green;"><?php echo $row['name']; ?></span> :
				<span style="color:brown;"><?php echo $row['message']; ?></span>
				<span style="float:right;"><?php echo formatDate($row['time']); ?></span>
				<br>
			<?php endwhile;?>
				</div>