<html>
    <body>
        <?php
            $name = $email = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $name = test_input($_POST["name"]);
                $email = test_input($_POST["email"]);
            }

            function test_input($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data, ENT_QUOTES);
            }
        ?>
        <p>Welcome <?php echo $name; ?>, you have submitted the form</p>
        <p>More news will send to your Email: <?php echo $email; ?></p>
    </body>
</html>