<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('Evaluation').': '.h($evaluation->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Name') ?></strong></h4>
                    <p class="lead"><?= h($evaluation->name) ?></p>
                                                    <h4><strong><?= __('Questionnaire') ?></strong></h4>
                    <p class="lead"><?= $evaluation->has('questionnaire') ? $this->Html->link($evaluation->questionnaire->name, ['controller' => 'Questionnaires', 'action' => 'view', $evaluation->questionnaire->id]) : '' ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($evaluation->id) ?></p>
                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Start') ?></strong></h4>
                <p class="lead"><?= h($evaluation->start) ?></p>
                    <h4><strong><?= __('End') ?></strong></h4>
                <p class="lead"><?= h($evaluation->end) ?></p>
                </div>
        </div>

    <div class="row texts">
            <div class="col-lg-9">
                <h4><strong><?= __('Details') ?></strong></h4>
                <?= $this->Text->autoParagraph(h($evaluation->details)); ?>
            </div>
        </div>
    
<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $evaluation->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $evaluation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Users') ?></strong></h4>
            <?php if (!empty($evaluation->users)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                                    <th><?= __('Id') ?></th>
                                                    <th><?= __('Username') ?></th>
                                                    <th><?= __('Password') ?></th>
                                                    <th><?= __('Role') ?></th>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Cpf') ?></th>
                                                    <th><?= __('Email') ?></th>
                                                    <th><?= __('Department Id') ?></th>
                                                    <th><?= __('Image Path') ?></th>
                                                    <th><?= __('User Id') ?></th>
                                                    <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($evaluation->users as $users): ?>
                        <tr>
                                                    <td><?= h($users->id) ?></td>
                                                    <td><?= h($users->username) ?></td>
                                                    <td><?= h($users->password) ?></td>
                                                    <td><?= h($users->role) ?></td>
                                                    <td><?= h($users->name) ?></td>
                                                    <td><?= h($users->cpf) ?></td>
                                                    <td><?= h($users->email) ?></td>
                                                    <td><?= h($users->department_id) ?></td>
                                                    <td><?= h($users->image_path) ?></td>
                                                    <td><?= h($users->user_id) ?></td>
                                                                                <td class="actions">
                                <?= $this->Html->link('', ['controller' => 'Users', 'action' => 'view', $users->id], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => 'Users', 'action' => 'edit', $users->id], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
