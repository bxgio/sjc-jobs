
<?php

if (isset($_SESSION['msg']))
 {
 ?>
	<script type="text/javascript">

		window.alert("<?php echo $_SESSION['msg']; ?>")

	</script>
	
<?php
}
unset($_SESSION['msg']);
?>