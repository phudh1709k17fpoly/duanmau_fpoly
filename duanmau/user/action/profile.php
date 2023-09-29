
<style>
    .profile {
        margin: 0 auto;
        display: flex;
        width: 60%;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
        padding: 100px 0 50px 0;
        border-radius: 10px;
    }
    .profile__left {
        display: block;
        text-align: center;
        border-right: 1px solid lightgray;
        width: 30%;
    }
    .profile__left svg {
        width: 50%;
        border-radius: 50%;
        margin-bottom: 30px;
    }
    .profile__left div {
        margin-bottom: 10px;
    }
    .profile__left a {
        color: balck;
    }
    .profile__right {
        padding: 10px 20px;
        display: block;
        width: 60%;
    }
    .profile__right div {
        margin: 10px 0 15px 0;
    }
    .profile__right--header {
        border-bottom: rgba(0, 0, 0, 0.25) solid 1px;
    }
</style>
<h1 class="text-center mb-3 py-5 bg-primary-subtle mt-5">THÔNG TIN KHÁCH HÀNG</h1>
<div class="profile">

    <div class="profile__left">
        <!-- <img src="../../content/images/l.jpg" alt="avatar"> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg>
        <?php 
        if($list['role'] == 0){
            $role['vaitro'] = 'Người dùng';
        }
       
         ?>
        <div><b><?= $role['vaitro']?></b></div>
        <a href="edit#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
            </svg>
        </a>

    </div>
    <div class="profile__right">
        <div class="profile__right--header">
            <h3>Information</h3>
        </div>

        <div class="profile__right--content">
            <div><b>Username: </b><span><?=$list['username'];  ?></span></div>
            <div><b>Email:</b><span><?=$list['email'] ?></span></div>
            <div><a href="index.php?ctl=update_password&id=<?=$list['id']?>">Thay đổi mật khẩu</a></div>
            <div><a href="index.php?ctl=logout">Đăng xuất</a></div>
        </div>

    </div>
</div>