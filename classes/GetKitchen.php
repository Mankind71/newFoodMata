<?php


class GetKitchen{
    public $kitchenName;
    // public $inserted;

    function __construct($kitchenName){
        $this->kitchenName = $kitchenName;
        // $this->inserted = $kitchenName;
    }


    public function showFoods(){
        require './includes/dbh.inc.php';
        $sql = "SELECT * FROM $this->kitchenName ORDER BY food_name ASC;";
        $result = $conn->query($sql);
        if (!$result->num_rows > 0) {
            echo "<option name='' value=''> <span> no food ()</span></option>";
        } elseif ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                echo "<option name='' value=''> <span>".$row['food_name']."</span></option>";
            }
        }
    }

    public function getKitchenFood($foodname){
        $sql = "SELECT `id`, `food_name`, `food_price` FROM $this->kitchenName WHERE food_name=$foodname";
    }

    public function showChosenFoods($chosenFood){
        require './includes/dbh.inc.php';
        $sql = "INSERT INTO chosenfood 
        (`id`, `kitchenname`, `food`, `price`) 
        VALUES ([value-1],[value-2],[value-3],[value-4]);";
        $result = $conn->query($sql);
        if (!$result->num_rows > 0) {
            echo "<option name='' value=''> <span> no food ()</span></option>";
        } elseif ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                echo "<option name='' value=''> <span>".$row['food_name']."</span></option>";
            }
        }
    }
}
?>