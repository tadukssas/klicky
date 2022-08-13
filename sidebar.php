<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Klicky
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

$query = new WP_Query(array(
	'post_type' => 'plants',
	'posts_per_page' => -1,
	
));
?>
<main id="primary" class="site-main">
<h1><span class="blues"></span>Augalų<span class="blue"></span> <span class="yellow">Enciklopedija</pan></h1>
<div >
<table class="container">
	<thead>
		<tr>
			<th><h1><span class="yellow">Pavadinimas</span></h1></th>
			<th><h1><span class="blue">Lotyniškas pavadinimas</span></h1></th>
			<th><h1>Daugiametis</h1></th>
			<th><h1>Amžius</h1></th>
			<th><h1>Aukštis</h1></th>
			
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
			if($query->have_posts()){
				while($query->have_posts()) {
					$query->the_post();
				?>
					<tr >
						<td><?=get_field("pavadinimas", get_the_ID())?> </td>
						<td><?=get_field("pav_lotyniskai", get_the_ID())?> </td>
						<td><?=get_field("daugiametis", get_the_ID()) ? "Daugiametis" : "Vienametis" ?></td>
						<td><?=get_field("amzius", get_the_ID())?>Mėn</td>
						<td><?=get_field("aukstis", get_the_ID())?>M </td>
					</tr>
					<?php	
				}
			}?>
		</tr>
	</tbody>
</table>
</div>

</main>
<?php

