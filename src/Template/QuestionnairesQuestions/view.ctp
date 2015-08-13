<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Questionnaires Question').': '.h($questionnairesQuestion->questionnaire_id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Questionnaire') ?></strong></h4>
                    <p class="lead"><?= $questionnairesQuestion->has('questionnaire') ? $this->Html->link($questionnairesQuestion->questionnaire->name, ['controller' => 'Questionnaires', 'action' => 'view', $questionnairesQuestion->questionnaire->id]) : '' ?></p>
                                                    <h4><strong><?= __('Question') ?></strong></h4>
                    <p class="lead"><?= $questionnairesQuestion->has('question') ? $this->Html->link($questionnairesQuestion->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $questionnairesQuestion->question->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Question Number') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($questionnairesQuestion->question_number) ?></p>
                </div>
            </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $questionnairesQuestion->questionnaire_id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $questionnairesQuestion->questionnaire_id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnairesQuestion->questionnaire_id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

