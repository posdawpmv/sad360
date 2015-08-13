<%

use Cake\Utility\Inflector;

$associations += ['BelongsTo' => [], 'HasOne' => [], 'HasMany' => [], 'BelongsToMany' => []];
$immediateAssociations = $associations['BelongsTo'] + $associations['HasOne'];
$associationFields = collection($fields)
        ->map(function($field) use ($immediateAssociations) {
            foreach ($immediateAssociations as $alias => $details) {
                if ($field === $details['foreignKey']) {
                    return [$field => $details];
                }
            }
        })
        ->filter()
        ->reduce(function($fields, $value) {
    return $fields + $value;
}, []);

$groupedFields = collection($fields)
        ->filter(function($field) use ($schema) {
            return $schema->columnType($field) !== 'binary';
        })
        ->groupBy(function($field) use ($schema, $associationFields) {
            $type = $schema->columnType($field);
            if (isset($associationFields[$field])) {
                return 'string';
            }
            if (in_array($type, ['integer', 'float', 'decimal', 'biginteger'])) {
                return 'number';
            }
            if (in_array($type, ['date', 'time', 'datetime', 'timestamp'])) {
                return 'date';
            }
            return in_array($type, ['text', 'boolean']) ? $type : 'string';
        })
        ->toArray();

$groupedFields += ['number' => [], 'string' => [], 'boolean' => [], 'date' => [], 'text' => []];
$pk = "\$$singularVar->{$primaryKey[0]}";
%>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<h2><?= __('<%= $singularHumanName %>').': '.h($<%= $singularVar %>-><%= $displayField %>) ?></h2>
<div class="row">
    <% if ($groupedFields['string']) : %>
    <div class="col-lg-5">
            <% foreach ($groupedFields['string'] as $field) : %>
                <%
                if (isset($associationFields[$field])) :
                    $details = $associationFields[$field];
                    %>
        <h4><strong><?= __('<%= Inflector::humanize($details['property']) %>') ?></strong></h4>
                    <p class="lead"><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></p>
                <% else : %>
        <h4><strong><?= __('<%= Inflector::humanize($field) %>') ?></strong></h4>
                    <p class="lead"><?= h($<%= $singularVar %>-><%= $field %>) ?></p>
                <% endif; %>
            <% endforeach; %>
    </div>
    <% endif; %>
    <% if ($groupedFields['number']) : %>
    <div class="col-lg-2">
            <% foreach ($groupedFields['number'] as $field) : %>
        <h4><strong><?= __('<%= Inflector::humanize($field) %>') ?></strong></h4>
                <p class="lead"><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></p>
            <% endforeach; %>
    </div>
    <% endif; %>
    <% if ($groupedFields['date']) : %>
    <div class="col-lg-2">
            <% foreach ($groupedFields['date'] as $field) : %>
        <h4><strong><%= "<%= __('" . Inflector::humanize($field) . "') %>" %></strong></h4>
                <p class="lead"><?= h($<%= $singularVar %>-><%= $field %>) ?></p>
            <% endforeach; %>
    </div>
    <% endif; %>
    <% if ($groupedFields['boolean']) : %>
    <div class="col-lg-2">
            <% foreach ($groupedFields['boolean'] as $field) : %>
        <h4><strong><?= __('<%= Inflector::humanize($field) %>') ?></strong></h4>
                <p class="lead"><?= $<%= $singularVar %>-><%= $field %> ? __('Yes') : __('No'); ?></p>
            <% endforeach; %>
    </div>
    <% endif; %>
</div>

<% if ($groupedFields['text']) : %>
    <% foreach ($groupedFields['text'] as $field) : %>
<div class="row texts">
            <div class="col-lg-9">
                <h4><strong><?= __('<%= Inflector::humanize($field) %>') ?></strong></h4>
                <?= $this->Text->autoParagraph(h($<%= $singularVar %>-><%= $field %>)); ?>
            </div>
        </div>
    <% endforeach; %>
<% endif; %>

<div class="row view-actions">
    <div class="col-md-12">
        <?= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) ?> 
        <?= $this->Html->link('', ['action' => 'edit', <%= $pk %>], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) ?> 
        <?= $this->Form->postLink('', ['action' => 'delete', <%= $pk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) ?> 
    </div>
</div>

<%
$relations = $associations['HasMany'] + $associations['BelongsToMany'];
foreach ($relations as $alias => $details):
    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
    %>
<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><?= __('Related <%= $otherPluralHumanName %>') ?></strong></h4>
            <?php if (!empty($<%= $singularVar %>-><%= $details['property'] %>)): ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <% foreach ($details['fields'] as $field): %>
                        <th><?= __('<%= Inflector::humanize($field) %>') ?></th>
                            <% endforeach; %>
                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($<%= $singularVar %>-><%= $details['property'] %> as $<%= $otherSingularVar %>): ?>
                        <tr>
                            <% foreach ($details['fields'] as $field): %>
                        <td><?= h($<%= $otherSingularVar %>-><%= $field %>) ?></td>
                            <% endforeach; %>
                            <% $otherPk = "\${$otherSingularVar}->{$details['primaryKey'][0]}"; %>
                        <td class="actions">
                                <?= $this->Html->link('', ['controller' => '<%= $details['controller'] %>', 'action' => 'view', <%= $otherPk %>], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) ?>
                                <!--?= $this->Html->link('', ['controller' => '<%= $details['controller'] %>', 'action' => 'edit', <%= $otherPk %>], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => '<%= $details['controller'] %>', 'action' => 'delete', <%= $otherPk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $otherPk %>), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<% endforeach; %>
