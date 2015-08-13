
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($alternative); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Alternative']) ?></legend>
    <?php
        echo $this->Form->input('description');
                echo $this->Form->input('questions._ids', ['options' => $questions]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>