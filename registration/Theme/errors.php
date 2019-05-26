<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><h3><font color="red">! <?php echo $error ?></font></h3></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
