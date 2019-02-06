<?php
include_once('database.php');

class Place extends Database{
    function __construct($id) {
    $sql = "SELECT * FROM `places` WHERE id = $id;";
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
    $sql = "SELECT * FROM `places` WHERE place like ('%$keyword%');";
    $statement = Database::$db->prepare($sql);
    $statement->execute();
    $places= [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $places[] = new Place($row['id']);
    }
    return $places;
}
}

?>