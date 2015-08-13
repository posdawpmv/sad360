<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionnairesQuestions Controller
 *
 * @property \App\Model\Table\QuestionnairesQuestionsTable $QuestionnairesQuestions
 */
class QuestionnairesQuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questionnaires', 'Questions']
        ];
        $this->set('questionnairesQuestions', $this->paginate($this->QuestionnairesQuestions));
        $this->set('_serialize', ['questionnairesQuestions']);
    }

    /**
     * View method
     *
     * @param string|null $id Questionnaires Question id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionnairesQuestion = $this->QuestionnairesQuestions->get($id, [
            'contain' => ['Questionnaires', 'Questions']
        ]);
        $this->set('questionnairesQuestion', $questionnairesQuestion);
        $this->set('_serialize', ['questionnairesQuestion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionnairesQuestion = $this->QuestionnairesQuestions->newEntity();
        if ($this->request->is('post')) {
            $questionnairesQuestion = $this->QuestionnairesQuestions->patchEntity($questionnairesQuestion, $this->request->data);
            if ($this->QuestionnairesQuestions->save($questionnairesQuestion)) {
                $this->Flash->success(__('The questionnaires question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The questionnaires question could not be saved. Please, try again.'));
            }
        }
        $questionnaires = $this->QuestionnairesQuestions->Questionnaires->find('list', ['limit' => 200]);
        $questions = $this->QuestionnairesQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('questionnairesQuestion', 'questionnaires', 'questions'));
        $this->set('_serialize', ['questionnairesQuestion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionnaires Question id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionnairesQuestion = $this->QuestionnairesQuestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionnairesQuestion = $this->QuestionnairesQuestions->patchEntity($questionnairesQuestion, $this->request->data);
            if ($this->QuestionnairesQuestions->save($questionnairesQuestion)) {
                $this->Flash->success(__('The questionnaires question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The questionnaires question could not be saved. Please, try again.'));
            }
        }
        $questionnaires = $this->QuestionnairesQuestions->Questionnaires->find('list', ['limit' => 200]);
        $questions = $this->QuestionnairesQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('questionnairesQuestion', 'questionnaires', 'questions'));
        $this->set('_serialize', ['questionnairesQuestion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionnaires Question id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionnairesQuestion = $this->QuestionnairesQuestions->get($id);
        if ($this->QuestionnairesQuestions->delete($questionnairesQuestion)) {
            $this->Flash->success(__('The questionnaires question has been deleted.'));
        } else {
            $this->Flash->error(__('The questionnaires question could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
