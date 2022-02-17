<style>
    input[type="text"] {
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
                <div class="mb-4"><b>預修改成的內容</b></div>
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
<div>
    <form action="api/upload_intro.php" method="post" enctype="multipart/form-data">
        <div class="h2">新增個人照片</div>
        <br>
        <p>新增個人照片(前台僅限顯示一張)</p>
        <table>
            <tr>
                <td>請選擇欲新增的個人照片：</td>
                <td><input type="file" name="pic"></td>
            </tr>
        </table>
</div>
<br>
<div>
    <input type="hidden" name="table" value="intro">
    <input type="submit" value="新增" class="btn btn-danger">
    <input type="reset" value="重置" class="btn btn-danger">
</div>
</form>

<!-- 新增照片 END -->
<hr>

<!-- 顯示/刪除照片 -->
<div class="h2">顯示/刪除照片</div>
<P>下方可以勾選顯示照片及做刪除動作</P>
<br>
<!-- <div class="container"> -->
    <?php
    $pics = $SelfPic->all(['intro' => '1']);
    foreach ($pics as $pic) {
        // print_r($pic);
    ?>
        <form method="post" action="api/edit_Img_intro.php">
            <div class="row">
                <div class="col-md-6 w-80 text-center">圖片</div>
                <div class="col-md-2 w-80">顯示</div>
                <div class="col-md-2 w-80">刪除</div>
            </div>
            <div class="row">
                <div class="col-md-6 w-80 text-center">
                    <img src="image/<?= $pic['img']; ?>" style="width:100px;height:120px;">
                </div>
                <div class="col-md-2 w-80">
                    <input type="radio" name="sh[]" value="<?= $pic['id']; ?>" <?= ($pic['sh'] == 1) ? 'checked' : ''; ?>>
                </div>
                <div class="col-md-2 w-80">
                    <input type="checkbox" name="del[]" value="<?= $pic['id']; ?>">
                </div>
                <div>
                    <input type="hidden" name="id[]" value="<?= $pic['id']; ?>">
                </div>
            </div>
        <?php
    }
        ?>
<!-- </div> -->
<div class="wkButton">
    <button type="submit" class="btn btn-danger">確認修改</button>
    <button type="reset" class="btn btn-danger">重置</button>
</div>
</form>
<!-- 顯示/刪除照片END -->
<!-- 自我介紹圖片 END-->

<br><br>