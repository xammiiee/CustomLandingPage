<?php
function message($message,$messagetype){
		if ($messagetype =="1") {
			echo '
			<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<img src="..." class="rounded mr-2" alt="...">
					<strong class="mr-auto">Successfully</strong>
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="toast-body">
				'.$message.'
				header("location: login.php");
				</div>
			</div>
					
';
} else {
	echo '<div class="alert alert-danger text-center" role="alert">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		'.$message.'
		
</div>';
}
}
?>