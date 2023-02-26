<h1><?php echo $admin->get_username($id).' ';?>Profile</h1>
<div class="customer">
<form method="POST" action="processes/process.admin.php?action=update">
        <div id="form-block-half">
        <label for="adm_username">Username: </label>
                        <input type="text" id="adm_username" class="text" name="adm_username" value="<?php echo $admin->get_username($id);?>" readonly>
            <label for="adm_fname">First Name: </label>
			<input type="text" id="adm_fname" class="text" name="adm_fname" value="<?php echo $admin->get_fname($id);?>" placeholder="Enter First Name..." required>
            <br><br>
            <label for="adm_email">Email Address: </label>
		        <input type="text" id="adm_email" class="text" name="adm_email" value="<?php echo $admin->get_email($id);?>" placeholder="Enter Email Address..." required>

            <label for="adm_lname">Last Name: </label>
		        <input type="text" id="adm_lname" class="text" name="adm_lname" value="<?php echo $admin->get_lname($id);?>" placeholder="Enter Last Name..." required>
            <br><br>
            <label for="adm_password">Password: </label>
		        <input type="text" id="adm_password" class="text" name="adm_password" value="<?php echo $admin->get_password($id);?>" placeholder="Enter Password..." required>
            <br><br>
            <label for="adm_cnumber">Contact Number: </label>
		        <input type="text" id="adm_cnumber" class="text" name="adm_cnumber" value="<?php echo $admin->get_cnumber($id);?>" placeholder="Enter Contact No...." required>
            <br><br>
        </div>
        <div id="button-block">
        <input type="submit" value="Update">
        </div>
        <br><br>
        <a href="processes/process.admin.php?action=delete">Delete</a>
        </form>
        
</div>

