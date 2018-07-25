$(document).ready(function(){
	$("#recetteForm").click(function(e){
		$("#recette_instruction").val($('#editor-one').cleanHtml());
	});
});



function infoImage(elem) {
	$("#recette_image").val(elem.id);
	$toto = 2;
	window.location.href = "index.php?page=creationRecette&id=" + elem.id;
	
}

Dropzone.options.dropzoneElement = {
	maxFiles: 2,
	maxFilesize: 500, // File size in Mb
	acceptedFiles: 'image/jpeg,image/png,image/gif',
	autoProcessQueue: false,
	init: function() {
		var submitButton = document.querySelector("#btnUpload")
		myDropzone = this;

		submitButton.addEventListener("click", function() {
		/* Check if file is selected for upload */
			if (myDropzone.getUploadingFiles().length === 0 && myDropzone.getQueuedFiles().length === 0) {      
				alert('No file selected for upload');  
				return false;
			}
			else {
				/* Remove event listener and start processing */ 
				myDropzone.removeEventListeners();
				myDropzone.processQueue(); 
			}
		});

		/* On Success, do whatever you want */
		this.on("success", function(file, responseText) {
			alert('Success');
			window.location.href = "index.php?page=gestionImage";
		});
	}
}