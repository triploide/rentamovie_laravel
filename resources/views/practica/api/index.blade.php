<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Api</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
 
        $.ajax({
            type: 'post',
            url: '/api/movies/1',
            data: {api_token: 'q1dk5sys2q77crpbrqx9uhlyp4yeqs7nmtox01hsc351i0w58ou6xmezb58u'},
            success: function (response) {
                console.log(response)
            }
        });

        var RAM = {
            ajax: function (options) {
                var req = new XMLHttpRequest()
                req.onreadystatechange = function () {
                    if (this.readyState === 4) {
                        var response = JSON.parse(this.responseText);
                        if (this.status === 200) {
                            options.success(response);
                        } else {
                            options.error(response);
                        }
                    }
                }
                req.open(options.type, options.url)
                req.setRequestHeader('Content-Type', 'application/json');
                req.send(JSON.stringify(options.data));
            }
        }
        RAM.ajax({
            type: 'POST',
            url: '/api/movies/1',
            data: {api_token:'q1dk5sys2q77crpbrqx9uhlyp4yeqs7nmtox01hsc351i0w58ou6xmezb58u'},
            success: function (response) {
                console.log(response)
            }
        });
    </script>
</body>
</html>