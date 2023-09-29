
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
<form action="index.php?act=editcate&id=<?=$cate['id']?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$cate['id']?>">
  <div class="form-group">
	<label for="exampleInputPassword1">Name Categories</label>
	<input type="text" name="name"  class="form-control" value="<?=$cate['name']?>">
	<small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['name'])){
	   echo $Error_message['name'];
	} ?></small>
  </div>
  <div class="form-group">
	<label for="exampleInputPassword1">type Categories</label>
	<input type="text" name="type"  class="form-control" value="<?=$cate['type']?>">
	<small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['type'])){
	   echo $Error_message['type'];
	} ?></small>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-top: 50px;">Submit</button>
</form>
</section>
