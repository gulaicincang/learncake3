<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolSubjects Controller
 *
 * @property \App\Model\Table\SchoolSubjectsTable $SchoolSubjects
 */
class SchoolSubjectsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $schoolSubjects = $this->paginate($this->SchoolSubjects);

        $this->set(compact('schoolSubjects'));
        $this->set('_serialize', ['schoolSubjects']);
    }

    /**
     * View method
     *
     * @param string|null $id School Subject id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolSubject = $this->SchoolSubjects->get($id, [
            'contain' => ['SchoolExams']
        ]);

        $this->set('schoolSubject', $schoolSubject);
        $this->set('_serialize', ['schoolSubject']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolSubject = $this->SchoolSubjects->newEntity();
        if ($this->request->is('post')) {
            $schoolSubject = $this->SchoolSubjects->patchEntity($schoolSubject, $this->request->data);
            if ($this->SchoolSubjects->save($schoolSubject)) {
                $this->Flash->success(__('The school subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school subject could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolSubject'));
        $this->set('_serialize', ['schoolSubject']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Subject id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolSubject = $this->SchoolSubjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolSubject = $this->SchoolSubjects->patchEntity($schoolSubject, $this->request->data);
            if ($this->SchoolSubjects->save($schoolSubject)) {
                $this->Flash->success(__('The school subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school subject could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('schoolSubject'));
        $this->set('_serialize', ['schoolSubject']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Subject id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolSubject = $this->SchoolSubjects->get($id);
        if ($this->SchoolSubjects->delete($schoolSubject)) {
            $this->Flash->success(__('The school subject has been deleted.'));
        } else {
            $this->Flash->error(__('The school subject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
