<!-- Kapcsolat felvétel -->

	<?php if(isset($uzenet)) { ?>
		
		<?php if($ujra) { ?>
			<b class="alert-danger text-center">Az üzenetet nem sikerült elküldeni!</b>
			<h2 class="text-center"><?php echo $uzenet; ?></h2>
			<p class="text-center"><a href="?page=contact" >Próbálja újra!</a></p>
	<?php }else{ ?><b class="alert-success text-center">Az üzenetet sikeresen elküdte!</b> 
	<?php }} ?>
