<?php

use Cake\Utility\Inflector;

$fields = collection($fields)
        ->filter(function($field) use ($schema) {
    return $schema->columnType($field) !== 'binary';
});
?>

<CakePHPBakeOpenTagphp
$this->extend('../Layout/TwitterBootstrap/dashboard');
CakePHPBakeCloseTag>

<CakePHPBakeOpenTag= $this->Form->create($<?= $singularVar ?>); CakePHPBakeCloseTag>
<fieldset>
    <legend><CakePHPBakeOpenTag= __('<?= Inflector::humanize($action) ?> {0}', ['<?= $singularHumanName ?>']) CakePHPBakeCloseTag></legend>
    <CakePHPBakeOpenTagphp
    <?php
    foreach ($fields as $field) {
        if (in_array($field, $primaryKey)) {
            continue;
        }
        if (isset($keyFields[$field])) {
            ?>
    echo $this->Form->input('<?= $field ?>', ['options' => $<?= $keyFields[$field] ?>]);
            <?php
            continue;
        }
        if (!in_array($field, ['created', 'modified', 'updated'])) {
            ?>
    echo $this->Form->input('<?= $field ?>');
            <?php
        }
    }
    if (!empty($associations['BelongsToMany'])) {
        foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
            ?>
    echo $this->Form->input('<?= $assocData['property'] ?>._ids', ['options' => $<?= $assocData['variable'] ?>]);
            <?php
        }
    }
    ?>
    CakePHPBakeCloseTag>
</fieldset>
<CakePHPBakeOpenTag= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) CakePHPBakeCloseTag>
<CakePHPBakeOpenTag= $this->Form->end() CakePHPBakeCloseTag>