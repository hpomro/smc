<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Submittion Form</title>
    </head>
    <body>
        <h1>提出フォーム</h1>
        <form method="post" action="">
            <div>
                <label>ユーザ名/Name</label>
                <p><?php echo &_POST['name']; ?></p>
            </div>
            <div>
                <label>問題番号/Index</label>
                <p>
                    <?php if($_POST['index'] === "1"){
                        echo 'Q1';
                    }else if($_POST['index'] === "2"){
                        echo 'Q2';
                    }else if($_POST['index'] === "3"){
                        echo 'Q3';
                    }else if($_POST['index'] === "4"){
                        echo 'Q4';
                    }else if($_POST['index'] === "5"){
                        echo 'Q5';
                    }else if($_POST['index'] === "6"){
                        echo 'Q6';
                    }
                    ?>
                </p>
            </div>
            <div>
                <label>解答/Answer</label>
                <p><?php echo &_POST['answer']; ?></p>
            </div>
        </form>
    </body>
</html>