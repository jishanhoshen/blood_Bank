<?php include("config.php");?>
<div class="result">
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Roll</th>
			<th>Department</th>
			<th>Semester</th>
			<th>Blood</th>
			<th>Contact</th>
			<th>Status</th>
		</tr>
		<?php 
		if($result = $conn->query("select * from students order by id DESC",MYSQLI_USE_RESULT)){
			while($rows = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $rows['id']?></td>
				<td><?php echo $rows['std_name']?></td>
				<td><?php echo $rows['std_roll']?></td>
				<td><?php echo $rows['department']?></td>
				<td><?php echo $rows['semester']?></td>
				<td><?php echo $rows['blood']?></td>
				<td><?php echo $rows['contact']?></td>
				<td><?php if($rows['status'] == 1){echo "Available";}else{ echo "Unavailable"; } ?></td>
			</tr>
			<?php
			}
		}else{
			echo "wrong";
		}
		?>
	</table>
</div>