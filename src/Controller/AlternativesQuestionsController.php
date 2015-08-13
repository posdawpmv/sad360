<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AlternativesQuestions Controller
 *
 * @property \App\Model\Table\AlternativesQuestionsTable $AlternativesQuestions
 */
class AlternativesQuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Alternatives']
        ];
        $this->set('alternativesQuestions', $this->paginate($this->AlternativesQuestions));
        $this->set('_serialize', ['alternativesQuestions']);
    }

    /**
     * View method
     *
     * @param string|null $id Alternatives Question id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alternativesQuestion = $this->AlternativesQuestions->get($id, [
            'contain' => ['Questions', 'Alternatives']
        ]);
        $this->set('alternativesQuestion', $alternativesQuestion);
        $this->set('_serialize', ['alternativesQuestion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alternativesQuestion = $this->AlternativesQuestions->newEntity();
        if ($this->request->is('post')) {
            $alternativesQuestion = $this->AlternativesQuestions->patchEntity($alternativesQuestion, $this->request->data);
            if ($this->AlternativesQuestions->save($alternativesQuestion)) {
                $this->Flash->success(__('The alternatives question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alternatives question could not be saved. Please, try again.'));
            }
        }
        $questions = $this->AlternativesQuestions->Questions->find('list', ['limit' => 200]);
        $alternatives = $this->AlternativesQuestions->Alternatives->find('list', ['limit' => 200]);
        $this->set(compact('alternativesQuestion', 'questions', 'alternatives'));
        $this->set('_serialize', ['alternativesQuestion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alternatives Question id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alternativesQuestion = $this->AlternativesQuestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alternativesQuestion = $this->AlternativesQuestions->patchEntity($alternativesQuestion, $this->request->data);
            if ($this->AlternativesQuestions->save($alternativesQuestion)) {
                $this->Flash->success(__('The alternatives question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alternatives question could not be saved. Please, try again.'));
            }
        }
        $questions = $this->AlternativesQuestions->Questions->find('list', ['limit' => 200]);
        $alternatives = $this->AlternativesQuestions->Alternatives->find('list', ['limit' => 200]);
        $this->set(compact('alternativesQuestion', 'questions', 'alternatives'));
        $this->set('_serialize', ['alternativesQuestion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alternatives Question id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alternativesQuestion = $this->AlternativesQuestions->get($id);
        if ($this->AlternativesQuestions->delete($alternativesQuestion)) {
            $this->Flash->success(__('The alternatives question has been deleted.'));
        } else {
            $this->Flash->error(__('The alternatives question could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
