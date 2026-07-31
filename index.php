<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest with PHP</title>

    <script>
        function loadData() 
		{
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () 
			{
                if (xhr.readyState == 4 && xhr.status == 200) 
				{
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "getdata.php", true);
            xhr.send();
        }
    </script>
</head>
<body>

    <h2>Retrieve Data from TXT File using XMLHttpRequest</h2>

    <input type="button" value="Load Data" onclick="loadData()">

    <hr>

    <div id="result" style="border:1px solid black; padding:10px; width:300px;">
        Click the button to load data.
    </div>

</body>
</html>