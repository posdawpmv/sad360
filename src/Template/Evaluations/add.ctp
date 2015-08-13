
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($evaluation); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Evaluation']) ?></legend>
    <?php
        echo $this->Form->input('name');
                echo $this->Form->input('details');
                echo $this->Form->input('questionnaire_id', ['options' => $questionnaires]);
                echo $this->Form->input('start');
                echo $this->Form->input('end');
                echo $this->Form->input('users._ids', ['options' => $users]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>