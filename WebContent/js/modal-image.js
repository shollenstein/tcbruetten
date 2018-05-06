
function openModalImage(src, caption) {
	var modal = document.getElementById('imgModal');
	var modalImg = document.getElementById('imgModalImg');
	modal.style.display = "block";
	modalImg.src = src;
	
	var captionText = document.getElementById("caption");
	captionText.innerHTML = caption;
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}
}