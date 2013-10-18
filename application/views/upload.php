
<?php
	echo form_open_multipart(base_url().'UploadTestController/doupload');
?>
	
	<input type="file" name="userfile" size="20" />
	
	<input type="submit" value="upload" />

	</form>	
