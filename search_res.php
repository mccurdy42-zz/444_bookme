<?php

        // Enable error logging:
        error_reporting(E_ALL ^ E_NOTICE);
        // mysqli connection via user-defined function


        // Function to obtain mysqli connection.
        function get_mysqli_conn()
        {
        $dbhost = 'localhost';
        $dbuser = 's2mccurd';
        $dbpassword = 'Winter@*%2018';
        $dbname = 's2mccurd';
        $mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
        if ($mysqli->connect_errno)
        {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        }

        return $mysqli;
        }

        $mysqli = get_mysqli_conn();


/*from webstie */
        $search=$_POST['search'];
        $query = $mysqli->prepare("select * from listing L where L.title LIKE '%$search%' OR L.title LIKE '%$search%'  LIMIT 0 , 10");
        /*//$query->bindValue(1, "%$search%", PDO::PARAM_STR); */

        $query->execute();


       // Prepared statement, stage 1: prepare
        $stmt = $mysqli->prepare($sql);

            $ltitle = $_GET['title'];
            $author = $_GET['author'];
            $edition = $_GET['edition'];
            $photo_url = $_GET['photo_url'];
            $price = $_GET['price'];

            /* close statement and connection */
         $stmt->close();
         $mysqli->close();

         echo "test"

         // Display search result
                  if (!$query->rowCount() == 0) {
         		 		echo "Search found :<br/>";
         				echo "<table style=\"font-family:arial;color:#333333;\">";
                         echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Title Books</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Author</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Price</td></tr>";
                     while ($results = $query->fetch()) {
         				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                         echo $results['title'];
         				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                         echo $results['author'];
         				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                         echo "$".$results['price'];
         				echo "</td></tr>";
                     }
         				echo "</table>";
                 } else {
                     echo 'Nothing found';
                 }
         ?>



?>
