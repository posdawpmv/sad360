<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvaluationsUsers Controller
 *
 * @property \App\Model\Table\EvaluationsUsersTable $EvaluationsUsers
 */
class EvaluationsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Evaluations']
        ];
        $this->set('evaluationsUsers', $this->paginate($this->EvaluationsUsers));
        $this->set('_serialize', ['evaluationsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Evaluations User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluationsUser = $this->EvaluationsUsers->get($id, [
            'contain' => ['Users', 'Evaluations']
        ]);
        $this->set('evaluationsUser', $evaluationsUser);
        $this->set('_serialize', ['evaluationsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluationsUser = $this->EvaluationsUsers->newEntity();
        if ($this->request->is('post')) {
            $evaluationsUser = $this->EvaluationsUsers->patchEntity($evaluationsUser, $this->request->data);
            if ($this->EvaluationsUsers->save($evaluationsUser)) {
                $this->Flash->success(__('The evaluations user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evaluations user could not be saved. Please, try again.'));
            }
        }
        $users = $this->EvaluationsUsers->Users->find('list', ['limit' => 200]);
        $evaluations = $this->EvaluationsUsers->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('evaluationsUser', 'users', 'evaluations'));
        $this->set('_serialize', ['evaluationsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluations User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluationsUser = $this->EvaluationsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluationsUser = $this->EvaluationsUsers->patchEntity($evaluationsUser, $this->request->data);
            if ($this->EvaluationsUsers->save($evaluationsUser)) {
                $this->Flash->success(__('The evaluations user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evaluations user could not be saved. Please, try again.'));
            }
        }
        $users = $this->EvaluationsUsers->Users->find('list', ['limit' => 200]);
        $evaluations = $this->EvaluationsUsers->Evaluations->find('list', ['limit' => 200]);
        $this->set(compact('evaluationsUser', 'users', 'evaluations'));
        $this->set('_serialize', ['evaluationsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluations User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluationsUser = $this->EvaluationsUsers->get($id);
        if ($this->EvaluationsUsers->delete($evaluationsUser)) {
            $this->Flash->success(__('The evaluations user has been deleted.'));
        } else {
            $this->Flash->error(__('The evaluations user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
