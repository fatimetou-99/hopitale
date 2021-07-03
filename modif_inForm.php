
<!-- Edit Modal HTML -->
<div id="updateInf<?php echo $array[0]?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="modif_inf.php" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                <div class="form-group">	
                <input type="hidden" name="id_inf" value="<?php echo $array[0]?>"/>				
				   <label>Numero</label>
                        <input type="number" name="num_emp" class="form-control" value="<?php echo $array[1]?>" required="">
					</div>
					<div class="form-group">
						<label>Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $array[2]?>" required="">
					</div>
					<div class="form-group">
						<label>Prenom</label>
                        <input type="text" name="prenom" class="form-control" value="<?php echo $array[3]?>" required="">
					</div>
					<div class="form-group">
						<label>Adresse</label>
                        <input type="text" name="adr" class="form-control" value="<?php echo $array[4]?>" required="">
					</div>	
                    <div class="form-group">
						<label>telephone</label>
                        <input type="number" name="tel" class="form-control" value="<?php echo $array[5]?>" required="">
					</div>	
                    <div class="form-group">
						<label>Rotation</label>
                        <input type="text" name="rotation" class="form-control" value="<?php echo $array[6]?>" required="">
					</div>
					<div class="form-group">
						<label>Salaire</label>
                        <input type="number" name="salaire" class="form-control" value="<?php echo $array[7]?>" required="">
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>