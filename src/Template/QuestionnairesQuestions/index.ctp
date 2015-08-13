
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<a href="<?= $this->Url->build(['action' => 'add']) ?>" title="<?= __('New Questionnaires Question') ?>" class="btn btn-primary btn-add">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <strong><?= __('Add'); ?></strong>
</a>
<div class="table-responsive">
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th><?= $this->Paginator->sort('questionnaire_id'); ?></th>
                                <th><?= $this->Paginator->sort('question_id'); ?></th>
                                <th><?= $this->Paginator->sort('question_number'); ?></th>
                                <th class="actions"><?= __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionnairesQuestions as $questionnairesQuestion): ?>
            <tr>
                                <td>
                                    <?= $questionnairesQuestion->has('questionnaire') ? $this->Html->link($questionnairesQuestion->questionnaire->name, ['controller' => 'Questionnaires', 'action' => 'view', $questionnairesQuestion->questionnaire->id]) : '' ?>
                                </td>
                                                <td>
                                    <?= $questionnairesQuestion->has('question') ? $this->Html->link($questionnairesQuestion->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $questionnairesQuestion->question->id]) : '' ?>
                                </td>
                                                <td><?= $this->Number->format($questionnairesQuestion->question_number) ?></td>
                                            <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $questionnairesQuestion->questionnaire_id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $questionnairesQuestion->questionnaire_id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $questionnairesQuestion->questionnaire_id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnairesQuestion->questionnaire_id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?>
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