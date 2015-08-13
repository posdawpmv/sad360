<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Evaluations User').': '.h($evaluationsUser->id) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('User') ?></strong></h4>
                    <p class="lead"><?= $evaluationsUser->has('user') ? $this->Html->link($evaluationsUser->user->name, ['controller' => 'Users', 'action' => 'view', $evaluationsUser->user->id]) : '' ?></p>
                                                    <h4><strong><?= __('Evaluation') ?></strong></h4>
                    <p class="lead"><?= $evaluationsUser->has('evaluation') ? $this->Html->link($evaluationsUser->evaluation->name, ['controller' => 'Evaluations', 'action' => 'view', $evaluationsUser->evaluation->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($evaluationsUser->id) ?></p>
                </div>
            </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $evaluationsUser->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $evaluationsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluationsUser->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

