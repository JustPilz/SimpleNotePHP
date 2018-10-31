<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title></title>
</head>
<style>
    body {
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .form {
        width: 600px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    #msg {
        width: 100%;
        height: 100px;
        resize: none;
    }
    button {
        width: 100px;
        height: 35px;
        margin-top: 4px;
    }
    hr {
        width: 100%;
    }
    .list {
        width: 600px;
    }
    .list ul {
        list-style-type: none;
        padding: 0;
    }
    .list ul li {
        margin: 10px 0;
        padding: 10px;
        background-color: #FAFAFA;
    }
</style>
<body>
    <form class="form">
        <textarea id="msg"></textarea>
        <button>Оправить</button>
    </form>
    <hr>
    <div class="list">
        <ul>
            <?php
            $file = file_get_contents('note.txt');
            echo '<li>' . $file . '</li>'
            ?>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
        </ul>
    </div>
</body>
</html>
