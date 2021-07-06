<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClassRoom[]|\Cake\Collection\CollectionInterface $classRooms
 */
?>
<div class="classRooms index content">
    <?= $this->Html->link(__('New Class Room'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Class Rooms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classRooms as $classRoom): ?>
                <tr>
                    <td><?= $this->Number->format($classRoom->id) ?></td>
                    <td><?= h($classRoom->name) ?></td>
                    <td><?= h($classRoom->created) ?></td>
                    <td><?= h($classRoom->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classRoom->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classRoom->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classRoom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classRoom->id)]) ?>
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
