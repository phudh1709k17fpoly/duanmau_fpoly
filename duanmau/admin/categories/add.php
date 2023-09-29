
<style>
		.container{
			max-width: 800px;
			margin:  0 auto;
		}
		.container div{
		   margin-top:30px;
		}
</style>
<section class="container">
<form action="index.php?act=addcate" method="post" enctype="multipart/form-data">
 <div class="row mb-4">
 <div class="col">
	<label for="exampleInputPassword1">Name Categories</label>
	<input type="text" name="name"  class="form-control">
	<small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['name'])){
	   echo $Error_message['name'];
	} ?></small>
  </div>
  <div class="col">
	<label for="exampleInputPassword1">type Categories</label>
	<input type="text" name="type"  class="form-control">
	<small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['type'])){
	   echo $Error_message['type'];
	} ?></small>
  </div>
 </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 50px;">Submit</button>
</form>
</section>