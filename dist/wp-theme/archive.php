<?php get_header();

$id = get_the_ID();

echo $id;

$args = array('parent' => $id, 'hide_empty' => false);
$categories = get_categories( $args );
foreach($categories as $category) { 
    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    echo '<p> Description:'. $category->description . '</p>';
    echo '<p> Post Count: '. $category->count . '</p>';  
}

?>


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