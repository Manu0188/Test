<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="cropper.css" />
	<script src="cropper.js"></script>
</head>
<body>
	<div>
		<img id="image" style="width: 200px;" src="logo_facebook.png" />
	</div>

	<script type="text/javascript">
		$('#image').cropper();

		function crop(){			
			$('#image').cropper('getCroppedCanvas').toBlob(function (blob) {
			  var formData = new FormData();

			  formData.append('croppedImage', blob);

			  $.ajax('upload.php', {
			    method: "POST",
			    data: formData,
			    processData: false,
			    contentType: false,
			    success: function (result) {
			      console.log('Upload success');
			    },
			    error: function () {
			      console.log('Upload error');
			    }
			  });
			});
		}
	</script>
	<style type="text/css">
		.cropper-crop{
			display: none;
		}

		.cropper-bg{
			background: :none;
		}
	</style>

	<button onclick="crop();">Crop</button>
</body>
</html>