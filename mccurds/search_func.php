<?php

include_once 'myconnect.php';

function close(){
    mysqli.close()();
}


function author_query(){}

function city_query(){

    $myData = mysqli("SELECT city FROM venues");
    while($record = mysql_fetch_array($myData)){
        echo '<option value="' . $record['city'] . '">' . $record['city'] . '</option>';
    }};

function reason_query(){

    $myData2 = mysql_query("SELECT reason FROM venues");
    while($record2 = mysql_fetch_array($myData2)){
        echo '<option value="' . $record3['reason'] . '">' . $record2['reason'] . '</option>';
    }};

function budget_query(){

    $myData3 = mysql_query("SELECT budget FROM venues");
    while($record3 = mysql_fetch_array($myData3)){
        echo '<option value="' . $record3['budget'] . '">' . $record3['budget'] . '</option>';
    }};


function search_venues() {

    $city = $_POST['city'];
    $reason = $_POST['reason'];
    $budget = $_POST['budget'];

    //Do real escaping here

    $query = "SELECT * FROM venues";
    $conditions = array();

    if($city !="") {
        $conditions[] = "city='$city'";
    }
    if($reason !="") {
        $conditions[] = "reason='$reason'";
    }
    if($budget !="") {
        $conditions[] = "budget='$budget'";
    }

    $sql = $query;
    if (count($conditions) > 0) {
        $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $result = mysql_query($sql);

    return $result;
}
?>