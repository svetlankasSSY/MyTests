        <?php
        header("Content-type: text/html;charset=utf-8");
        ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
    <body>
        <form method="post" action="collect.php">
            <h1>Форма №1</h1>
            <input name="data" placeholder="введите строку" type="text"/>
            <button type="submit">Отправить</button>
        
        </form>
        <form method="get" action="collect.php">
            <h1>Форма №2</h1>
            <input name="data" placeholder="" type="text" />
            <button type="submit">Отправить</button>
        </form>
    </body>
</html>