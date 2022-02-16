<!-- < ?php include_once "../base.php"; ?> -->
<h1>Experience || 經歷管理</h1>
<br>
<h5>Lorem ipsum dolor sit amet.</h5>

<hr><br>


<div class="d-flex">
    <form action="../api/edit_wk.php" method="post">
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
                    </ol>
                </div>
                <div class="mb-4"><b>預修改內容</b></div>
                <div class="col-12" style="width:100%;overflow:hidden;">
                    <textarea type="text" name="wk_title[]" style="min-height:10px;width:100%;word-break:break-all">
                        <?= $wk['title']; ?>
                        </textarea>
                    <textarea type="text" name="wk_revise[]" style="min-height:120px;width:100%;word-break:break-all">
                        <?= $wk['text']; ?>
                        </textarea>
                    <textarea type="text" name="wk_time[]" style="min-height:10px;width:100%;word-break:break-all">
                        <?= $wk['time']; ?>
                        </textarea>

                </div>
                <br>
            </div>
        <?php
        }
        ?>
</div>
<br><br>


<div class="wkButton">
    <button type="submit" class="btn btn-danger">確定修改</button>
    <button type="reset" class="btn btn-danger">重置</button>
</div>

</form>
