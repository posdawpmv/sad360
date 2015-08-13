<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Question').': '.h($question->enunciation) ?></h2>
<div class="row">
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($question->id) ?></p>
                </div>
            </div>

    <div class="row texts">
            <div class="col-lg-9">
                <h4><strong><?= __('Enunciation') ?></strong></h4>
                <?= $this->Text->autoParagraph(h($question->enunciation)); ?>
            </div>
        </div>
    
<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $question->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Answers') ?></strong></h4>
            <?php if (!empty($question->answers)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Evaluation User Id') ?></th>
                                                    <th><?= __('Question Id') ?></th>
                                                    <th><?= __('Alternative Id') ?></th>
                                                    <th><?= __('Users Id') ?></th>
                                                    <th><?= __('Answered In') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($question->answers as $answers): ?>
                        <tr>
                                                    <td><?= h($answers->id) ?></td>
                                                    <td><?= h($answers->evaluation_user_id) ?></td>
                                                    <td><?= h($answers->question_id) ?></td>
                                                    <td><?= h($answers->alternative_id) ?></td>
                                                    <td><?= h($answers->users_id) ?></td>
                                                    <td><?= h($answers->answered_in) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Answers', 'action' => 'view', $answers->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Answers', 'action' => 'edit', $answers->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
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
            <h4><strong><?= __('Related Alternatives') ?></strong></h4>
            <?php if (!empty($question->alternatives)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Description') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($question->alternatives as $alternatives): ?>
                        <tr>
                                                    <td><?= h($alternatives->id) ?></td>
                                                    <td><?= h($alternatives->description) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Alternatives', 'action' => 'view', $alternatives->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Alternatives', 'action' => 'edit', $alternatives->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Alternatives', 'action' => 'delete', $alternatives->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternatives->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
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
            <h4><strong><?= __('Related Questionnaires') ?></strong></h4>
            <?php if (!empty($question->questionnaires)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Details') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($question->questionnaires as $questionnaires): ?>
                        <tr>
                                                    <td><?= h($questionnaires->id) ?></td>
                                                    <td><?= h($questionnaires->name) ?></td>
                                                    <td><?= h($questionnaires->details) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Questionnaires', 'action' => 'view', $questionnaires->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Questionnaires', 'action' => 'edit', $questionnaires->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Questionnaires', 'action' => 'delete', $questionnaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaires->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
