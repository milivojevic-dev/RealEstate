<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(document).ready(function () {
            $("input").click(function () {
                $.post("list.php", {
                    name: "VTS",
                    hill: "Fruška Gora"
                }, function (data, status) {
                    console.log(status);
                    // https://api.jquery.com/each/#each-function
                    $.each(data, function (key, val) {
                        $.each(val, function (k, v) {
                            $('#test').append(k + ":" + v + "<br>");
                        });
                        $('#test').append("<hr>");
                    })
                }, 'json');
            });
        });


    </script>

</head>
<body>
<h1>This is a heading</h1>
<p id="test">This is a paragraph.</p>
<input type="button" value="Click me">
</body>
</html>
