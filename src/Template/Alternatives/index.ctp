
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<a href="<?= $this->Url->build(['action' => 'add']) ?>" title="<?= __('New Alternative') ?>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><?= __('Add'); ?></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('id'); ?></th>
                                <th><?= $this->Paginator->sort('description'); ?></th>
                                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatives as $alternative): ?>
            <tr>
                                <td><?= $this->Number->format($alternative->id) ?></td>
                                            <td><?= h($alternative->description) ?></td>
                                            <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $alternative->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $alternative->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $alternative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternative->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?>
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