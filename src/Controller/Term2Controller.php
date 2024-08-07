<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Term2 Controller
 *
 * @property \App\Model\Table\Term2Table $Term2
 * @method \App\Model\Entity\Term2[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Term2Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students'],
        ];
        $term2 = $this->paginate($this->Term2);

        $this->set(compact('term2'));
    }

    /**
     * View method
     *
     * @param string|null $id Term2 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $term2 = $this->Term2->get($id, [
            'contain' => ['Students', 'Finals'],
        ]);

        $this->set(compact('term2'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $term2 = $this->Term2->newEmptyEntity();
        if ($this->request->is('post')) {
            $term2 = $this->Term2->patchEntity($term2, $this->request->getData());
            if ($this->Term2->save($term2)) {
                $this->Flash->success(__('The term2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The term2 could not be saved. Please, try again.'));
        }
        $students = $this->Term2->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('term2', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Term2 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $term2 = $this->Term2->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $term2 = $this->Term2->patchEntity($term2, $this->request->getData());
            if ($this->Term2->save($term2)) {
                $this->Flash->success(__('The term2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The term2 could not be saved. Please, try again.'));
        }
        $students = $this->Term2->Students->find('list', ['limit' => 200])->all();
        $this->set(compact('term2', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Term2 id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $term2 = $this->Term2->get($id);
        if ($this->Term2->delete($term2)) {
            $this->Flash->success(__('The term2 has been deleted.'));
        } else {
            $this->Flash->error(__('The term2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
