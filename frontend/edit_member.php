<h1 class="text-center mt-3">會員中心</h1>

<?php
// 非會員導回首頁
if (!isset($_SESSION["user"])) {
    to("../index.php");
    exit();
}
$account = all("users", ["account" => $_SESSION["user"]]);
// dd($account);
foreach ($account as $key => $value) {
    // dd($value);
}

?>


<div class="row mt-3">
<table class="table col-md-3 d-inline-block table-hover">
        <tr class="thead-light">
            <th class="text-center">功能</th>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=member_data">帳號資料</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=edit_member">修改會員基本資料</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=member_vote">查詢投票紀錄</a>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
    <div class="col-md-6">
        <form action="./api/edit_member.php" method="post" class="was-validated">

            <div class="form-group text-center mt-3 row col-12 col-md-6 mx-auto">
                <label for="name">用戶名:</label>
                <input class="form-control" type="text" name="name" id="name" required value="<?= $value['name']; ?>">
                <div class="valid-feedback"></div>
                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>

            <div class="form-group text-center row col-12 col-md-6 mx-auto">
                <label for="gender">性別:&nbsp;&nbsp;&nbsp;</label>
                <input class="form-control" type="text" name="gender" id="gender" required value="<?= $value['gender']; ?>">
                <div class="valid-feedback"></div>
                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <div class="form-group text-center row col-12 col-md-6 mx-auto">
                <label for="email">信箱:&nbsp;&nbsp;&nbsp;</label>
                <input class="form-control" type="text" name="email" id="email" required value="<?= $value['email']; ?>">
                <div class="valid-feedback"></div>
                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <div class="form-group text-center row col-12 col-md-6 mx-auto">
                <label for="birthday">生日: 西元xxxx/xx/xx</label>
                <input class="form-control" type="text" name="birthday" id="birthday" required value="<?= $value['birthday']; ?>">
                <div class="valid-feedback"></div>
                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
            </div>
            <div class="form-group text-center">
                <input class="btn btn-success" type="submit" value="送出">
                &nbsp;&nbsp;&nbsp;
                <input class="btn btn-danger" type="reset" value="重新輸入">
            </div>
        </form>


    </div>

</div>