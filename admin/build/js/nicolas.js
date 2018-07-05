$(document).ready(function(){
	$("#recetteForm").click(function(e){
		$("#recette_instruction").val($('#editor-one').cleanHtml());
	});
});