<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $students
 */
?>
<div>
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
</div>
