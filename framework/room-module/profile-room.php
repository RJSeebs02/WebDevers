<h1>Room No. <?php echo $room->get_room_number($id).' ';?>Profile</h1>
<div class="customer">
<form method="POST" action="processes/process.room.php?action=update">
        <div id="form-block-half">
        <label for="room_id">Room ID: </label>
                        <input type="text" id="room_id" class="text" name="room_id" value="<?php echo $room->get_room_id($id);?>" readonly>
            <label for="room_number">Room Number: </label>
			<input type="text" id="room_number" class="text" name="room_number" value="<?php echo $room->get_room_number($id);?>" placeholder="Enter Room No...." required>
            <br><br>
            <label for="room_type">Room Type: </label>
		        <input type="text" id="room_type" class="text" name="room_type" value="<?php echo $room->get_room_type($id);?>" placeholder="Enter Room Type..." required>

            <label for="room_desc">Description: </label>
		        <input type="text" id="room_desc" class="text" name="room_desc" value="<?php echo $room->get_room_desc($id);?>" placeholder="Enter Description..." required>
            <br><br>
            <label for="room_price">Room Price: </label>
		        <input type="text" id="room_price" class="text" name="room_price" value="<?php echo $room->get_room_price($id);?>" placeholder="Enter Room Price..." required>
            
            <label for="room_floor">Room Floor: </label>
		        <input type="text" id="room_floor" class="text" name="room_floor" value="<?php echo $room->get_room_floor($id);?>" placeholder="Enter Room Floor..." required>
        </div>
        <br><br>
        <div id="button-block">
        <input type="submit" value="Update">
        </div>
        <br><br>
        <a href="processes/process.room.php?action=delete">Delete</a>
        </form>
        
</div>

