<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<?php $this->load->view('Frontend/layout/v_header');?>
</head>
<body>
	<div class="body">
		<?php $this->load->view('Frontend/layout/nav_header');?>
		<div role="main" class="main">
			<?php $this->load->view('Frontend/k_frontend');?>
		</div>
		<?php $this->load->view('Frontend/layout/v_footer');?>
	</div>

	<?php $this->load->view('Frontend/layout/v_filejs');?>
</body>
</html>
