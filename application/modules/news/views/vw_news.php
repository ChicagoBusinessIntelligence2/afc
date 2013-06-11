<div class="mainContent">
	<?php 
				foreach ($site_news as $row) {
					echo '<h1>' . $row->title . '</h1> <hr/>';
					echo '<p>' . $row->body . '</p>';
				}
			 ?>
</div>