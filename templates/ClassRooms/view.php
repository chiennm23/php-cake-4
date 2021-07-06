<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClassRoom $classRoom
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Class Room'), ['action' => 'edit', $classRoom->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Class Room'), ['action' => 'delete', $classRoom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classRoom->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Class Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Class Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classRooms view content">
            <h3><?= h($classRoom->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($classRoom->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classRoom->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($classRoom->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($classRoom->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($classRoom->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Students') ?></h4>
                <?php if (!empty($classRoom->students)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Class Room Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($classRoom->students as $students) : ?>
                        <tr>
                            <td><?= h($students->id) ?></td>
                            <td><?= h($students->name) ?></td>
                            <td><?= h($students->class_room_id) ?></td>
                            <td><?= h($students->created) ?></td>
                            <td><?= h($students->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
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
