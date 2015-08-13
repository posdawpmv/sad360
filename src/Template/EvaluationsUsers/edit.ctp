
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($evaluationsUser); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Evaluations User']) ?></legend>
    <?php
        echo $this->Form->input('user_id', ['options' => $users]);
                echo $this->Form->input('evaluation_id', ['options' => $evaluations]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>