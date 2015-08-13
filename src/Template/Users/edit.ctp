
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User']) ?></legend>
    <?php
        echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('role');
                echo $this->Form->input('name');
                echo $this->Form->input('cpf');
                echo $this->Form->input('email');
                echo $this->Form->input('department_id', ['options' => $departments]);
                echo $this->Form->input('image_path');
                echo $this->Form->input('user_id');
                echo $this->Form->input('evaluations._ids', ['options' => $evaluations]);
                ?>
</fieldset>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>