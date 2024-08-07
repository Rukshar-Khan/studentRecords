<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term1 $term1
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Term1'), ['action' => 'edit', $term1->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Term1'), ['action' => 'delete', $term1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term1->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Term1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Term1'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="term1 view content">
            <h3><?= h($term1->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $term1->has('student') ? $this->Html->link($term1->student->name, ['controller' => 'Students', 'action' => 'view', $term1->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($term1->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('English') ?></th>
                    <td><?= $this->Number->format($term1->English) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hindi') ?></th>
                    <td><?= $this->Number->format($term1->Hindi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marathi') ?></th>
                    <td><?= $this->Number->format($term1->Marathi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Maths') ?></th>
                    <td><?= $this->Number->format($term1->Maths) ?></td>
                </tr>
                <tr>
                    <th><?= __('EVS') ?></th>
                    <td><?= $this->Number->format($term1->EVS) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($term1->Total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Percentage') ?></th>
                    <td><?= $this->Number->format($term1->Percentage) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Finals') ?></h4>
                <?php if (!empty($term1->finals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Term1 Id') ?></th>
                            <th><?= __('Term2 Id') ?></th>
                            <th><?= __('Total') ?></th>
                            <th><?= __('Percentage') ?></th>
                            <th><?= __('Grade') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($term1->finals as $finals) : ?>
                        <tr>
                            <td><?= h($finals->id) ?></td>
                            <td><?= h($finals->term1_id) ?></td>
                            <td><?= h($finals->term2_id) ?></td>
                            <td><?= h($finals->total) ?></td>
                            <td><?= h($finals->Percentage) ?></td>
                            <td><?= h($finals->Grade) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Finals', 'action' => 'view', $finals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Finals', 'action' => 'edit', $finals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Finals', 'action' => 'delete', $finals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $finals->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
