<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Term2> $term2
 */
?>
<div class="term2 index content">
    <?= $this->Html->link(__('New Term2'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Term2') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Student_id') ?></th>
                    <th><?= $this->Paginator->sort('term1_id') ?></th>
                    <th><?= $this->Paginator->sort('English') ?></th>
                    <th><?= $this->Paginator->sort('Hindi') ?></th>
                    <th><?= $this->Paginator->sort('Marathi') ?></th>
                    <th><?= $this->Paginator->sort('Maths') ?></th>
                    <th><?= $this->Paginator->sort('EVS') ?></th>
                    <th><?= $this->Paginator->sort('Total') ?></th>
                    <th><?= $this->Paginator->sort('Percentage') ?></th>
                    <th><?= $this->Paginator->sort('Grade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($term2 as $term2): ?>
                <tr>
                    <td><?= $this->Number->format($term2->id) ?></td>
                    <td><?= $term2->has('student') ? $this->Html->link($term2->student->name, ['controller' => 'Students', 'action' => 'view', $term2->student->id]) : '' ?></td>
                    <td><?= $this->Number->format($term2->term1_id) ?></td>
                    <td><?= $this->Number->format($term2->English) ?></td>
                    <td><?= $this->Number->format($term2->Hindi) ?></td>
                    <td><?= $this->Number->format($term2->Marathi) ?></td>
                    <td><?= $this->Number->format($term2->Maths) ?></td>
                    <td><?= $this->Number->format($term2->EVS) ?></td>
                    <td><?= $this->Number->format($term2->Total) ?></td>
                    <td><?= $this->Number->format($term2->Percentage) ?></td>
                    <td><?= h($term2->Grade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $term2->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $term2->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $term2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term2->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
