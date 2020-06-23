<html>
    <meta charset="UTF-8">
    <body>
		<table>
    		<thead>
        		<tr>
					<td>Word</td>
            		<td>Option</td>
        		</tr>
    		</thead>
    		<tbody>
				<?php foreach($words as $word) : ?>
        		<tr>
            		<td><?php echo $word->content; ?></td>
            		<td></td>
				</tr>
				<?php endforeach; ?>
    		</tbody>
		</table>
        <a href="/word/form">Create</a>
    </body>
</html>