<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Jquery</title>
    <script src="jquery-3.4.1.min.js"></script>

</head>

<body>
    <script>
        $(function() {
            $("button").click(function() {
                $.post("post.php", {
                        name: "TnyKnc",
                        country: "Türkiye"
                    },
                    function(data, status) {
                        $("div").html(data);
                    });
            });

        });
    </script>

    <form method="POST" action="post.php">
        <select name="number_values">
            <option selected disabled>Seçin</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <input type="submit" name="submit" value="Gönder" />
    </form>
</body>

</html>