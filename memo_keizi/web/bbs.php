<?php

// データベースに接続
$link = mysqli_connect();
if(!$link)
{
    die('データベースに接続できません:' . mysql_error());
}

// データベースを選択する
mysql_select_db('app', $link);

$errors = array();

// POSTなら保存処理実行
if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // 名前が正しく入力されているかチェック
        $name = null;
        if(!isset($_POST['name']) || !strlen($_POST['name']))
        {
            $errors['name'] = '名前を入力してください';
        }
        else if(strlen($_POST['name']) > 40)
        {
            $errors['name'] = '名前は40文字以内で入力してください';
        }
        else
        {
            $name = $_POST['name'];
        }

    // 一言が正しく入力されているかチェック
    $comment = null;
    if(!isset($_POST['comment']) || !strlen($_POST['comment']))
    {
        $errors['comment'] = '一言を入力してください';
    }
    else if(strlen($_POST['comment']) > 200)
    {
        $errors['comment'] = '一言は200文字以内で入力してください';
    }
    else
    {
        $comment = $_POST['comment'];
    }
    
    // エラーがなければ保存
    if(count($errors) === 0)
    {
        // 保存するためのSQL文を作成
        $sql = "INSERT INTO `post` (`name`, `comment`, `created_at`)VALUES('"
            . mysql_real_escape_string($name) . "','"
            . mysql_real_escape_string($comment) . "','"
            . date('Y-m-d H:i:s') . "')";
    
        // 保存する
        mysql_query($sql, $link);
    }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1-transitional.dtd">
<html>
    <head>
        <title>一言掲示板</title>
    </head>
    <body>
        <h1>一言掲示板</h1>

        <form action="bbs.php" method="post">
            名前： <input type="text" name="name" /><br />
            一言： <input type="text" name="comment" size="60" /><br />
            <input type="submit" name="submit" value="送信" />
        </form>
    </body>
</html>