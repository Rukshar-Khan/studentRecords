<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Term1 $term1
 * @var string[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $term1->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $term1->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Term1'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="term1 form content">
            <?= $this->Form->create($term1) ?>
            <fieldset>
                <legend><?= __('Edit Term1') ?></legend>
                <?php
                    echo $this->Form->control('Student_id', ['options' => $students]);
                    echo $this->Form->control('English');
                    echo $this->Form->control('Hindi');
                    echo $this->Form->control('Marathi');
                    echo $this->Form->control('Maths');
                    echo $this->Form->control('EVS');
                    echo $this->Form->control('Total');
                    echo $this->Form->control('Percentage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
