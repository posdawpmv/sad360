
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($answer); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Answer']) ?></legend>
    <?php
        echo $this->Form->input('evaluation_user_id', ['options' => $evaluationsUsers]);
                echo $this->Form->input('question_id', ['options' => $questions]);
                echo $this->Form->input('alternative_id', ['options' => $alternatives]);
                echo $this->Form->input('users_id', ['options' => $users]);
                echo $this->Form->input('answered_in');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>