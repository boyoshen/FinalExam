<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>JSON</title>
    </head>
    <body>
        <?php
            $link=mysqli_connect('localhost','103021017','bppbpg');
			mysqli_query($link,'SET CHARACTER SET utf8');	
			mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
			$db=mysqli_select_db($link,'103021017_');
            $sql = "SELECT * FROM song_table";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $myarray[] = $row;
                }
            } else {
                    echo "0 results";
            }

            $myarray = array('song_table' => $myarray);
            
            echo json_encode($myarray,JSON_UNESCAPED_UNICODE);        

            mysqli_close($link);
        ?>
    </body>
</html>