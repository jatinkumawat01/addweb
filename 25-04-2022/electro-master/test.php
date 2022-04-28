<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <a href="#" class="test" onclick="fun('mobile')">testlink</a>
 <div class="test">

 </div>
    <script>
        function fun(a){
	$.ajax({
		url: "productView.php?tname="+a,
		type: "POST",
		cache: false,
		success: function(data){
			//alert(data);
			$('#test').html(data); 
		}
	});}

    </script>
</body>
</html>