
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<a href="<?= $this->Url->build(['action' => 'add']) ?>" title="<?= __('New Evaluation') ?>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><?= __('Add'); ?></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id'); ?></th>
                                <th><?= $this->Paginator->sort('name'); ?></th>
                                <th><?= $this->Paginator->sort('questionnaire_id'); ?></th>
                                <th><?= $this->Paginator->sort('start'); ?></th>
                                <th><?= $this->Paginator->sort('end'); ?></th>
                                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
            <tr>
                                <td><?= $this->Number->format($evaluation->id) ?></td>
                                            <td><?= h($evaluation->name) ?></td>
                                            <td>
                                    <?= $evaluation->has('questionnaire') ? $this->Html->link($evaluation->questionnaire->name, ['controller' => 'Questionnaires', 'action' => 'view', $evaluation->questionnaire->id]) : '' ?>
                                </td>
                                                <td><?= h($evaluation->start) ?></td>
                                            <td><?= h($evaluation->end) ?></td>
                                            <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $evaluation->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $evaluation->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>