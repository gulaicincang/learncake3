<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolTeachers Controller
 *
 * @property \App\Model\Table\SchoolTeachersTable $SchoolTeachers
 */
class SchoolTeachersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $schoolTeachers = $this->paginate($this->SchoolTeachers);

        $this->set(compact('schoolTeachers'));
        $this->set('_serialize', ['schoolTeachers']);
    }

    /**
     * View method
     *
     * @param string|null $id School Teacher id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolTeacher = $this->SchoolTeachers->get($id, [
            'contain' => ['SchoolClasses']
        ]);

        $this->set('schoolTeacher', $schoolTeacher);
        $this->set('_serialize', ['schoolTeacher']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolTeacher = $this->SchoolTeachers->newEntity();
        if ($this->request->is('post')) {
            $schoolTeacher = $this->SchoolTeachers->patchEntity($schoolTeacher, $this->request->data);
            if ($this->SchoolTeachers->save($schoolTeacher)) {
                $this->Flash->success(__('The school teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school teacher could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolTeacher'));
        $this->set('_serialize', ['schoolTeacher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Teacher id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolTeacher = $this->SchoolTeachers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolTeacher = $this->SchoolTeachers->patchEntity($schoolTeacher, $this->request->data);
            if ($this->SchoolTeachers->save($schoolTeacher)) {
                $this->Flash->success(__('The school teacher has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school teacher could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolTeacher'));
        $this->set('_serialize', ['schoolTeacher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Teacher id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolTeacher = $this->SchoolTeachers->get($id);
        if ($this->SchoolTeachers->delete($schoolTeacher)) {
            $this->Flash->success(__('The school teacher has been deleted.'));
        } else {
            $this->Flash->error(__('The school teacher could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
