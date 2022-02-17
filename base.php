<?php


class DB
{
    // 本地
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=resume";
    protected $pdo = "";

    //220
    // protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100411";
    // protected $pdo;

    public $table;
    public $title;
    public $button;
    public $header;
    public $append;
    public $upload;



    public function __construct($table)
    {
        $this->table = $table;
        // 本地
        $this->pdo = new PDO($this->dsn, "root", "");
        
        //220
        // $this->pdo = new PDO($this->dsn, 's1100411', 's1100411');
        $this->setStr($table);


    }

    private function setStr($table){
        switch($table){
            case "title";
                $this->title="網站標題管理";
                $this->button="新增網站標題圖片";
                $this->header="網站標題";
                $this->append="替代文字";
                $this->upload="網站標題圖片";
            break;
            case "ad";
            $this->title="動態文字廣告管理";
            $this->button="新增動態文字廣告";
            $this->header="動態文字廣告";
            break;
            case "mvim";
            $this->title="動畫圖片管理";
            $this->button="新增動畫圖片";
            $this->header="動畫圖片";
            $this->upload="動畫圖片";
            break;
            case "image";
            $this->title="校園映像資料管理";
            $this->button="新增校園映像圖片";
            $this->header="校園映像資料圖片";
            $this->upload="校園映像圖片";
            break;
            case "total";
            $this->title="進站總人數管理";
            $this->button="";
            $this->header="進站總人數:";
            break;
            case "bottom";
            $this->title="頁尾版權資料管理";
            $this->button="";
            $this->header="頁尾版權資料";
            break;
            case "wk";
            $this->title="最新消息資料管理";
            $this->button="新增最新消息資料";
            $this->header="最新消息資料內容";
            break;
            case "admin";
            $this->title="管理者帳號管理";
            $this->button="新增管理者帳號";
            $this->header="帳號";
            $this->append="密碼";
            break;
            case "menu";
            $this->title="選單管理";
            $this->button="新增主選單";
            $this->header="主選單名稱";
            $this->append="選單連結網址";
            break;
        }
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = "`$key`='$value'";
            }

            $sql .= implode(" AND ", $tmp);
        } else {
            $sql .= " `id`='$id'";
        }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    public function del($arr)
    {
        $sql = "delete from $this->table ";
        if (is_array($arr)) {
            foreach ($arr as $k => $v) {
                $tmp[] = sprintf("`%s`='%s'", $k, $v);
            }
            $sql .= " where " . implode(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arr'";
        }
        // return:影響的行數
        return $this->pdo->exec($sql);
    }

    public function all(...$arr)
    {
        $sql = "select * from $this->table ";
        if (isset($arr[0])) {
            if (is_array($arr[0])) {
                foreach ($arr[0] as $k => $v) {
                    $tmp[] = sprintf("`%s`='%s'", $k, $v);
                }
                $sql .= " where " . implode(" && ", $tmp);
            } else {
                $sql .= $arr[0];
            }
        }

        if (isset($arr[1])) {
            $sql .= $arr[1];
        }
        // print_r($sql);
        return $this->pdo->query($sql)->fetchAll();
    }

    public function all2(...$arg){
        $sql="SELECT * FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function math($method,$col,...$arg){
        $sql="SELECT $method($col) FROM $this->table ";

        switch(count($arg)){
            case 2:
                foreach($arg[0] as $key => $value){
                    $tmp[]="`$key`='$value'";
                }

                $sql .=" WHERE ".implode(" AND ",$tmp)." ".$arg[1];

            break;
            case 1:
                if(is_array($arg[0])){
                    foreach($arg[0] as $key => $value){
                        $tmp[]="`$key`='$value'";
                    }
                    $sql .= " WHERE ".implode(" AND ",$tmp);
                }else{
                    $sql .= $arg[0];
                    
                }
            break;
        }


        return $this->pdo->query($sql)->fetchColumn();
    }


   function count(...$arg)
    {
        $sql = "select count(*) from $this->table";
        // if(!empty($arr[0]) && is_array($arr[0])){
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $k => $v) {
                    $tmp[] = sprintf("`%s`='%s'", $k, $v);
                }
                $sql .= " where " . implode(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        
        // echo $sql;
        return $this->pdo->query($sql)->fetchcolumn();
    }

    public function save($arr)
    {
        if (isset($arr['id'])) {
            //update
            foreach ($arr as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }

            $sql = "update $this->table set " . implode(',', $tmp) . " where `id`='{$arr['id']}'";
        } else {
            //insert

            $sql = "insert into $this->table (`" . implode("`,`", array_keys($arr)) . "`) values('" . implode("','", $arr) . "')";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }


    public function q($sql)
    {
        // echo $sql;
        return $this->pdo->query($sql)->fetch();
    }

    public function qall($sql)
    {
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll();
    }
}

function to($url)
{
    header("location:" . $url);
}


// $Login=new DB("resume_login");
$BasicIntro = new DB("resume_basic_intro");
// $SelfIntro=new DB("resume_self_intro");
$SelfPic=new DB("resume_image");
$Work = new DB("resume_work_experience");
// $Por=new DB("resume_porfolio");

// $Skt=new DB("resume_sk_text");

$Total = new DB('total');
$Bottom = new DB('resume_bottom');
$TitlePic = new DB('rresume_titlepucture');
$Ad = new DB('ad');
$Mvim = new DB('mvim');
$Image = new DB('image');
$News = new DB('news');
$Admin = new DB('admin');
$Menu = new DB('menu');
 

?>