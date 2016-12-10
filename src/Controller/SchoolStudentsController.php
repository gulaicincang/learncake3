<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolStudents Controller
 *
 * @property \App\Model\Table\SchoolStudentsTable $SchoolStudents
 */
class SchoolStudentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SchoolClasses']
        ];
        $schoolStudents = $this->paginate($this->SchoolStudents);

        $this->set(compact('schoolStudents'));
        $this->set('_serialize', ['schoolStudents']);
    }

    /**
     * View method
     *
     * @param string|null $id School Student id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolStudent = $this->SchoolStudents->get($id, [
            'contain' => ['SchoolClasses', 'SchoolExams']
        ]);

        $this->set('schoolStudent', $schoolStudent);
        $this->set('_serialize', ['schoolStudent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolStudent = $this->SchoolStudents->newEntity();
        if ($this->request->is('post')) {
            $schoolStudent = $this->SchoolStudents->patchEntity($schoolStudent, $this->request->data);
            if ($this->SchoolStudents->save($schoolStudent)) {
                $this->Flash->success(__('The school student has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school student could not be saved. Please, try again.'));
            }
        }
        $schoolClasses = $this->SchoolStudents->SchoolClasses->find('list', ['limit' => 200]);
        $this->set(compact('schoolStudent', 'schoolClasses'));
        $this->set('_serialize', ['schoolStudent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Student id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolStudent = $this->SchoolStudents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolStudent = $this->SchoolStudents->patchEntity($schoolStudent, $this->request->data);
            if ($this->SchoolStudents->save($schoolStudent)) {
                $this->Flash->success(__('The school student has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school student could not be saved. Please, try again.'));
            }
        }
        $schoolClasses = $this->SchoolStudents->SchoolClasses->find('list', ['limit' => 200]);
        $this->set(compact('schoolStudent', 'schoolClasses'));
        $this->set('_serialize', ['schoolStudent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Student id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolStudent = $this->SchoolStudents->get($id);
        if ($this->SchoolStudents->delete($schoolStudent)) {
            $this->Flash->success(__('The school student has been deleted.'));
        } else {
            $this->Flash->error(__('The school student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
