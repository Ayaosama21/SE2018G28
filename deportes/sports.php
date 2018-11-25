<?php
include_once('nav.php');
include_once('./models/sport.php');
include_once('./models/common.php');
Database::connect('sports', 'root', '');
?>
<div class="container">

<div class="card-columns mb-5">
<?php	
				$sports = Sport::all(safeGet('keywords'));
				
				foreach ($sports as $sport) {
            
			?>
  <div class="card mb-5">
    <img class="card-img-top sports-img"
    style="height: 200px; width:auto;"
     src="<?=$sport->img?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?=$sport->name?></h5>
      <p class="card-text"><?=$sport->info?></p>
     
    </div>
  </div>
  <?php } ?>
 
</div>

</div>





<?php
include_once('footer.php');
?>