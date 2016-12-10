<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SchoolExams Controller
 *
 * @property \App\Model\Table\SchoolExamsTable $SchoolExams
 */
class SchoolExamsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SchoolStudents', 'SchoolSubjects']
        ];
        $schoolExams = $this->paginate($this->SchoolExams);

        $this->set(compact('schoolExams'));
        $this->set('_serialize', ['schoolExams']);
    }

    /**
     * View method
     *
     * @param string|null $id School Exam id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schoolExam = $this->SchoolExams->get($id, [
            'contain' => ['SchoolStudents', 'SchoolSubjects']
        ]);

        $this->set('schoolExam', $schoolExam);
        $this->set('_serialize', ['schoolExam']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schoolExam = $this->SchoolExams->newEntity();
        if ($this->request->is('post')) {
            $schoolExam = $this->SchoolExams->patchEntity($schoolExam, $this->request->data);
            if ($this->SchoolExams->save($schoolExam)) {
                $this->Flash->success(__('The school exam has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school exam could not be saved. Please, try again.'));
            }
        }
        $schoolStudents = $this->SchoolExams->SchoolStudents->find('list', ['limit' => 200]);
        $schoolSubjects = $this->SchoolExams->SchoolSubjects->find('list', ['limit' => 200]);
        $this->set(compact('schoolExam', 'schoolStudents', 'schoolSubjects'));
        $this->set('_serialize', ['schoolExam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id School Exam id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $schoolExam = $this->SchoolExams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schoolExam = $this->SchoolExams->patchEntity($schoolExam, $this->request->data);
            if ($this->SchoolExams->save($schoolExam)) {
                $this->Flash->success(__('The school exam has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The school exam could not be saved. Please, try again.'));
            }
        }
        $schoolStudents = $this->SchoolExams->SchoolStudents->find('list', ['limit' => 200]);
        $schoolSubjects = $this->SchoolExams->SchoolSubjects->find('list', ['limit' => 200]);
        $this->set(compact('schoolExam', 'schoolStudents', 'schoolSubjects'));
        $this->set('_serialize', ['schoolExam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id School Exam id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schoolExam = $this->SchoolExams->get($id);
        if ($this->SchoolExams->delete($schoolExam)) {
            $this->Flash->success(__('The school exam has been deleted.'));
        } else {
            $this->Flash->error(__('The school exam could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
