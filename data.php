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

        function closeConn($conn, $stmt){

            $stmt -> close();
            $conn -> close();
        }

        function getStanzeSql(){
            return"
            SELECT room_number
            FROM stanze
            ";
        }

        function getDettagliStanza(){
            return "
            SELECT floor, beds
            FROM stanze;
           /* WHERE id = ?*/
            ";
        }

    ?>
