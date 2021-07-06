<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div class="students index content">
    <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Students') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('class_room_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $this->Number->format($student->id) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= $student->has('class_room') ? $this->Html->link($student->class_room->name, ['controller' => 'ClassRooms', 'action' => 'view', $student->class_room->id]) : '' ?></td>
                    <td><?= h($student->created) ?></td>
                    <td><?= h($student->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
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
