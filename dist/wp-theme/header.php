<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8" />
	<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/state.css?v=1.0.0" type="text/css" />

	<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
	<link href="webclip.png" rel="apple-touch-icon" />
	<?php wp_head(); ?>
</head>

<body class="body bg-light">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
					<img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-top">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mb-2 px-lg-5 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(20); ?>">Termékek</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(24); ?>">Rólunk</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								Partnereink
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Viessmann</a></li>
								<li><a class="dropdown-item" href="#">Ariston</a></li>
								<li><a class="dropdown-item" href="#">Saunier Duval</a></li>
								<li><a class="dropdown-item" href="#">Vaillant</a></li>
								<li><a class="dropdown-item" href="#">Riello</a></li>
								<li><a class="dropdown-item" href="#">Biasi</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_permalink(26); ?>">Kapcsolat</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><span class="badge bg-warning text-dark">Új üzletünk</span></a>
						</li>
					</ul>
					<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Keresés" aria-label="Keresés">
						<button class="btn btn-outline-success" type="submit">Keresés</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<main>