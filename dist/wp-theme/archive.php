<?php get_header(); ?>

<section class="section products container">
	<nav class="mt-5" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="termekek.html">Termékek</a></li>
			<li class="breadcrumb-item active" aria-current="page">Víz-gáz-fűtés</li>
		</ol>
	</nav>
	<div class="row mt-2">

		<?php
		
		$category = get_category( get_query_var( 'cat' ) );
		$cat_id = $category->cat_ID;

		$args = array('parent' => $cat_id, 'hide_empty' => false);
		$categories = get_categories( $args );
		foreach($categories as $category) { 
			$image = get_field('kep', $category->taxonomy . '_' . $category->term_id );?>

			<div class="col-sm-12 col-lg-3 g-3">
				<div class="card">
					<a href="">
						<img src="<?php if ($image): echo $image; else: echo 'https://placehold.it/640x360'; ?>" class="card-img-top" alt="<?php echo $category->name ?>">
						<div class="card-body">
							<h5 class="card-title"><?php echo $category->name ?></h5>
						</div>
					</a>
					<ul class="list-group list-group-flush">
						<li class="list-group-item"><a href="single.html">Acélcső,idomok</a></li>
						<li class="list-group-item">KPE cső, idomok</li>
						<li class="list-group-item">Lefolyócső, idomok</li>
						<li class="list-group-item">Ötrétegű cső, fitting</li>
						<li class="list-group-item">Rézcső, idomok</li>
						<li class="list-group-item">Szénacél cső, idomok</li>
						<li class="list-group-item">Szigetelés, védőcső</li>
					</ul>
				</div>
			</div>

		<?php } ?>

	</div>
</section>

<?php get_footer();