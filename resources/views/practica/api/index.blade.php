<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>API</title>
</head>
<body>
	<h1>Hola mundo</h1>

	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

	<script>
		var params = {param1: 'value1', param2: 'value2'}
		$.ajax({
			url: '/api/movies',
			type: 'GET',
			//data: {'api_token': '4x6RHIsWdtCitN8ESctIurC99wQHfn8i3MZRTIfYxrOcYc4mryYgSRpz1mUz'},
			success: function (response) {
				console.log(response)
			} 
		});
	</script>

</body>
</html>