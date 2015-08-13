
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($department); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Department']) ?></legend>
    <?php
        echo $this->Form->input('name');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>