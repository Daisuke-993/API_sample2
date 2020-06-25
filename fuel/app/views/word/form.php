<html>
    <meta charset="UTF-8">
    <body>
        <form method="POST" action=<?php echo $content == null ? "/word/create" : "/word/edit/" . $id; ?>>
            <label>word：</label>
            <input type="text" name="content" <?php echo $content !== null ? 'value=' . $content : "" ; ?>>
            <input type="submit" value="送信">
            <a href="/word">back</a>
        </form>  
    </body>
</html>