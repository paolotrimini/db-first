<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- bootstrap v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <style>
        body {
            background: darkgoldenrod;
            color: white;
        }
    </style>
    <script>
        function init() {

        }
        document.addEventListener("DOMContentLoaded",init);
    </script>
    <title>db-first</title>
</head>
<body>
<div id="app" class="container text-center">
    <div class="row">
        <div class="col-12 mt-3">
            <h1>DB-FIRST - Lista delle stanze</h1>
            <?php
                function getConnection( $servername = "localhost:8889",
                                        $username = "root",
                                        $password = "root",
                                        $dbname = "dbhotel") {
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn && $conn->connect_error) {
                        echo "Connection failed: " . $conn->connect_error;
                    }
                    return $conn;
                }
                $conn = getConnection();
                //var_dump($conn); die();
            ?>

        </div>
    </div>
</div>
</html>