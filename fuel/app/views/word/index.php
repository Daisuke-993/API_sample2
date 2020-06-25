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
            		<td>
						<?php echo Html::anchor('word/edit/' . $word->id, 'edit'); ?>  
					</td>
					<td>
						<?php echo Html::anchor('word/delete/' . $word->id, 'delete'); ?>  
					</td>
				</tr>
				<?php endforeach; ?>
    		</tbody>
		</table>
        <a href="/word/create">Create</a>
    </body>
</html>