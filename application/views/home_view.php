<?php if(isset($_POST['btn'])){ redirect(base_url()); } ?>
<!DOCTYPE html>
<html>
<head>
	<title>COVID19</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom.css') ?>">

</head>
<body>
	

  <div class="container col-md-12">
    <div class="row">
      <div class="input-group">
        <input  id="myInput" class="form-control text-center" type="text" placeholder="Ülkenin İngilizce Adı">  
      </div>
      
    </div>

    <br><br>

    <div class="row ">
<?php foreach($json as $res) { ?> 
<div class="col-md-2 altSinir" id="myTable">
	 <div class="card-deck">
      <div class="card mb-2" style="width: 18rem;">

          <div class="card-body bg-<?php echo ($res->country != "Turkey") ? "dark" : "danger"; ?>">
            <h5 class="card-title text-white text-center"><b><?php echo $res->country; ?></b></h5>
            <p class="card-text"></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Toplam Vaka : <?php echo $res->cases; ?></li>
            <li class="list-group-item">Günlük Vaka : <?php echo $res->todayCases; ?></li>
            <li class="list-group-item">Toplam Ölüm : <?php echo $res->deaths; ?></li>
            <li class="list-group-item">Günlük Ölüm : <?php echo $res->todayDeaths; ?></li>
            <li class="list-group-item">Kurtarılan : <?php echo $res->recovered; ?></li>
            <li class="list-group-item">Durumu Kritik : <?php echo $res->critical; ?></li>
          </ul>

      </div>
    </div>


</div> 

<?php } ?>

</div>
</div>

<form method="post">
<div id="mybutton">
<button type="submit" name="btn" class="feedback">Sayfayı Yenile</button>
</div>
</form>

<script type="text/javascript" src="<?php echo base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>