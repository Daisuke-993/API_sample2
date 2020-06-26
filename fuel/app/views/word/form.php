

<?php echo Form::open(array('method' => 'post')); ?>
<fieldset>
    <?php echo Form::label('Word','word'); ?>
    <?php echo Form::input('content', isset($content) ? $content : ''); ?> 
    <?php echo Form::submit('submit', 'Save'); ?>
</fieldset>
<?php echo Form::close(); ?>