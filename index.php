<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Meal-Management-System </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javasrcipt" href="js/bootstrap.js"></script>
	</head>
	<body>
		<?php
		// database connect
		
		$db = new mysqli("localhost", "root", "", "hotel");
		
		// meal data insert
		
		if(isset($_POST['send'])){
			$insert = "INSERT INTO members (manik, sayed, durjoy, mahmud, rono, jony, jakir, gmjakir) VALUES ('".$_POST['manik']."', '".$_POST['sayed']."', '".$_POST['durjoy']."', '".$_POST['mahmud']."', '".$_POST['rono']."', '".$_POST['jony']."', '".$_POST['jakir']."', '".$_POST['gmjakir']."') ";
			if(mysqli_query($db, $insert)){
				echo "Inserted";
			}else{
				echo "not";
			}
		}
		
		?>
		
		<?php
		// Bazar data insert
		
		if(isset($_POST['bazar'])){
			$in = "INSERT INTO bazar (manik, sayed, durjoy, mahmud, rono, jony, jakir, gmjakir) VALUES ('".$_POST['manik']."', '".$_POST['sayed']."', '".$_POST['durjoy']."', '".$_POST['mahmud']."', '".$_POST['rono']."', '".$_POST['jony']."', '".$_POST['jakir']."', '".$_POST['gmjakir']."') ";
			if(mysqli_query($db, $in)){
				echo "Bazar Saved";
			}else{
				echo "not";
			}
		}
		
		?>
		
		<?php
		//Meal data update
		if(isset($_POST['update'])){
			$update = "UPDATE members SET manik='".$_POST['manik']."', sayed='".$_POST['sayed']."', durjoy='".$_POST['durjoy']."', mahmud='".$_POST['mahmud']."', rono='".$_POST['rono']."', jony='".$_POST['jony']."', jakir='".$_POST['jakir']."', gmjakir='".$_POST['gmjakir']."' WHERE id='".$_POST['id']."' ";
			if(mysqli_query($db, $update)){
				echo "update";
			}else{
				echo "not update";
			}
		}
		
		if(isset($_POST['edit'])){
			// Show Meal data In Input Form
			if(isset($_POST['edit'])){
				$edit_id = $_POST['edit_id'];
				$input_sql = "SELECT * FROM members WHERE id='$edit_id' ";
				$input_query = mysqli_query($db, $input_sql);
				$show_in_input = mysqli_fetch_assoc($input_query);
			}
		}
		
		?>
		
		
				<?php
		//Bazar data update
		if(isset($_POST['bazarup'])){
			$update_bz = "UPDATE bazar SET manik='".$_POST['manik']."', sayed='".$_POST['sayed']."', durjoy='".$_POST['durjoy']."', mahmud='".$_POST['mahmud']."', rono='".$_POST['rono']."', jony='".$_POST['jony']."', jakir='".$_POST['jakir']."', gmjakir='".$_POST['gmjakir']."' WHERE id='".$_POST['id']."' ";
			if(mysqli_query($db, $update_bz)){
				echo "Bazar update";
			}else{
				echo "Bazar not update";
			}
		}
		
		if(isset($_POST['bazar_edit'])){
			//bazar Show data In Input Form
			if(isset($_POST['bazar_edit'])){
				$bazar_edit_id = $_POST['bazar_edit_id'];
				$bazar_input_sql = "SELECT * FROM bazar WHERE id='$bazar_edit_id' ";
				$bazar_input_query = mysqli_query($db, $bazar_input_sql);
				$bazar_show_in_input = mysqli_fetch_assoc($bazar_input_query);
			}
		}
		
		?>
		
		
			<?php
			//Meal Data Delete
			if(isset($_POST['delete'])){
				$delete_id = $_POST['delete_id'];
				$delete_sql = "DELETE FROM members WHERE id='$delete_id' ";
				if(mysqli_query($db, $delete_sql)){
					echo "delete";
				}else{
					echo "<script>alert('Your file was save')</script>";
				}
				
			}

		?>
		
		<?php
			//Bazar Data Delete
			if(isset($_POST['bazar_delete'])){
				$bazar_delete_id = $_POST['bazar_delete_id'];
				$bazar_delete_sql = "DELETE FROM bazar WHERE id='$bazar_delete_id' ";
				if(mysqli_query($db, $bazar_delete_sql)){
					echo "delete";
				}else{
					echo "<script>alert('Your file was save')</script>";
				}
				
			}

		?>
		<div class="container">
		
		<h1 style="text-align:center;">Hostel Management</h1>
		<?php
			date_default_timezone_set("asia/dhaka");
				echo "<h6 style='text-align:center; color:green; font-weight:bold;'>Today is " . date('l-d-m-y') ."</h6></br>";
		
		?>
		<form action="" method="POST">
			<input style="width: 100px;" type="hidden" name="id" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['id']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['id']; }else{ echo""; } ?>">
			<input placeholder="Manik" style="width: 100px;" type="text" name="manik" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['manik']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['manik']; }else{ echo""; } ?>">
			<input placeholder="Sayed" style="width: 100px;" type="text" name="sayed" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['sayed']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['sayed']; }else{ echo""; } ?>"> 
			<input placeholder="Durjoy" style="width: 100px;" type="text" name="durjoy" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['durjoy']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['durjoy']; }else{ echo""; }?>">
			<input placeholder="Mahmud" style="width: 100px;" type="text" name="mahmud" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['mahmud']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['mahmud']; }else{ echo""; } ?>">
			<input placeholder="Rono" style="width: 100px;" type="text" name="rono" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['rono']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['rono']; }else{ echo ""; } ?>">
			<input placeholder="jony" style="width: 100px;" type="text" name="jony" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['jony']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['jony']; }else{ echo ""; } ?>">
			<input placeholder="jakir" style="width: 100px;" type="text" name="jakir" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['jakir']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['jakir']; }else{ echo ""; } ?>">
			<input placeholder="GM-jakir" style="width: 100px;" type="text" name="gmjakir" value="<?php if(!empty($show_in_input['id'])){ echo $show_in_input['jakir']; } elseif(isset($_POST['bazar_edit'])){ echo $bazar_show_in_input['gmjakir']; }else{ echo ""; } ?>">
			<?php
				if(isset($_POST['edit'])){
					echo "<input type='submit' name='update' value='Update' style='width:100px;'>";
				}elseif(isset($_POST['bazar_edit'])){
					echo "<input type='submit' name='bazarup' value='Update' style='width:100px;'>";
				}elseif(isset($_POST['ba'])){
					echo "<input type='submit' name='bazar' value='Bazar' style='width:100px;'>";
				}else{
					echo "<input type='submit' name='send' value='Meal' style='width:100px;'>";
				}
			?>
			<input type="submit" name="ba" value="Switch to Bazar">
		</form></br></br></br>
		<h3>Count of Meal</h3>
		<div class="row">
			
			<div class="col-sm-9">
				<table style="width:100%; border: 1px solid #99ff99;">
					
					<tr style="text-align:center; background-color: #66ff66;">
						<th style="border-right:1px solid #fff;">ID</th>
						<th style="border-right:1px solid #fff;">Manik</th>
						<th style="border-right:1px solid #fff;">Sayed</th>
						<th style="border-right:1px solid #fff;">Durjay</th>
						<th style="border-right:1px solid #fff;">Mahmud</th>
						<th style="border-right:1px solid #fff;">Rono</th>
						<th style="border-right:1px solid #fff;">Jony</th>
						<th style="border-right:1px solid #fff;">Jakir</th>
						<th style="border-right:1px solid #fff;">GM-Jakir</th>
						<th style="border-right:1px solid #fff;">Edit</th>
						<th style="border-left:1px solid #fff;">Delete</th>
					</tr>
					<?php
					$select = "SELECT * FROM members";
					$query = mysqli_query($db, $select);
					
					while($row = mysqli_fetch_assoc($query)){ ?>
					<tr style="text-align: center;">
						<td style="background-color:#00f37c91;"><?php echo $row['id']; ?></td>
						<td style="background-color:#ccffcc;"><?php echo $row['manik']; ?></td>
						<td style="background-color:#ccffff;"><?php echo $row['sayed']; ?></td>
						<td style="background-color:#ccffcc;"><?php echo $row['durjoy']; ?></td>
						<td style="background-color:#ccffff;"><?php echo $row['mahmud']; ?></td>
						<td style="background-color:#ccffcc;"><?php echo $row['rono']; ?></td>
						<td style="background-color:#ccffff;"><?php echo $row['jony']; ?></td>
						<td style="background-color:#ccffcc;"><?php echo $row['jakir']; ?></td>
						<td style="background-color:#ccffff;"><?php echo $row['gmjakir']; ?></td>
						<td style="background-color:#ccffcc;">
							<form action="" method="POST">
								<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
								<input style="background-color:#b3e8b3;" type="submit" name="edit" value="Edit">
							</form>
						
						</td>
						<td style="background-color:#ccffff;">
							<form action="" method="POST">
								<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
								<input style="background-color:#fff1f1;" type="submit" name="delete" value="Delete">
							</form>
						
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<div class="col-sm-3">
				<div style="border: 1px solid #99ff99; background-color: #99ff990d;">
					<h4 style="background-color: #99ff99; padding-left:15px;">Meal</h4>
					<div style="margin-left:30px;">
					<?php
						// Total Meal count
						$sql = "SELECT sum(manik) as manik FROM members";
						$query = mysqli_query($db, $sql);
						$manikm = mysqli_fetch_assoc($query);
						
						
						$sql = "SELECT sum(sayed) as sayed FROM members";
						$query = mysqli_query($db, $sql);
						$sayedm = mysqli_fetch_assoc($query);
			
						
						$sql = "SELECT sum(durjoy) as durjoy FROM members";
						$query = mysqli_query($db, $sql);
						$durjoym = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(mahmud) as mahmud FROM members";
						$query = mysqli_query($db, $sql);
						$mahmudm = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(rono) as rono FROM members";
						$query = mysqli_query($db, $sql);
						$ronom = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(jony) as jony FROM members";
						$query = mysqli_query($db, $sql);
						$jonym = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(jakir) as jakir FROM members";
						$query = mysqli_query($db, $sql);
						$jakirm = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(gmjakir) as gmjakir FROM members";
						$query = mysqli_query($db, $sql);
						$gmjakirm = mysqli_fetch_assoc($query);
						
						$total_meal = $manikm['manik'] + $sayedm['sayed'] + $durjoym['durjoy'] + $mahmudm['mahmud'] + $ronom['rono'] + $jonym['jony'] + $jakirm['jakir'] + $gmjakirm['gmjakir'];
						echo "Manik's Meal is=".$manikm['manik'] ."</br>";
						echo "Sayed's Meal is=".$sayedm['sayed'] ."</br>";
						echo "Durjoy's Meal is=".$durjoym['durjoy'] ."</br>";
						echo "Mahmud's Meal is=".$mahmudm['mahmud'] ."</br>";
						echo "Rono's Meal is=".$ronom['rono'] ."</br>";
						echo "Jony's Meal is=".$jonym['jony'] ."</br>";
						echo "Jakir's Meal is=".$jakirm['jakir'] ."</br>";
						echo "GMjakir's Meal is=".$gmjakirm['gmjakir'] ."</br> </br>";
						
						echo "Total Meals=". $total_meal  ."</br>";
						echo "<br>";
						
					?>
					</div>
				</div>
			</div>
		</div>
		</br>
		<h3> Amount of Bazar </h3>
			<div class="row">
				<div class="col-sm-9">
					<table  style="width:100%; border: 1px solid #99ff99;">
						
						<tr style="text-align:center; background-color: #66ff66;">
							<th style="border-right:1px solid #fff;">ID</th>
							<th style="border-right:1px solid #fff;">Manik</th>
							<th style="border-right:1px solid #fff;">Sayed</th>
							<th style="border-right:1px solid #fff;">Durjay</th>
							<th style="border-right:1px solid #fff;">Mahmud</th>
							<th style="border-right:1px solid #fff;">Rono</th>
							<th style="border-right:1px solid #fff;">Jony</th>
							<th style="border-right:1px solid #fff;">Jakir</th>
							<th style="border-right:1px solid #fff;">GM-Jakir</th>
							<th style="border-right:1px solid #fff;">Edit</th>
							<th style="border-right:1px solid #fff;">Delete</th>
						</tr>
						<?php
						$select = "SELECT * FROM bazar";
						$query = mysqli_query($db, $select);
						
						while($row = mysqli_fetch_assoc($query)){ ?>
						<tr style="text-align: center;">
							<td style="background-color:#00f37c91;"><?php echo $row['id']; ?></td>
							<td style="background-color:#ccffcc;"><?php echo $row['manik']; ?></td>
							<td style="background-color:#ccffff;"><?php echo $row['sayed']; ?></td>
							<td style="background-color:#ccffcc;"><?php echo $row['durjoy']; ?></td>
							<td style="background-color:#ccffff;"><?php echo $row['mahmud']; ?></td>
							<td style="background-color:#ccffcc;"><?php echo $row['rono']; ?></td>
							<td style="background-color:#ccffff;"><?php echo $row['jony']; ?></td>
							<td style="background-color:#ccffcc;"><?php echo $row['jakir']; ?></td>
							<td style="background-color:#ccffff;"><?php echo $row['gmjakir']; ?></td>
							<td style="background-color:#ccffcc;">
								<form action="" method="POST">
									<input type="hidden" name="bazar_edit_id" value="<?php echo $row['id']; ?>">
									<input style="background-color:#b3e8b3;" type="submit" name="bazar_edit" value="Edit">
								</form>
							
							</td>
							<td style="background-color:#ccffff;">
								<form action="" method="POST">
									<input type="hidden" name="bazar_delete_id" value="<?php echo $row['id']; ?>">
									<input style="background-color:#fff1f1;" type="submit" name="bazar_delete" value="Delete">
								</form>
							
							</td>
						</tr>
						<?php } ?>
					</table>
			</div>
			
			<div class="col-sm-3">
				<div style="border: 1px solid #99ff99; background-color: #99ff990d;">
				<h4 style="background-color: #99ff99; padding-left:15px;">Bazar</h4>
					<div style="margin-left:30px;">
					<?php
						// Total Meal count
						$sql = "SELECT sum(manik) as manik FROM bazar";
						$query = mysqli_query($db, $sql);
						$manikb = mysqli_fetch_assoc($query);
						
						
						$sql = "SELECT sum(sayed) as sayed FROM bazar";
						$query = mysqli_query($db, $sql);
						$sayedb = mysqli_fetch_assoc($query);
			
						
						$sql = "SELECT sum(durjoy) as durjoy FROM bazar";
						$query = mysqli_query($db, $sql);
						$durjoyb = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(mahmud) as mahmud FROM bazar";
						$query = mysqli_query($db, $sql);
						$mahmudb = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(rono) as rono FROM bazar";
						$query = mysqli_query($db, $sql);
						$ronob = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(jony) as jony FROM bazar";
						$query = mysqli_query($db, $sql);
						$jonyb = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(jakir) as jakir FROM bazar";
						$query = mysqli_query($db, $sql);
						$jakirb = mysqli_fetch_assoc($query);
						
						$sql = "SELECT sum(gmjakir) as gmjakir FROM bazar";
						$query = mysqli_query($db, $sql);
						$gmjakirb = mysqli_fetch_assoc($query);
						
						$total_bazar = $manikb['manik'] + $sayedb['sayed'] + $durjoyb['durjoy'] + $mahmudb['mahmud'] + $ronob['rono'] + $jonyb['jony'] + $jakirb['jakir'] + $gmjakirb['gmjakir'];
						echo "Manik's bazar is=".$manikb['manik'] ."</br>";
						echo "Sayed's bazar is=".$sayedb['sayed'] ."</br>";
						echo "Durjoy's bazar is=".$durjoyb['durjoy'] ."</br>";
						echo "Mahmud's bazar is=".$mahmudb['mahmud'] ."</br>";
						echo "Rono's bazar is=".$ronob['rono'] ."</br>";
						echo "Jony's bazar is=".$jonyb['jony'] ."</br>";
						echo "Jakir's bazar is=".$jakirb['jakir'] ."</br>";
						echo "GMjakir's bazar is=".$gmjakirb['gmjakir'] ."</br> </br>";
						
						echo "Total bazar=". $total_bazar  ."</br>";
						echo "<br>";
						
					?>
					</div>
				</div>
			</div>
			
			</div>
			
			<div class="row">
				<div class="col-sm-3">
			
				</div>
				<div class="col-sm-6">
					<center>
					 <?php
							$per_meal = $total_bazar / $total_meal ;
							echo "<div style='color: #ff3300;'>Per Meal rate=" .$per_meal ."</div>";
						?></center>
					<div class="">
						<table  style="width:100%; border: 1px solid #99ff99;">
							<tr style="text-align:center; background-color: #66ff66;">
								<th>Name</th>
								<th>Meal_Cost</th> 
								<th>Money Give or Take</th>
							</tr>
							<tr style="text-align:center; background-color: #ccffcc;">
								<td>Manik</td>
								<td><?php $eq = $manikm['manik'] * $per_meal ; echo "(". $manikm['manik']."*" .$per_meal .")" ."=" .$manikm['manik'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $manikb['manik'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffeb;">
								<td>Sayed</td>
								<td><?php $eq = $sayedm['sayed'] * $per_meal ; echo "(". $sayedm['sayed']."*" .$per_meal .")" ."=" . $sayedm['sayed'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $sayedb['sayed'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffcc;">
								<td>Durjay</td>
								<td><?php $eq = $durjoym['durjoy'] * $per_meal ; echo "(". $durjoym['durjoy']."*" .$per_meal .")" ."=" . $durjoym['durjoy'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $durjoyb['durjoy'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffeb;">
								<td>Mahmud</td>
								<td><?php $eq = $mahmudm['mahmud'] * $per_meal ; echo "(". $mahmudm['mahmud']."*" .$per_meal .")" ."=" . $mahmudm['mahmud'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $mahmudb['mahmud'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffcc;">
								<td>Rono</td>
								<td><?php $eq = $ronom['rono'] * $per_meal ; echo "(". $ronom['rono']."*" .$per_meal .")" ."=" . $ronom['rono'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $ronob['rono'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffeb;">
								<td>Jony</td>
								<td><?php $eq = $jonym['jony'] * $per_meal ; echo "(". $jonym['jony']."*" .$per_meal .")" ."=" . $jonym['jony'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $jonyb['jony'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffcc;">
								<td>Jakir</td>
								<td><?php $eq = $jakirm['jakir'] * $per_meal ; echo "(". $jakirm['jakir']."*" .$per_meal .")" ."=" . $jakirm['jakir'] * $per_meal ." TK"; ?></td> 
								<td><?php echo $jakirb['jakir'] - $eq ; ?></td>
							</tr>
							<tr style="text-align:center; background-color: #ccffeb;">
								<td>GM-Jakir</td>
								<td><?php $eq = $gmjakirm['gmjakir'] * $per_meal ; echo "(". $gmjakirm['gmjakir']."*" .$per_meal .")" ."=" . $gmjakirm['gmjakir'] * $per_meal ." TK" ;?></td> 
								<td><?php echo $gmjakirb['gmjakir'] - $eq ; ?></td>
							</tr>
							
							
						</table>
						<br><br><br><br><br><br>
						
					</div>
				</div>
				<div class="col-sm-3">
			
				</div>
			</div>
			
			
			
			
			
			
		</div>	
	</body>
</html>