var infoRecette = document.getElementById('info_recette');
var recetteImage = document.getElementById('recette_image');
var recetteFormButton = document.getElementById('recetteForm');
var contentRecette = document.getElementById('content_recette');

if (recetteImage === null) {
	infoRecette.style.display = "none";
	recetteFormButton.style.display = 'none';
	contentRecette.style.display = 'none';
} else {
	infoRecette.style.display = '';
	recetteFormButton.style.display = '';
	contentRecette.style.display = '';
};