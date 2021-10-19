<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Closures Controller
 *
 * @property \App\Model\Table\ClosuresTable $Closures
 * @method \App\Model\Entity\Closure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClosuresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shops'],
        ];
        $closures = $this->paginate($this->Closures);

        $this->set(compact('closures'));
    }

    /**
     * View method
     *
     * @param string|null $id Closure id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $closure = $this->Closures->get($id, [
            'contain' => ['Shops'],
        ]);

        $this->set(compact('closure'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $closure = $this->Closures->newEmptyEntity();
        if ($this->request->is('post')) {
            $closure = $this->Closures->patchEntity($closure, $this->request->getData());
            if ($this->Closures->save($closure)) {
                $this->Flash->success(__('The closure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The closure could not be saved. Please, try again.'));
        }
        $shops = $this->Closures->Shops->find('list', ['limit' => 200]);
        $this->set(compact('closure', 'shops'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Closure id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $closure = $this->Closures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $closure = $this->Closures->patchEntity($closure, $this->request->getData());
            if ($this->Closures->save($closure)) {
                $this->Flash->success(__('The closure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The closure could not be saved. Please, try again.'));
        }
        $shops = $this->Closures->Shops->find('list', ['limit' => 200]);
        $this->set(compact('closure', 'shops'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Closure id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $closure = $this->Closures->get($id);
        if ($this->Closures->delete($closure)) {
            $this->Flash->success(__('The closure has been deleted.'));
        } else {
            $this->Flash->error(__('The closure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
