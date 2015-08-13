
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($alternativesQuestion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Alternatives Question']) ?></legend>
    <?php
        echo $this->Form->input('alternative_order');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>