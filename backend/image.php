<div class="col-md-6 mt-3 mx-auto">
    <form action="../api/upload_img.php" method="post" enctype="multipart/form-data">

        <div class='custom-file mx-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案：</label>
            <input class="custom-file-input" type="file" name="name" id="upload">
        </div>
        <div class="mx-auto text-center mt-2 input-group mb-2">
            <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
            <input class='form-control' type="text" name="intro" id="intro">
        </div>
        <div class="mx-auto mb-2 text-center">
            <input type="submit" value="上傳" class="btn btn-primary">
        </div>
    </form>
</div>

<table class="table">
    <!-- <tr>
        <th>圖片</th>
        <th>說明</th>
        <th>狀態</th>
        <th>管理</th>
    </tr> -->

    <?php
    // $rows=all('ad');
    // foreach($rows as $row){
    // echo "<tr>";
    // echo "<td>";
    // echo "<img src='../image/{$row['name']}' style='width:100px;height:75px'>";
    // echo "</td>";
    // echo "<td>{$row['intro']}</td>";
    // echo "<td>";
    // echo "<a href='../api/img_status.php?id={$row['id']}'>";
    // echo ($row['sh']==1)?"<span class='p-2'><i class='far fa-eye'></i></span>":"<span class='p-2'><i class='far fa-eye-slash'></i></span>";
    // echo "</a>";
    // echo "</td>";
    // echo "<td>";
    // echo "<a class='btn btn-info' href='?do=edit_ad&id={$row['id']}'>修改</a>";
    // echo "<button>重新上傳</button>";
    // echo "<a class='btn btn-danger' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
    // echo "</td>";
    // echo "</tr>";
    // }








    ?>

</table>
<form action="../api/edit_img.php" method="post">
    <table class="table text-center">
        <tr class="">
            <td width="45%">圖片</td>
            <td width="23%">info</td>
            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
            <td></td>
        </tr>
        <?php
        $rows = all('ad');
        foreach ($rows as $row) {
            // 判斷sh是否為1(是否顯示)  是的話$checked="checked"
            $checked = ($row["sh"] == 1) ? "checked" : "";
        ?>
            <tr class="">

                <td width="45%">
                    <img src="../image/<?= $row["name"]; ?>" style="width:300px;height:89px;">
                </td>
                <td width="23%">
                    <div style="margin-top: 30px;">
                        <input type="text" name="intro[]" value="<?= $row["intro"]; ?>">
                    </div>
                </td>
                <td width="7%">
                    <div style="margin-top: 30px;">
                        <input type="radio" name="sh" value="<?= $row["id"]; ?>" <?= $checked; ?>>
                    </div>
                </td>
                <td width="7%">
                    <div style="margin-top: 30px;">
                        <input type="checkbox" name="del[]" value="<?= $row["id"]; ?>">
                    </div>
                </td>
                <td>
                    <input type="hidden" name="id[]" value="<?= $row["id"]; ?>">
                </td>
            <?php
        }
            ?>
            </tr>
    </table>
    <div class="text-center">
        <input class="btn btn-success" type="submit" value="修改">
    </div>
</form>