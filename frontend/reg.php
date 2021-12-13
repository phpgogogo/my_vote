<h1 class="text-center mt-3 font-weight-bold">會員註冊</h1>

<form action="./api/reg.php" method="post">

        <div class="form-group text-center mt-5">
            <label for="name" class="">用戶名:
                <input class="form-control-md" type="text" name="name" id="name">
            </label>
        </div>
        <div class="form-group text-center">
            <label for="account">帳號:&nbsp;&nbsp;&nbsp;
                <input class="form-control-md" type="text" name="account" id="account">
            </label>
        </div>
        <div class="form-group text-center">
            <label for="password">密碼:&nbsp;&nbsp;&nbsp;
                <input class="form-control-md" type="password" name="password" id="password">
            </label>
        </div>
        <div class="form-group text-center">
            <label for="gender">性別:&nbsp;&nbsp;&nbsp;
                <input class="form-control-md" type="text" name="gender" id="gender">
            </label>
        </div>
        <div class="form-group text-center">
            <label for="email">信箱:&nbsp;&nbsp;&nbsp;
                <input class="form-control-md" type="text" name="email" id="email">
            </label>
        </div>
        <div class="form-group text-center">
            <label for="birthday">生日:&nbsp;&nbsp;&nbsp;
                <input class="form-control-md" style="width:78%;" type="date" name="birthday" id="birthday">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
        </div>
        <div class="form-group text-center">
                <input class="btn btn-success" type="submit" value="送出">
                &nbsp;&nbsp;&nbsp;
                <input class="btn btn-danger" type="reset" value="重新輸入">
        </div>
</form>










