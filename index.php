<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Submittion Form</title>
    </head>
    <body>
        <h1>提出フォーム</h1>
        <form action="form.php" method="post" style="text-align: center;">
            <div>
                <label for="name">ユーザ名/Name</label><br>
                <input type="text" id="name" name="name" maxlength="16" autocomplete="off" value="<?php if (!empty($_POST['name'])){
                    echo $_POST['name'];
                }
                ?>">
            </div>
            <br>
            <select name="index">
                <option value="">Please choose</option>
                <option value="Q1">Q1</option>
                <option value="Q2">Q2</option>
                <option value="Q3">Q3</option>
                <option value="Q4">Q4</option>
                <option value="Q5">Q5</option>
                <option value="Q6">Q6</option>
            </select>
            <br><br>
            <div>
                <label for="answer">解答/Answer</label><br>
                <input type="text" id="answer" name="answer">
            </div>
            <br>
            <input type="submit" value="提出/Send">
        </form>
    </body>
</html>