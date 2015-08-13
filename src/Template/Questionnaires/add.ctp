
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($questionnaire); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Questionnaire']) ?></legend>
    <?php
        echo $this->Form->input('name');
                echo $this->Form->input('details');
                echo $this->Form->input('questions._ids', ['options' => $questions]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>