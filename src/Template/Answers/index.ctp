
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<a href="<?= $this->Url->build(['action' => 'add']) ?>" title="<?= __('New Answer') ?>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><?= __('Add'); ?></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id'); ?></th>
                                <th><?= $this->Paginator->sort('evaluation_user_id'); ?></th>
                                <th><?= $this->Paginator->sort('question_id'); ?></th>
                                <th><?= $this->Paginator->sort('alternative_id'); ?></th>
                                <th><?= $this->Paginator->sort('users_id'); ?></th>
                                <th><?= $this->Paginator->sort('answered_in'); ?></th>
                                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($answers as $answer): ?>
            <tr>
                                <td><?= $this->Number->format($answer->id) ?></td>
                                            <td>
                                    <?= $answer->has('evaluations_user') ? $this->Html->link($answer->evaluations_user->id, ['controller' => 'EvaluationsUsers', 'action' => 'view', $answer->evaluations_user->id]) : '' ?>
                                </td>
                                                <td>
                                    <?= $answer->has('question') ? $this->Html->link($answer->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?>
                                </td>
                                                <td>
                                    <?= $answer->has('alternative') ? $this->Html->link($answer->alternative->description, ['controller' => 'Alternatives', 'action' => 'view', $answer->alternative->id]) : '' ?>
                                </td>
                                                <td>
                                    <?= $answer->has('user') ? $this->Html->link($answer->user->name, ['controller' => 'Users', 'action' => 'view', $answer->user->id]) : '' ?>
                                </td>
                                                <td><?= h($answer->answered_in) ?></td>
                                            <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $answer->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $answer->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?>
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