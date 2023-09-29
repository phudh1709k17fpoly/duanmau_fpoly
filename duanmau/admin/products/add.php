
 <style>
   .container {
     max-width: 800px;
     margin: 0 auto;
   }

   .container div {
     margin-top: 20px;
   }
 </style>
 <section class="container">
  <div style="text-align: center; ">Wellcome add products</div>
   <form action="index.php?asp=addprd" method="post" enctype="multipart/form-data">
     <div class="row mb-4">
       <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example1">Name Products</label>
           <input type="text" name="name" id="form6Example2" class="form-control" />
           <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['name'])){
	   echo $Error_message['name'];
	} ?></small>
         </div>
       </div>
       <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example1">Img Products</label>
           <input type="file" name="img" id="form6Example2" class="form-control" />
           <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['check_file'])){
	   echo $Error_message['check_file'];
	} ?></small>
   <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['check_img'])){
	   echo $Error_message['check_img'];
	} ?></small>
         </div>
       </div>
     </div>
     <div class="row mb-4">
       <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example2">Price Products</label>
           <input type="number" name="price" id="form6Example2" class="form-control" />
           <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['price'])){
	   echo $Error_message['price'];
	} ?></small>
         </div>
       </div>
       <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example2">Quantity Products</label>
           <input type="number" name="quantity" id="form6Example2" class="form-control" />
           <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['quantity'])){
	   echo $Error_message['quantity'];
	} ?></small>
         </div>
       </div>
     </div>
     <div class="row mb-4">
       <div class="col">
         <div class="form-outline">
           <label class="form-label" for="form6Example2">Type Products</label>
           <select class="form-select" aria-label="Default select example" name="id_cate">
             <option selected></option>
             <?php foreach ($cate as $catenews) : ?>
               <option value="<?= $catenews['id'] ?>"><?= $catenews['type'] ?></option>
             <?php endforeach ?>
           </select>
           <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['id_cate'])){
	   echo $Error_message['id_cate'];
	} ?></small>
         </div>
       </div>
       <div class="col">
         <div class="form-outline">
           <input type="hidden" id="form6Example2" class="form-control" />
         </div>
       </div>
     </div>
     <div class="col">
       <div class="form-outline">
         <label class="form-label" for="form6Example2">Detai Products</label>
         <br>
         <textarea name="detail" cols="100" rows="5"></textarea>
         <small id="emailHelp" style="color:red;font-size:18px;"><?php if(!empty($Error_message['detail'])){
	   echo $Error_message['detail'];
	} ?></small>
       </div>
     </div>
     <div class="text-left"><button type="submit" class="btn btn-success">Success</button></div>
   </form>
   <div style="padding-top: 20px;"><button class="btn btn-outline-info"><a href="index.php?asp=products" class="text-decoration-none" style="color: black;">Quay Lại</a></button></div>
 </section>