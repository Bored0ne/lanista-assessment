// code to pop out of an iframe
var url = (window.location != window.parent.location)
            ? document.referrer
            : document.location;

// this needs to be the location of the image.php file.
document.write('<img src="http://localhost/image.php?url=' + encodeURI(url) + '"></img>');
