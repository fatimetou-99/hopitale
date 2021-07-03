<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php require "navbar.php"; ?>

	<div class="container-xl">
	<div class="table-responsive">
	<div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php include 'msg.php';  ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        </div>
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2> <b>Docteurs</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addDoc" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter Nouveau Docteur</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Numero</th>
						<th>nom</th>
						<th>prenom</th>
						<th>adresse</th>
            <th>telephone</th>
            <th>specialite</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
                <?php

                    include 'mydbCon.php';

                    $query="SELECT * from docteur limit 200"; // Fetch all the data from the table customers

                    $result=mysqli_query($dbCon,$query);

                    ?>

                    <?php if ($result->num_rows > 0): ?>

                    <?php while($array=mysqli_fetch_row($result)): ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td><?php echo $array[1];?></td>
                        <td><?php echo $array[2];?></td>
                        <td><?php echo $array[3];?></td>
                        <td><?php echo $array[4];?></td>
                        <td><?php echo $array[5];?></td>
                        <td><?php echo $array[6];?></td>
						<td>
							<a data-target="#modifDoc<?php echo $array[0]?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a data-target="#deleteDoc<?php echo $array[0]?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
                     <?php 
                      include 'modif_docForm.php';
                      include 'del_docForm.php';

                      endwhile; ?>

                    <?php else: ?>
                    <tr>
                    <td colspan="3" rowspan="1" headers="">No Data Found</td>
                    </tr>
                    <?php endif; ?>

                    <?php mysqli_free_result($result); ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addDoc" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="insert_doc.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Numero</label>
                        <input type="number" name="num_emp" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Nom</label>
                        <input type="text" name="nom" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Adresse</label>
                        <input type="text" name="adr" class="form-control" required="">
					</div>	
                    <div class="form-group">
						<label>telephone</label>
                        <input type="number" name="tel" class="form-control" required="">
					</div>	
                    <div class="form-group">
						<label>Specialite</label>
                        <input type="text" name="spc" class="form-control" required="">
					</div>			
          <input type="hidden" name="id_admin" class="form-control" value="<?php echo $_SESSION['id_admin'];?>" required="">
		
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

	</body>
</html>


