<?php
include("header.php");
session_start();
if(isset($_SESSION['data'])){
	if($_SESSION['data'] == '201'){
		echo "data successfully inserted";
		session_unset();
		session_destroy();
	}else if($_SESSION['data'] == '404'){
		echo "something went wrong";
		session_unset();
		session_destroy();
	}
}
?>
<div class="header">
	<div class="logo">
		<h1>Blood Bank</h1>
	</div>
	<div class="input">
		<form action="form.php" method="post">
			<table>
			<tr>
				<td><input type="text" name="std_name" placeholder="Name Ex:[ Jishan Hoshen ]" required></td>
				<td><input type="text" name="std_roll" placeholder="Roll Ex:[ 17116 ]" required></td>
				<td>
					<select name="department" required>
						<option value="">Depertment</option>
						<option value="cmt">CMT</option>
						<option value="Ct">CT</option>
						<option value="et">ET</option>
					</select>
				</td>
				<td>
					<select name="semester" required>
						<option value="">Semester</option>
						<option value="1st">1st</option>
						<option value="2nd">2nd</option>
						<option value="3rd">3rd</option>
						<option value="4th">4th</option>
						<option value="5th">5th</option>
						<option value="6th">6th</option>
						<option value="7th">7th</option>
						<option value="8th">8th</option>
					</select>
				</td>
				<td>
					<select name="blood" required>
						<option value="">Blood</option>
						<option value="a+">A+</option>
						<option value="o+">O+</option>
						<option value="b+">B+</option>
						<option value="ab+">AB+</option>
						<option value="a-">A-</option>
						<option value="o-">O-</option>
						<option value="b-">B-</option>
						<option value="ab-">AB-</option>
					</select>
				</td>
				<td><input type="text" name="contact" placeholder="Cont Ex:[ 01967XXXXXX ]" required></td>
				<td><input type="submit" name="submit" value="save"></td>
			</tr>
			</table>
		</form>
	</div>
	<div class="clear"></div>
</div>
<?php include("blood.php");?>
<?php include("footer.php");?>














