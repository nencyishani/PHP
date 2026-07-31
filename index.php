<!DOCTYPE html>
<html>
<head>
    <title>Load AJAX Text File</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () 
        {
            $("#btn").click(function () 
            {
                $("#result").load("viewdata.txt");
            });
        });

    </script>
</head>

<body>

    <h2> Load Text File using AJAX </h2>

    <button id="btn"> Load Text File </button>

    <div id="result"></div>

</body>
</html>