
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($questionnairesQuestion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Questionnaires Question']) ?></legend>
    <?php
        echo $this->Form->input('question_number');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>