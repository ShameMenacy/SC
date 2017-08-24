<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionAnswer Controller
 *
 * @property \App\Model\Table\QuestionAnswerTable $QuestionAnswer
 *
 * @method \App\Model\Entity\QuestionAnswer[] paginate($object = null, array $settings = [])
 */
class QuestionAnswerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $questionAnswer = $this->paginate($this->QuestionAnswer);

        $this->set(compact('questionAnswer'));
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * View method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionAnswer = $this->QuestionAnswer->get($id, [
            'contain' => []
        ]);

        $this->set('questionAnswer', $questionAnswer);
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionAnswer = $this->QuestionAnswer->newEntity();
        if ($this->request->is('post')) {
            $questionAnswer = $this->QuestionAnswer->patchEntity($questionAnswer, $this->request->getData());
            if ($this->QuestionAnswer->save($questionAnswer)) {
                $this->Flash->success(__('The question answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question answer could not be saved. Please, try again.'));
        }
        $this->set(compact('questionAnswer'));
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionAnswer = $this->QuestionAnswer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionAnswer = $this->QuestionAnswer->patchEntity($questionAnswer, $this->request->getData());
            if ($this->QuestionAnswer->save($questionAnswer)) {
                $this->Flash->success(__('The question answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question answer could not be saved. Please, try again.'));
        }
        $this->set(compact('questionAnswer'));
        $this->set('_serialize', ['questionAnswer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Question Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionAnswer = $this->QuestionAnswer->get($id);
        if ($this->QuestionAnswer->delete($questionAnswer)) {
            $this->Flash->success(__('The question answer has been deleted.'));
        } else {
            $this->Flash->error(__('The question answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
