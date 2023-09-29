<style>
    .profile {
        margin: 0 auto;
        display: flex;
        width: 60%;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
        padding: 50px 0 20px 0;
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
<h1 class="text-center mb-3 py-3 bg-primary-subtle mt-5">THÔNG TIN KHÁCH HÀNG</h1>
<div class="profile mb-5">

    <div class="profile__left">
        <!-- <img src="../../content/images/l.jpg" alt="avatar"> -->
        <a href="index.php?ctl=profile&id=<?= $user['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg></a>
        <div><b>Người Dùng</b></div>
        <a href="edit#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
            </svg>
        </a>

    </div>
    <div class="profile__right">
        <div class="profile__right--header">
            <h3>Đổi mật khẩu</h3>
        </div>
        <div class="profile__right--content mb-5">
            <form action="index.php?ctl=update_password&id=<?= $list['id'] ?>" method="post">
                <label for="">Mật khẩu cũ</label><br>
                <input class="form-control px-2 py-2" name="pass_old" style="padding: 3px; margin-top: 10px;" type="password"><br>
                <label for="">Mật khẩu mới</label><br>
                <input class="form-control px-2 py-2" name="pass_new" style="padding: 3px;  margin-top: 10px;" type="password"><br>
                <label for="">Nhập lại Mật khẩu mới</label><br>
                <input class="form-control px-2 py-2" name="pass_requai" style="padding: 3px;  margin-top: 10px;" type="password"><br>
                <h4 style="color: red;"><?php if (!empty($err['404'])) {
                                            echo $err['404'];
                                        } ?></h4>
                <button class="form-control w-50 mx-auto text-white bg-danger" style="margin-top: 10px;" type="submit">Đổi mật khẩu</button>
            </form>
        </div>

    </div>
</div>