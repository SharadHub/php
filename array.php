<DOCTYPE! HTML>
    <HTML>
        <head>
            <title>Array</title>
        </head>
        <body>
        <?php
            //indexed array
            $sport = ["football", "wrestling", "boxing"];
            ?>

            <h4>Accessing data from indexed array</h4>
            <?php
            echo "<table border=1>";
            foreach($sport as $sports){
                echo "<tr>";
                echo "<td>$sports</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </body>
    </HTML>
