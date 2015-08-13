
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<a href="<?= $this->Url->build(['action' => 'add']) ?>" title="<?= __('New Alternatives Question') ?>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><?= __('Add'); ?></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('question_id'); ?></th>
                                <th><?= $this->Paginator->sort('alternative_id'); ?></th>
                                <th><?= $this->Paginator->sort('alternative_order'); ?></th>
                                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternativesQuestions as $alternativesQuestion): ?>
            <tr>
                                <td>
                                    <?= $alternativesQuestion->has('question') ? $this->Html->link($alternativesQuestion->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $alternativesQuestion->question->id]) : '' ?>
                                </td>
                                                <td>
                                    <?= $alternativesQuestion->has('alternative') ? $this->Html->link($alternativesQuestion->alternative->description, ['controller' => 'Alternatives', 'action' => 'view', $alternativesQuestion->alternative->id]) : '' ?>
                                </td>
                                                <td><?= $this->Number->format($alternativesQuestion->alternative_order) ?></td>
                                            <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $alternativesQuestion->question_id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $alternativesQuestion->question_id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $alternativesQuestion->question_id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternativesQuestion->question_id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?>
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