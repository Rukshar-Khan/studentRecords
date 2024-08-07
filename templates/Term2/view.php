<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term2 $term2
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Term2'), ['action' => 'edit', $term2->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Term2'), ['action' => 'delete', $term2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term2->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Term2'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Term2'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="term2 view content">
            <h3><?= h($term2->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $term2->has('student') ? $this->Html->link($term2->student->name, ['controller' => 'Students', 'action' => 'view', $term2->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Grade') ?></th>
                    <td><?= h($term2->Grade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($term2->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Term1 Id') ?></th>
                    <td><?= $this->Number->format($term2->term1_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $this->Number->format($term2->English) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $this->Number->format($term2->Hindi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $this->Number->format($term2->Marathi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maths') ?></th>
                    <td><?= $this->Number->format($term2->Maths) ?></td>
                </tr>
                <tr>
                    <th><?= __('EVS') ?></th>
                    <td><?= $this->Number->format($term2->EVS) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($term2->Total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->format($term2->Percentage) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
