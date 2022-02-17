<h1>Other || 其他</h1>
<br>
<h5>Lorem ipsum dolor sit amet.</h5>


<hr><br>

<!-- 頁尾版權資料 -->
<div class="d-flex">
    <form action="./api/bottom.php" method="post">

        <div class="h2">頁尾版權資料:</div>
        <div>
            <div class="mb-4"><b>原先內容</b><i class="fa-solid fa-circle-arrow-down"></i></div>
            <div class="col-12">
                
                <pre><?= $Bottom->find(1)['bottom']; ?></pre>
              
            </div>
            <br>
            <div class="mb-4"><b>預修改內容</b></div>
            <div class="col-12" style="width:100%;overflow:hidden;">
            <input type="text" name="bottom" value="<?= $Bottom->find(1)['bottom']; ?>">
            </div>
            <br>
        </div>
</div>


<div class="wkButton">
    <button type="submit" class="btn btn-danger">確定修改</button>
    <button type="reset" class="btn btn-danger">重置</button>
</div>

</form>
<!-- 頁尾版權資料 END-->
<br><br>
<br><hr>

<!-- 頁尾版權資料 -->

<!-- 頁尾版權資料 END-->


