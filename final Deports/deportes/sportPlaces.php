<?php
include_once('nav.php');
include_once('./models/sport.php');
include_once('./models/place.php');
include_once('./models/joined.php');
include_once('./models/common.php');
$sportid = safeGet('id');
Database::connect('deportes', 'root', '');
$sport = new Sport($sportid)

?>
<style>
  .main{
    background-image: url("0.jpg");
  }
  
</style>
<div class="main">
<div class="container">
<h1 class="mb-5 text-light"><?=$sport->get('name')?></h1>

<div class="card-columns mb-5">
<?php	
        $places = Place::all(safeGet('keywords'));
        $joined = Joined::all(safeGet('keywords'));

        for ($i = 0; $i < count($joined); $i++) {
       //  echo $sportid;
        
				

            
	?>
<?php
    if($joined[$i]->sport_id == $sportid):
      $placeid=$joined[$i] ->place_id;
       // print_r ($places[$i]);
?>
 <div class="card mb-5">
    <div class="card-body">
      <h5 class="card-title"><?=$places[$placeid]->place?></h5>
      <p class="card-text">location : <?=$places[$placeid]->place_location?></p>
      <p class="card-text">price : <?=$places[$placeid]->price?></p>
     
    </div>
  </div>
        <?php endif; } ?>
 
</div>

</div>
</div>




<?php
include_once('footer.php');
?>