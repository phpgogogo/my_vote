<h1 class="text-center mt-3 font-weight-bold">會員註冊</h1>




<form action="./api/reg.php" method="post" class="was-validated">

        <div class="form-group text-center mt-3 row col-12 col-md-4 mx-auto">
            <label for="name">用戶名:</label>
            <input class="form-control" type="text" name="name" id="name" required>
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center row col-12 col-md-4 mx-auto">
            <label for="account">帳號:&nbsp;&nbsp;&nbsp;</label>
            <input class="form-control" type="text" name="account" id="account" required>
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center row col-12 col-md-4 mx-auto">
            <label for="password">密碼:&nbsp;&nbsp;&nbsp;</label>
            <input class="form-control" type="password" name="password" id="password" required>
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center row col-12 col-md-4 mx-auto">
            <label for="gender">性別:&nbsp;&nbsp;&nbsp;</label>
            <input class="form-control" type="text" name="gender" id="gender" required>
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center row col-12 col-md-4 mx-auto">
            <label for="email">信箱:&nbsp;&nbsp;&nbsp;</label>
            <input class="form-control" type="text" name="email" id="email" required>
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center row col-12 col-md-4 mx-auto">
            <label for="birthday">生日:&nbsp;&nbsp;&nbsp;</label>
            <input class="form-control"  type="date" name="birthday" id="birthday" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="valid-feedback"></div>
            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
        </div>
        <div class="form-group text-center">
                <input class="btn btn-success" type="submit" value="送出">
                &nbsp;&nbsp;&nbsp;
                <input class="btn btn-danger" type="reset" value="重新輸入">
        </div>
</form>










