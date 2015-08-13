
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($question); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Question']) ?></legend>
    <?php
        echo $this->Form->input('enunciation');
                echo $this->Form->input('alternatives._ids', ['options' => $alternatives]);
                echo $this->Form->input('questionnaires._ids', ['options' => $questionnaires]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>