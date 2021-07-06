<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ClassRooms Controller
 *
 * @property \App\Model\Table\ClassRoomsTable $ClassRooms
 * @method \App\Model\Entity\ClassRoom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassRoomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $classRooms = $this->paginate($this->ClassRooms);

        $this->set(compact('classRooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classRoom = $this->ClassRooms->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('classRoom'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classRoom = $this->ClassRooms->newEmptyEntity();
        if ($this->request->is('post')) {
            $classRoom = $this->ClassRooms->patchEntity($classRoom, $this->request->getData());
            if ($this->ClassRooms->save($classRoom)) {
                $this->Flash->success(__('The class room has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class room could not be saved. Please, try again.'));
        }
        $this->set(compact('classRoom'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classRoom = $this->ClassRooms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classRoom = $this->ClassRooms->patchEntity($classRoom, $this->request->getData());
            if ($this->ClassRooms->save($classRoom)) {
                $this->Flash->success(__('The class room has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class room could not be saved. Please, try again.'));
        }
        $this->set(compact('classRoom'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classRoom = $this->ClassRooms->get($id);
        if ($this->ClassRooms->delete($classRoom)) {
            $this->Flash->success(__('The class room has been deleted.'));
        } else {
            $this->Flash->error(__('The class room could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
