<?php
include_once('nav.php');
include_once('./models/sport.php');
include_once('./models/place.php');
include_once('./models/common.php');
$sportid = safeGet('id');
Database::connect('sports', 'root', '');
$sport = new Sport($sportid)
?>
<div class="container">
<h1 class="mb-5"><?=$sport->get('name')?></h1>

<div class="card-columns mb-5">
<?php	
        $places = Place::all(safeGet('keywords'));
        for ($i = 0; $i < count($places); $i++) {
       //  echo $sportid;
        
				

            
	?>
<?php
    if($places[$i]->sport_id == $sportid):
       // print_r ($places[$i]);
?>
 <div class="card mb-5">
    <div class="card-body">
      <h5 class="card-title"><?=$places[$i]->place?></h5>
      <p class="card-text">location : <?=$places[$i]->place_location?></p>
      <p class="card-text">price : <?=$places[$i]->price?></p>
     
    </div>
  </div>
        <?php endif; } ?>
 
</div>

</div>




<?php
include_once('footer.php');
?>