<?php
include_once('nav.php');
include_once('./models/sport.php');
include_once('./models/common.php');
$search= safeGet('keywords');
Database::connect('deportes', 'root', '');
?>
<style>
  .main{
    background-image: url("0.jpg");
  }
</style>
<div class="main">
<div class="container" >

<div class="card-columns mb-5">
<?php	
				$sports = Sport::all(safeGet('keywords'));
				
				foreach ($sports as $sport) {
      
            
			?>
  <div class="card mb-3 mt-3  overflow-hidden">
    <img class="card-img-top sports-img text-nowrap"
    style="height: 200px; width:auto;"
     src="<?=$sport->img?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><button class="button btn btn-info get_places" id="<?=$sport->id?>"><?=$sport->name?></button></h5>
      <button class="btn btn-info" data-toggle="collapse" data-target="#demo<?=$sport->id?>">read info</button>
      <p class="card-text collapse" id="demo<?=$sport->id?>"><?=$sport->info?></p>
     
    </div>
  </div>
  <?php } ?>
 
</div>

</div>
</div>





<?php
include_once('footer.php');
?>

<script>
 // $('.collapse').collapse()
$(document).ready(function() {
  $('.get_places').click(function(event) {
    window.location.href = "sportPlaces.php?id="+$(this).attr('id');
  });
  
});
</script>