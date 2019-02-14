<?php
include_once('database.php');

class Joined extends Database{
    function __construct($id) {
    $sql = "SELECT * FROM `sport-place` WHERE id = $id;";
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
    $sql = "SELECT * FROM `sport-place` WHERE id like ('%$keyword%');";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $joined= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $joined[] = new Joined($row['id']);
    }
    return $joined;
}


}

?>