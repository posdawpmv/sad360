<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Alternative').': '.h($alternative->description) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Description') ?></strong></h4>
                    <p class="lead"><?= h($alternative->description) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($alternative->id) ?></p>
                </div>
            </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $alternative->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $alternative->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternative->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Answers') ?></strong></h4>
            <?php if (!empty($alternative->answers)): ?>
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
                        <?php foreach ($alternative->answers as $answers): ?>
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
            <h4><strong><?= __('Related Questions') ?></strong></h4>
            <?php if (!empty($alternative->questions)): ?>
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
                        <?php foreach ($alternative->questions as $questions): ?>
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
