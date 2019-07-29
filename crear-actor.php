<?php
	require_once 'autoload.php';

	$movies = DB::getAllMovies();
	$actors = DB::getAllActors();


	if ($_POST) {
		$actorToSave = new Actor($_POST['first_name'], $_POST['last_name']);
		$actorToSave->setfavoriteMovieId($_POST['favorite_movie_id']);
		$actorToSave->setRating($_POST['rating']);

		$saved = DB::saveActor($actorToSave);
	}

	$pageTitle = 'Crear Actor';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10">
					<h2>Crear Actor</h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Nombre:</label>
									<input type="text" class="form-control" placeholder="Jude" name="first_name">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Apellido:</label>
									<input type="text" class="form-control" placeholder="Law" name="last_name">
								</div>
							</div>

							<div class="col-6">
								<div class="form-group">
									<label>Rating:</label>
									<input type="text" class="form-control" placeholder="5" name="rating">
								</div>
							</div>


							<div class="col-6">
								<div class="form-group">
									<label>Pelicula Favorita:</label>
									<select class="form-control" name="favorite_movie_id">
										<option value="">Seleccioná la peli favorita</option>
										<?php foreach ($movies as $movie): ?>
											<option value="<?php echo $movie->getId() ?>"><?php echo $movie->getTitle()?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Actor guardado con éxito!' : '¡No se pudo guardar el actor!' ?>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>
