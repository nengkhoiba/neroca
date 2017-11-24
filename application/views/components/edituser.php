							<form>
							
								  <div class="form-group row">
									<label class="col-sm-4 form-control-label">Email<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									  <input id="Editemail" type="text" required class="form-control" placeholder="Email" value="<?php echo $email;?>" >
									</div>
								  </div>
								    <div class="form-group row">
									<label class="col-sm-4 form-control-label">Role<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									 <select id='Editrole' class="form-control">
									  	<option value="ADMIN">ADMIN</option>
									 	 <option value="MANAGER">MANAGER</option>
									  </select>
									  </div>
								  </div>
								    <div class="form-group row">
									<label class="col-sm-4 form-control-label">Status<a style="color: red;">*</a></label>
									<div class="col-sm-8">
									<select id='Editstatus' class="form-control">
									  	<option value="ACTIVE">ACTIVE</option>
									 	 <option value="INACTIVE">INACTIVE</option>
									  </select>
									  </div>
								  </div>
								</form>