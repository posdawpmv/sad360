<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Questionnaire').': '.h($questionnaire->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Name') ?></strong></h4>
                    <p class="lead"><?= h($questionnaire->name) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($questionnaire->id) ?></p>
                </div>
            </div>

    <div class="row texts">
            <div class="col-lg-9">
                <h4><strong><?= __('Details') ?></strong></h4>
                <?= $this->Text->autoParagraph(h($questionnaire->details)); ?>
            </div>
        </div>
    
<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $questionnaire->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Evaluations') ?></strong></h4>
            <?php if (!empty($questionnaire->evaluations)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Details') ?></th>
                                                    <th><?= __('Questionnaire Id') ?></th>
                                                    <th><?= __('Start') ?></th>
                                                    <th><?= __('End') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($questionnaire->evaluations as $evaluations): ?>
                        <tr>
                                                    <td><?= h($evaluations->id) ?></td>
                                                    <td><?= h($evaluations->name) ?></td>
                                                    <td><?= h($evaluations->details) ?></td>
                                                    <td><?= h($evaluations->questionnaire_id) ?></td>
                                                    <td><?= h($evaluations->start) ?></td>
                                                    <td><?= h($evaluations->end) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Evaluations', 'action' => 'view', $evaluations->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Evaluations', 'action' => 'edit', $evaluations->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Evaluations', 'action' => 'delete', $evaluations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluations->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Questions') ?></strong></h4>
            <?php if (!empty($questionnaire->questions)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Enunciation') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($questionnaire->questions as $questions): ?>
                        <tr>
                                                    <td><?= h($questions->id) ?></td>
                                                    <td><?= h($questions->enunciation) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Questions', 'action' => 'view', $questions->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Questions', 'action' => 'edit', $questions->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
