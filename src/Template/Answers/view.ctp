<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Answer').': '.h($answer->id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Evaluations User') ?></strong></h4>
                    <p class="lead"><?= $answer->has('evaluations_user') ? $this->Html->link($answer->evaluations_user->id, ['controller' => 'EvaluationsUsers', 'action' => 'view', $answer->evaluations_user->id]) : '' ?></p>
                                                    <h4><strong><?= __('Question') ?></strong></h4>
                    <p class="lead"><?= $answer->has('question') ? $this->Html->link($answer->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?></p>
                                                    <h4><strong><?= __('Alternative') ?></strong></h4>
                    <p class="lead"><?= $answer->has('alternative') ? $this->Html->link($answer->alternative->description, ['controller' => 'Alternatives', 'action' => 'view', $answer->alternative->id]) : '' ?></p>
                                                    <h4><strong><?= __('User') ?></strong></h4>
                    <p class="lead"><?= $answer->has('user') ? $this->Html->link($answer->user->name, ['controller' => 'Users', 'action' => 'view', $answer->user->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($answer->id) ?></p>
                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Answered In') ?></strong></h4>
                <p class="lead"><?= h($answer->answered_in) ?></p>
                </div>
        </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $answer->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

