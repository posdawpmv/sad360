<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Alternatives Question').': '.h($alternativesQuestion->question_id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Question') ?></strong></h4>
                    <p class="lead"><?= $alternativesQuestion->has('question') ? $this->Html->link($alternativesQuestion->question->enunciation, ['controller' => 'Questions', 'action' => 'view', $alternativesQuestion->question->id]) : '' ?></p>
                                                    <h4><strong><?= __('Alternative') ?></strong></h4>
                    <p class="lead"><?= $alternativesQuestion->has('alternative') ? $this->Html->link($alternativesQuestion->alternative->description, ['controller' => 'Alternatives', 'action' => 'view', $alternativesQuestion->alternative->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Alternative Order') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($alternativesQuestion->alternative_order) ?></p>
                </div>
            </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $alternativesQuestion->question_id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $alternativesQuestion->question_id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternativesQuestion->question_id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

