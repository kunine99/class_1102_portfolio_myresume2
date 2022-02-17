<h1>Portfolio || 作品集管理</h1>
<br>
<h5>Lorem ipsum dolor sit amet.</h5>


<hr><br>
<pre>
此區域可修改隱藏及顯示作品
點擊鉛筆圖樣 可修改單筆作品資料
</pre>
<hr><br>

<div class="por_title d-flex">
    <div class="col-1">編輯</div>
    <div class="col-3">作品名稱</div>
    <div class="col-3">連結</div>
    <div class="col-3">使用技能</div>
    <div class="col-2 d-flex flex-nowrap justify-content-around">
        <div>show</div>|
        <div>del</div>
    </div>
</div>


<form action="api/edit_Por.php" method="post" enctype="multipart/form-data">
<?php
$pors=$Por->all();
// print_r($pors);
echo '<hr>';


foreach($pors as $k => $por){

?>


<div class="por_content d-flex">
    <div class="col-1">
    <i class="fa fa-pencil" aria-hidden="true" onclick="op('#porReviseBlock<?=$por['id'];?>','backend/porReviseBlock.php')">
    </i>
    </div>

    <div class="col-3">
        <div class="mb-3"><?=$por['name'];?></div>
        </div>
    <div class="col-3" >
        <u><?=$por['href'];?></u>
    </div>
    <div class="col-3" id="sk">
        <?=($por['php'])?'<div>php</div>':'';?>
        <?=($por['mysql'])?'<div>mySQL</div>':'';?>
        <?=($por['js'])?'<div>javaScript</div>':'';?>
        <?=($por['jquery'])?'<div>jQuery</div>':'';?>
        <?=($por['css'])?'<div>css</div>':'';?>
        <?=($por['bootstrap'])?'<div>bootstrap</div>':'';?>
        <?=($por['ps'])?'<div>photoshop</div>':'';?>
        <?=($por['ai'])?'<div>illustrator</div>':'';?>
    </div>

    <div class="showdel col-2 d-flex flex-nowrap justify-content-around">
        <input type="checkbox" name="sh[]" value="<?=$por['id'];?>" <?=($por['sh']=='1')?'checked':'';?>>
        <input type="checkbox" name="del[]" value="<?=$por['id'];?>">
        <input type="hidden" name="id[]" value="<?=$por['id'];?>">
    </div>
</div>

<hr>
<?php
}
?>
<br>
<button type="submit" class="btn btn-danger">確認修改</button>
<button type="reset" class="btn btn-danger" onclick="reset()">重置</button>
</form>

<br><br>




