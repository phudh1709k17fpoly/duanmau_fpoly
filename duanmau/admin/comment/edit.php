<style>
    .btn{
    border: 1px solid lightgray;
}
</style>
<form onsubmit="return mySubmit()" class="mt-4" action="index.php?ctl=update_cmt" method="post">
    <div class="row">
        <div class="col">
            <label for="">Tài khoản</label>
            <input type="text" name="username" class="form-control" readonly placeholder="Username" value="<?= $cmt['username'] ?>">
            
        </div>

        <div class="col">
            <label for="">Sản phẩm</label>
            <input type="text" name="name_pro" class="form-control" readonly placeholder="Tên sản phẩm" value="<?= $cmt['name'] ?? '' ?>">
            
        </div>

    </div>
    <div class="row my-3">
        <div class="col">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" placeholder="Content" id="content" cols="123" rows="6"><?=$cmt['content'] ?? ''?></textarea>
            <span style="color:#F54748; font-size: 13px"></span>
        </div>
    </div>
    <div class="row my-3">
        

    </div>
    <input type="hidden" name="id_cmt" value="<?=$cmt['id'] ?? ''?>">
    <input class="btn bg-primary-subtle" type="submit" value="Cập nhật">
    <input class="btn bg-primary-subtle" type="reset" value="Nhập lại">
</form>

<script>
    function mySubmit(){
        let content = document.getElementById('content');
        let span = document.querySelector('span');

        if(content.value.length == 0){
            span.innerText = 'Mời bạn nhập nội dung.';
            content.focus();
            return false;
        }
        return true;
    }
</script>