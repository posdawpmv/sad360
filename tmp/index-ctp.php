<?php

use Cake\Utility\Inflector;

$fields = collection($fields)
        ->filter(function($field) use ($schema) {
            return !in_array($schema->columnType($field), ['binary', 'text']);
        })
        ->take(7);
?>

<CakePHPBakeOpenTagphp
$this->extend('../Layout/TwitterBootstrap/dashboard');
CakePHPBakeCloseTag>

<a href="<CakePHPBakeOpenTag= $this->Url->build(['action' => 'add']) CakePHPBakeCloseTag>" title="<CakePHPBakeOpenTag= __('New <?= $singularHumanName ?>') CakePHPBakeCloseTag>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><CakePHPBakeOpenTag= __('Add'); CakePHPBakeCloseTag></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <?php foreach ($fields as $field): ?>
                <th><CakePHPBakeOpenTag= $this->Paginator->sort('<?= $field ?>'); CakePHPBakeCloseTag></th>
                <?php endforeach; ?>
                <th class="actions"><CakePHPBakeOpenTag= __('Actions'); CakePHPBakeCloseTag></th>
            </tr>
        </thead>
        <tbody>
            <CakePHPBakeOpenTagphp foreach ($<?= $pluralVar ?> as $<?= $singularVar ?>): CakePHPBakeCloseTag>
            <tr>
                <?php
                foreach ($fields as $field) {
                    $isKey = false;
                    if (!empty($associations['BelongsTo'])) {
                        foreach ($associations['BelongsTo'] as $alias => $details) {
                            if ($field === $details['foreignKey']) {
                                $isKey = true;
                                ?>
                <td>
                                    <CakePHPBakeOpenTag= $<?= $singularVar ?>->has('<?= $details['property'] ?>') ? $this->Html->link($<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['displayField'] ?>, ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', $<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['primaryKey'][0] ?>]) : '' CakePHPBakeCloseTag>
                                </td>
                                <?php
                                break;
                            }
                        }
                    }
                    if ($isKey !== true) {
                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                            ?>
                <td><CakePHPBakeOpenTag= h($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></td>
                            <?php
                        } else {
                            ?>
                <td><CakePHPBakeOpenTag= $this->Number->format($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></td>
                            <?php
                        }
                    }
                }

                $pk = '$' . $singularVar . '->' . $primaryKey[0];
                ?>
                <td class="actions">
                    <CakePHPBakeOpenTag= $this->Html->link('', ['action' => 'view', <?= $pk ?>], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) CakePHPBakeCloseTag>
                    <CakePHPBakeOpenTag= $this->Html->link('', ['action' => 'edit', <?= $pk ?>], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) CakePHPBakeCloseTag>
                    <CakePHPBakeOpenTag= $this->Form->postLink('', ['action' => 'delete', <?= $pk ?>], ['confirm' => __('Are you sure you want to delete # {0}?', <?= $pk ?>), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) CakePHPBakeCloseTag>
                </td>
            </tr>

            <CakePHPBakeOpenTagphp endforeach; CakePHPBakeCloseTag>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <CakePHPBakeOpenTag= $this->Paginator->prev('< ' . __('previous')) CakePHPBakeCloseTag>
        <CakePHPBakeOpenTag= $this->Paginator->numbers(['before' => '', 'after' => '']) CakePHPBakeCloseTag>
        <CakePHPBakeOpenTag= $this->Paginator->next(__('next') . ' >') CakePHPBakeCloseTag>
    </ul>
    <p><CakePHPBakeOpenTag= $this->Paginator->counter() CakePHPBakeCloseTag></p>
</div>