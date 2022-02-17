<!-- < ?php include_once "../base.php"; ?> -->
<h1>Experience || 經歷管理</h1>
<br>
<h5>Lorem ipsum dolor sit amet.</h5>

<hr><br>
<div class="d-flex">
    <form action="./api/edit_wk.php" method="post">
        <?php
        $wks = $Work->all();
        foreach ($wks as $wk) {
        ?>
            <div class="h2">經歷<?= $wk['id']; ?>.</div>
            <div class="">
                <div class="mb-4"><b>原先內容</b></div>
                <div class="col-12">
                    <ol>
                        <li><?= $wk['title']; ?></li>
                        <li><?= $wk['text']; ?></li>
                        <li><?= $wk['time']; ?></li>
                        <li>
                            <?php if ($wk['sh'] == 1) {
                                echo "顯示中<i class='fa-solid fa-eye'></i>";
                            } else if ($wk['sh'] == 0) {
                                echo "下架中<i class='fa-solid fa-eye-low-vision'></i>";
                            };
                            ?>
                        </li>
                    </ol>
                </div>
                <div class="mb-4"><b>預修改內容</b></div>
                <div class="col-12" style="width:100%;overflow:hidden;">
                    <textarea type="text" name="wk_title[]" style="min-height:5px;width:30%;word-break:break-all"><?= $wk['title']; ?></textarea>
                    <textarea type="text" name="wk_revise[]" style="min-height:120px;width:100%;word-break:break-all"><?= $wk['text']; ?></textarea>
                    <textarea type="text" name="wk_time[]"><?= $wk['time']; ?></textarea><br>
                    <textarea type="text" name="wk_sh[]"  placeholder="請輸入0或是1"><?= $wk['sh']; ?></textarea>
                    <input type="hidden" name="id[]" value="<?= $wk['id']; ?>">
                </div>
                <br>
            </div>
        <?php
        }
        ?>
</div>
<div class="wkButton">
    <button type="submit" class="btn btn-danger">確定修改</button>
    <button type="reset" class="btn btn-danger">重置</button>
</div>

</form>
<br><br>
<br><br>
<br><br>
<br><br>