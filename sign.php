
    <div>
        <?php
            // if ($_SERVER['request_method']=='get') {
                if (!isset($_GET['submit'])) {
                    echo "Nothing to show here";
                } else {
                    require ('includes/dbh.inc.php');
                    $kitchenName = $_REQUEST['kitchens'];
                    $sql = "SELECT * FROM $kitchenName ORDER BY food_name ASC;";
                    $result = $conn->query($sql);
                    if (!$result) {
                        echo "no restaurant like ". $kitchenName;
                    } else {
                        if (!($result->num_rows > 0)) {
                            echo "no food menu yet bruh!!";
                            // header("Location: ?");
                        } else {
                            while ($row = $result->fetch_assoc()){
                                echo "<p name='' value=''> <span>".$row['food_name']." (".$row['food_price'].")</span></p>";
                                // header("Location: ?");
                            }
                        }
                    }
                }
            // }
        ?>
    </div>