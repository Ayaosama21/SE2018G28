<?php
include_once('database.php');

class Sport extends Database{
    function __construct($id) {
    $sql = "SELECT * FROM `sport_info` WHERE id = $id;";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $data = $statement->fetch(PDO::FETCH_ASSOC);
    if(empty($data)){return;}
    foreach ($data as $key => $value) {
        $this->{$key} = $value;
    }
}
public static function all($keyword) {
    $keyword = str_replace(" ", "%", $keyword);
    $sql = "SELECT * FROM `sport_info` WHERE name like ('%$keyword%');";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $sports= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $sports[] = new Sport($row['id']);
    }
    return $sports;
}
}

?>