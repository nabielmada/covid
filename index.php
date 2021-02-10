<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Covid-19</title>
    <!-- Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- CSS Native -->
    <link href="css/global.css" rel = "stylesheet">
    <!-- DataTables CDN CSS-->
    <link href = "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel = "stylesheet">
    <!-- Font Awesome CDN CSS-->
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel = "stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
	font-family: 'Poppins', sans-serif;
}
</style>
</head>
<body>
<?php include 'api.php'; ?>

<nav class="navbar p-4 mt-3">
  <div class="container">
        <h4>Pendataan Covid-19</h4>
        <p class = "pt-2 text-muted">Coronavirus Indonesia Live Data</p>
  </div>
</nav>


<div class="container pt-5 pb-5 mt-4">
    <div class = " text-center">
        <h4><span class="blink_me">LIVE UPDATE</span></h4>
		<?php 
		date_default_timezone_set('Asia/Jakarta');
		$now = date('d F y H:i:s');
		?>
        <p class = "text-muted"><?php echo $now ?> WIB</p>
    </div>

    <div class = "row p-5 pb-4">


    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger1 img-card shadow">
									<div class="card-body">
										<div class="row p-2">
                                            <div class="col-md-8">
											<div class="text-white">
												<p class="mb-2">TOTAL POSITIF</p>
												<h2 class="mb-2 fs-4"><?php echo $indonesia[0]['positif']; ?></h2>
												<p class="mb-0">ORANG</p>
                                            </div>
                                            </div>
                                            
											<div class="col-md-4 pt-3"> 
                                                <img src="img/sad.png" class = "img-fluid" alt="Positif"> 
                                            </div> 
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-teal1 img-card shadow">
									<div class="card-body">
                                    <div class="row p-2">
                                            <div class="col-md-8">
											<div class="text-white">
												<p class="mb-2">TOTAL SEMBUH</p>
												<h2 class="mb-2 fs-4"><?php echo $indonesia[0]['sembuh']; ?></h2>
												<p class="mb-0">ORANG</p>
											</div>
											</div>
											<div class="col-md-4 pt-3"> 
                                                <img src="img/happy.png" class = "img-fluid" alt="Positif"> 
                                            </div> 
										</div>
									</div>
								</div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-indigo1 img-card shadow">
									<div class="card-body">
                                    <div class="row p-2">
                                            <div class="col-md-8">
											<div class="text-white">
												<p class="mb-2">TOTAL RAWAT</p>
												<h2 class="mb-2 fs-4"><?php echo $indonesia[0]['dirawat']; ?></h2>
												<p class="mb-0">ORANG</p>
											</div>
											</div>
											<div class="col-md-4 pt-3"> 
                                                <img src="img/indonesia.png" class = "img-fluid" alt="Positif"> 
                                            </div>  
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-purple1 img-card shadow">
									<div class="card-body">
                                    <div class="row p-2">
                                            <div class="col-md-8">
											<div class="text-white">
												<p class="mb-2">MENINGGAL</p>
												<h2 class="mb-2 fs-4"><?php echo $indonesia[0]['meninggal']; ?></h2>
												<p class="mb-0">ORANG</p>
											</div>
											</div>
											<div class="col-md-4 pt-3"> 
                                                <img src="img/cry.png" class = "img-fluid" alt="Positif"> 
                                            </div> 
										</div>
									</div>
								</div>
							</div>
        </div>
    
    </div>
    
    <div class="pt-4">
        <div class="container p-5">
            <div class = "card p-5 shadow">
                <div class="card-body">
				
            <h5>Data Kasus Coronavirus Indonesia </h5>
			<div class = "float-end text-muted" align = "right">Sumber Data Real-Time ( Kawal Corona RI )</div>
            <p>Berdasarkan Provinsi</p>
			

            <br/>

            <table id = "provinsi" class = "table table-hover" style = "width:100%;">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PROVINSI</th>
                        <th>POSITIF</th>
                        <th>SEMBUH</th>
                        <th>MENINGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                        foreach ($provinsi as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $no++."."; ?></td>
                        <td><?php echo $provinsi[$key]['attributes']['Provinsi']; ?></td>
                        <td><?php echo number_format($provinsi[$key]['attributes']['Kasus_Posi']); ?></td>
                        <td><?php echo number_format($provinsi[$key]['attributes']['Kasus_Semb']); ?></td>
                        <td><?php echo number_format($provinsi[$key]['attributes']['Kasus_Meni']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

                </div>
            </div>
			
        </div>
    </div>
	
	
    <footer class = "text-center p-5">
    <p>Made with <i class = "fa fa-heart" style = "color:red;"></i>  2021 &copy; Nabiel Mada </p>
    </footer>

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- DataTables CDN JS -->
    <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src = "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#provinsi').DataTable({
		"scrollX":true,
		"scrollY":500,
		"bPaginate": false,
		"lengthMenu":[[-1], ["All"]]
		}
		);
    } );
    </script>
</body>
</html>