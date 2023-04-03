<?php
require_once 'include/header.php';
?>

  <h1 class="text-center">Registration for IT Conference </h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date of birth</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">specialty</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <label for="date">Select a date:</label>
		<input type="date" id="date" name="date">
		
	</form>
	<?php
		if(isset($_POST['submit'])){
			
			$date = $_POST['date'];
		}
	?>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Data base Admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  Software Developer
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
 Web developer
  </label>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Contact Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  <button type="submit" class="btn btn-primary btn-block" >Submit</button>
  
</form>

