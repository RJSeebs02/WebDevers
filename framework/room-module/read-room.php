<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
	</head>
	<body>
		<div class="customer">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>List of Rooms</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
    							<thead>
        							<th>Room ID</th>
        							<th>Room No.</th>
        							<th>Room Type</th>
									<th>Room Description</th>
        							<th>Room Price</th>
									<th>Room Floor</th>
								</thead>
								<?php
								$count = 1;
								$count = 1;
								if($room->list_rooms() != false){
								foreach($room->list_rooms() as $value){
   								extract($value);
  
								?>
								<tbody>
      								<tr>
        								<td><?php echo $room_id;?></td>
        								<td><a href="index.php?page=rooms&subpage=profile&id=<?php echo $room_id; ?>"><?php echo $room_number;?></a></td>
        								<td><?php echo $room_type;?></td>
										<td><?php echo $room_desc;?></td>
        								<td>Php <?php echo $room_price;?></td>
										<td><?php echo $room_floor;?></td>
									</tr>
								</tbody>
								<?php
 								$count++;
								}
								}else{
								?>
									<tr>
										<td colspan="7">"No Record Found."</td>
									</tr>
								<?php
								}
								?>
    						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>