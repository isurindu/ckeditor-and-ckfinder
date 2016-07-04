<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>

</head>

<body>
		<div id="editor1"></div>


<script>
	// Note: in this sample we use CKEditor with two extra plugins:
	// - uploadimage to support pasting and dragging images,
	// - image2 (instead of image) to provide images with captions.
	// Additionally, the CSS style for the editing area has been slightly modified to provide responsive images during editing.
	// All these modifications are not required by CKFinder, they just provide better user experience.
	if ( typeof CKEDITOR !== 'undefined' ) {
		CKEDITOR.addCss( 'img {max-width:100%; height: auto;}' );
		var editor = CKEDITOR.replace( 'editor1', {
			extraPlugins: 'uploadimage,image2',
			removePlugins: 'image',
			height:350
		} );
		CKFinder.setupCKEditor( editor );
	} else {
		document.getElementById( 'editor1' ).innerHTML = '<div class="tip-a tip-a-alert">This sample requires working Internet connection to load CKEditor from CDN.</div>'
	}
</script>
</body>
</html>