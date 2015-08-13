<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('User').': '.h($user->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h4><strong><?= __('Username') ?></strong></h4>
                    <p class="lead"><?= h($user->username) ?></p>
                                                    <h4><strong><?= __('Password') ?></strong></h4>
                    <p class="lead"><?= h($user->password) ?></p>
                                                    <h4><strong><?= __('Role') ?></strong></h4>
                    <p class="lead"><?= h($user->role) ?></p>
                                                    <h4><strong><?= __('Name') ?></strong></h4>
                    <p class="lead"><?= h($user->name) ?></p>
                                                    <h4><strong><?= __('Cpf') ?></strong></h4>
                    <p class="lead"><?= h($user->cpf) ?></p>
                                                    <h4><strong><?= __('Email') ?></strong></h4>
                    <p class="lead"><?= h($user->email) ?></p>
                                                    <h4><strong><?= __('Department') ?></strong></h4>
                    <p class="lead"><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></p>
                                                    <h4><strong><?= __('Image Path') ?></strong></h4>
                    <p class="lead"><?= h($user->image_path) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h4><strong><?= __('Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($user->id) ?></p>
                    <h4><strong><?= __('User Id') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($user->user_id) ?></p>
                </div>
            </div>


<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', $user->id], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Users') ?></strong></h4>
            <?php if (!empty($user->users)): ?>
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
                        <?php foreach ($user->users as $users): ?>
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
<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related Evaluations') ?></strong></h4>
            <?php if (!empty($user->evaluations)): ?>
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
                        <?php foreach ($user->evaluations as $evaluations): ?>
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
