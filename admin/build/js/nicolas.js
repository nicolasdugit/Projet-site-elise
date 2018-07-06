$(document).ready(function(){
	$("#recetteForm").click(function(e){
		$("#recette_instruction").val($('#editor-one').cleanHtml());
	});
});

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


		this.on("sending", function(file, xhr, formData) {
			// formData.append("status", 'new');
			// formData.append("user_id", 1);
			$('#namePhotos').val(file.status);
		});

		/* On Success, do whatever you want */
		this.on("success", function(file, responseText) {      
			alert('Success');
		});
	}

}