<!DOCTYPE html>
<html>
<head>
    <title></title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () 
        {

            // Mouse Events
            $("#btn").click(function () 
            {
                $("#msg").text("Button Clicked!");
            });

            $("#box").mouseenter(function () 
            {
                $("#msg").text("Mouse Entered the Box");
            });

            $("#box").mouseleave(function () 
            {
                $("#msg").text("Mouse Left the Box");
            });

            // Keyboard Event
            $("#name").keydown(function () 
            {
                $("#msg").text("Key Pressed!");
            });

            $("#name").keyup(function () 
            {
                $("#msg").text("Key Released!");
            });

        });
    </script>
</head>

<body>

    <h2>jQuery Mouse and Keyboard Events</h2>

    <button id="btn">Click Me</button>

    <br><br>

    <div id="box" >
        Move Mouse Here
    </div>

    <br>

    <input type="text" id="name" placeholder="Type Something">

    <p id="msg">Event message will appear here</p>

</body>
</html>