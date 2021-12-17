<!-- <h1>登入頁面</h1> -->
<h2 class="text-center my-3 font-weight-bold">會員登入</h2>

<form action="./api/check_login.php" method="post">
            <table id="loginForm" class="table w-auto m-auto">
                <tr>
                    <td>帳號:</td>
                    <td><input type="text" name="account" id=""></td>
                </tr>
                <tr>
                    <td>密碼:</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" value="登入">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </table>
        </form>