import "./bootstrap";
import "./footerYear";
// import "./cookieBar";
import './navigationBgc';
import "./gallery";

window.onload = function() {
    // Hide the loader
    document.getElementById('loader').style.display = 'none';

    // Show the images
    document.querySelectorAll('.gallery-image').forEach(function(image) {
        image.style.display = 'block';
    });
};