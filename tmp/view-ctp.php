<?php

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
?>
<CakePHPBakeOpenTagphp
$this->extend('../Layout/TwitterBootstrap/dashboard');
CakePHPBakeCloseTag>

<h2><CakePHPBakeOpenTag= __('<?= $singularHumanName ?>').': '.h($<?= $singularVar ?>-><?= $displayField ?>) CakePHPBakeCloseTag></h2>
<div class="row">
    <?php if ($groupedFields['string']) : ?>
    <div class="col-lg-5">
            <?php foreach ($groupedFields['string'] as $field) : ?>
                <?php
                if (isset($associationFields[$field])) :
                    $details = $associationFields[$field];
                    ?>
        <h4><strong><CakePHPBakeOpenTag= __('<?= Inflector::humanize($details['property']) ?>') CakePHPBakeCloseTag></strong></h4>
                    <p class="lead"><CakePHPBakeOpenTag= $<?= $singularVar ?>->has('<?= $details['property'] ?>') ? $this->Html->link($<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['displayField'] ?>, ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', $<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['primaryKey'][0] ?>]) : '' CakePHPBakeCloseTag></p>
                <?php else : ?>
        <h4><strong><CakePHPBakeOpenTag= __('<?= Inflector::humanize($field) ?>') CakePHPBakeCloseTag></strong></h4>
                    <p class="lead"><CakePHPBakeOpenTag= h($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></p>
                <?php endif; ?>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($groupedFields['number']) : ?>
    <div class="col-lg-2">
            <?php foreach ($groupedFields['number'] as $field) : ?>
        <h4><strong><CakePHPBakeOpenTag= __('<?= Inflector::humanize($field) ?>') CakePHPBakeCloseTag></strong></h4>
                <p class="lead"><CakePHPBakeOpenTag= $this->Number->format($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></p>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($groupedFields['date']) : ?>
    <div class="col-lg-2">
            <?php foreach ($groupedFields['date'] as $field) : ?>
        <h4><strong><?= "<?= __('" . Inflector::humanize($field) . "') ?>" ?></strong></h4>
                <p class="lead"><CakePHPBakeOpenTag= h($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></p>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($groupedFields['boolean']) : ?>
    <div class="col-lg-2">
            <?php foreach ($groupedFields['boolean'] as $field) : ?>
        <h4><strong><CakePHPBakeOpenTag= __('<?= Inflector::humanize($field) ?>') CakePHPBakeCloseTag></strong></h4>
                <p class="lead"><CakePHPBakeOpenTag= $<?= $singularVar ?>-><?= $field ?> ? __('Yes') : __('No'); CakePHPBakeCloseTag></p>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?php if ($groupedFields['text']) : ?>
    <?php foreach ($groupedFields['text'] as $field) : ?>
<div class="row texts">
            <div class="col-lg-9">
                <h4><strong><CakePHPBakeOpenTag= __('<?= Inflector::humanize($field) ?>') CakePHPBakeCloseTag></strong></h4>
                <CakePHPBakeOpenTag= $this->Text->autoParagraph(h($<?= $singularVar ?>-><?= $field ?>)); CakePHPBakeCloseTag>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<div class="row view-actions">
    <div class="col-md-12">
        <CakePHPBakeOpenTag= $this->Html->link('', ['action' => 'index'], ['title' => __('List'), 'class' => 'btn btn-primary glyphicon glyphicon-th-list']) CakePHPBakeCloseTag> 
        <CakePHPBakeOpenTag= $this->Html->link('', ['action' => 'edit', <?= $pk ?>], ['title' => __('Edit'), 'class' => 'btn btn-primary glyphicon glyphicon-pencil']) CakePHPBakeCloseTag> 
        <CakePHPBakeOpenTag= $this->Form->postLink('', ['action' => 'delete', <?= $pk ?>], ['confirm' => __('Are you sure you want to delete # {0}?', <?= $pk ?>), 'title' => __('Delete'), 'class' => 'btn btn-primary glyphicon glyphicon-trash']) CakePHPBakeCloseTag> 
    </div>
</div>

<?php
$relations = $associations['HasMany'] + $associations['BelongsToMany'];
foreach ($relations as $alias => $details):
    $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
    ?>
<div class="related row">
        <div class = "col-lg-12">
            <h4><strong><CakePHPBakeOpenTag= __('Related <?= $otherPluralHumanName ?>') CakePHPBakeCloseTag></strong></h4>
            <CakePHPBakeOpenTagphp if (!empty($<?= $singularVar ?>-><?= $details['property'] ?>)): CakePHPBakeCloseTag>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <?php foreach ($details['fields'] as $field): ?>
                        <th><CakePHPBakeOpenTag= __('<?= Inflector::humanize($field) ?>') CakePHPBakeCloseTag></th>
                            <?php endforeach; ?>
                        <th class="actions"><CakePHPBakeOpenTag= __('Actions') CakePHPBakeCloseTag></th>
                        </tr>
                    </thead>
                    <tbody>
                        <CakePHPBakeOpenTagphp foreach ($<?= $singularVar ?>-><?= $details['property'] ?> as $<?= $otherSingularVar ?>): CakePHPBakeCloseTag>
                        <tr>
                            <?php foreach ($details['fields'] as $field): ?>
                        <td><CakePHPBakeOpenTag= h($<?= $otherSingularVar ?>-><?= $field ?>) CakePHPBakeCloseTag></td>
                            <?php endforeach; ?>
                            <?php $otherPk = "\${$otherSingularVar}->{$details['primaryKey'][0]}"; ?>
                        <td class="actions">
                                <CakePHPBakeOpenTag= $this->Html->link('', ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', <?= $otherPk ?>], ['title' => __('View'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-eye-open']) CakePHPBakeCloseTag>
                                <!--?= $this->Html->link('', ['controller' => '<?= $details['controller'] ?>', 'action' => 'edit', <?= $otherPk ?>], ['title' => __('Edit'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-pencil']) ?-->
                                <!--?= $this->Form->postLink('', ['controller' => '<?= $details['controller'] ?>', 'action' => 'delete', <?= $otherPk ?>], ['confirm' => __('Are you sure you want to delete # {0}?', <?= $otherPk ?>), 'title' => __('Delete'), 'class' => 'btn btn-sm btn-link glyphicon glyphicon-trash']) ?-->
                            </td>
                        </tr>
                        <CakePHPBakeOpenTagphp endforeach; CakePHPBakeCloseTag>
                    </tbody>
                </table>
            </div>
        <CakePHPBakeOpenTagphp endif; CakePHPBakeCloseTag>
    </div>
</div>
<?php endforeach; ?>
