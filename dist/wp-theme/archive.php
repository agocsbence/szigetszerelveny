<?php get_header();

$id = get_the_ID();

$categories = get_terms( 
	'category', array(
		'parent' => 22,
		'hide_empty' => false,
	)
);
$count = count($categories);
var_dump($categories);

for( $i=0; $i<$count; $i++ ) { 

	$category_link = get_category_link( $categories[$i]->{'term_id'} );
	$image = get_field('kep', $categories[$i]->taxonomy . '_' . $categories[$i]->term_id ); ?>

	<div class="col-sm-12 col-lg-4">
		<a href="<?php echo esc_url( $category_link ); ?>" class="card">
			<img src="<?php echo $image?>" class="card-img-top" alt="<?php echo $categories[$i]->{'name'} ?>">
			<div class="card-body">
				<h5 class="card-title"><?php echo $categories[$i]->{'name'} ?></h5>
			</div>
		</a>
	</div>
<?php } ?>


<section class="section products container">
	<nav class="mt-5" aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="termekek.html">Termékek</a></li>
			<li class="breadcrumb-item active" aria-current="page">Víz-gáz-fűtés</li>
		</ol>
	</nav>
	<div class="row mt-2">
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="./assets/img/csovek.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Csövek, csőrendszerek, idomok</h5>
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
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="./assets/img/mosogato.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Mosogatótálca, falikutak</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="./assets/img/ontozes.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Öntözéstechnika</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="./assets/img/radiator.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Radiátor</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
					<li class="list-group-item">An item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="https://placehold.it/640x360" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Szerelvények</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="https://placehold.it/640x360" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Szifonok</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="https://placehold.it/640x360" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Szivattyúk</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-12 col-lg-3 g-3">
			<div class="card">
				<a href="">
					<img src="https://placehold.it/640x360" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Tágulási tartályok</h5>
					</div>
				</a>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">An item</li>
					<li class="list-group-item">A second item</li>
					<li class="list-group-item">A third item</li>
					<li class="list-group-item">An item</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer();