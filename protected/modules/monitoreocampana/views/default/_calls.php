<?php
//print_r($llamadasCola);
?>

<?php if (count($llamadasCola) > 0): ?>
<table class="table table-hover table-striped" style="border-width: 1px 1px 0;">
	<thead class = "tituloTabla">
		<tr>
			<th class= "tituloTablath"><?php echo implode('</th><th class= "tituloTablath">', array_keys(current($llamadasCola))); ?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($llamadasCola as $row): array_map('htmlentities', $row); ?>
		<tr>
			<td><?php echo implode('</td><td>', $row); ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>


