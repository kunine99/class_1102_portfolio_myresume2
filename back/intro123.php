<style>
    input {
        width: 100%;
        padding: 12px 24px;

        background-color: transparent;
        transition: transform 250ms ease-in-out;
        font-size: 14px;
        line-height: 18px;
        color: #575756;
        background-color: transparent;
        background-repeat: no-repeat;
        background-size: 18px 18px;
        background-position: 95% center;
        /* border-radius: 50px; 圓框*/
        border: 1px solid #575756;
        transition: all 250ms ease-in-out;
        backface-visibility: hidden;
        transform-style: preserve-3d;
    }
</style>

<h1>About || 關於我管理</h1>
<br>
<h5>Lorem ipsum dolor sit amet.</h5>
<hr><br>

<!-- 自我介紹文字 -->
<div class="d-flex">
    <?php
    $basic = $BasicIntro->all();
    foreach ($basic as $b) {
    ?>
        <form action="./api/edit_intro.php" method="post">

            <div class="h2">自我介紹文字內容管理:</div>
            <div>
                <div class="mb-4"><b>原先內容</b><i class="fa-solid fa-circle-arrow-down"></i></div>
                <div class="col-12">

                    <pre><?= $b['name']; ?></pre>
                    <pre><?= $b['addr']; ?></pre>
                    <pre><?= $b['email']; ?></pre>
                    <pre><?= $b['graduate']; ?></pre>
                    <pre><?= $b['position']; ?></pre>
                    <pre><?= $b['other']; ?></pre>
                </div>
                <br>
                <div class="mb-4"><b>預修改內容</b></div>
                <div class="col-12" style="width:100%;overflow:hidden;">
                    <input type="text" name="name" value="<?= $b['name']; ?>"><br>
                    <input type="text" name="addr" value="<?= $b['addr']; ?>"><br>
                    <input type="text" name="email" value="<?= $b['email']; ?>"><br>
                    <input type="text" name="graduate" value="<?= $b['graduate']; ?>"><br>
                    <input type="text" name="position" value="<?= $b['position']; ?>"><br>
                    <input type="text" name="other" value="<?= $b['other']; ?>"><br>
                    <input type="hidden" name="id[]" value="<?= $b['id']; ?>">
                </div>

            </div>

</div>
<br>

<div class="wkButton">
    <button type="submit" class="btn btn-danger">確定修改</button>
    <button type="reset" class="btn btn-danger">重置</button>
</div>
<?php
    }
?>
</form>
<!-- 自我介紹文字 END-->

<br><br>
<hr>
<!-- 自我介紹圖片 -->

<!-- 新增照片 -->
<div class="d-flex">
    <form action="api/upload_intro.php" method="post" enctype="multipart/form-data">
    <div class="h2">新增照片</div>
        <br>
        <p>新增個人照片(前台僅限顯示一張)</p>
        <P>下方可以勾選顯示照片及做刪除動作</P>


        <table>
            <tr>
                <td>動畫圖片：</td>
                <td><input type="file" name="pic"></td>
            </tr>
        </table>
        <div class="wkButton">
            <input type="hidden" name="table" value="intro">
            <input type="submit" value="新增" class="btn btn-danger">
            <input type="reset" value="重置" class="btn btn-danger">
        </div>
    </form>

    <!-- <h4 class="col-10 text-center">個人照片</h4> -->
    <!-- <div class="show col-2">
        <span>show</span> |
        <span>del</span>
    </div> -->
</div>
<!-- 新增照片 END -->
<hr>
<div class="d-flex">
    <?php
    $pics = $SelfPic->all(['intro' => '1']);
    foreach ($pics as $pic) {
        // print_r($pic);
    ?>

        <br>
        <form action="api/edit_Img_intro.php" method="post">
            <div>

                <div>
                    <img src="image/<?= $pic['img']; ?>" style="width:100px;height:120px;">
                </div><br>

                <div">
                    <input type="radio" name="sh[]" value="<?= $pic['id']; ?>" <?= ($pic['sh'] == 1) ? 'checked' : ''; ?>>
            </div><br>

            <div>
                <input type="checkbox" name="del[]" value="<?= $pic['id']; ?>">
            </div><br>
</div>
<br>
<input type="hidden" name="id[]" value="<?= $pic['id']; ?>">

<?php
    }
?>

<button type="submit" class="btn btn-danger">確認修改</button><br>
<button type="reset" class="btn btn-danger">重置</button><br>
</form>
<!-- 自我介紹圖片 END-->
</div>
<br><br>