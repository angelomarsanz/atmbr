<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Binnacles Controller
 *
 * @property \App\Model\Table\BinnaclesTable $Binnacles
 *
 * @method \App\Model\Entity\Binnacle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BinnaclesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $binnacles = $this->paginate($this->Binnacles);

        $this->set(compact('binnacles'));
    }

    /**
     * View method
     *
     * @param string|null $id Binnacle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $binnacle = $this->Binnacles->get($id, [
            'contain' => []
        ]);

        $this->set('binnacle', $binnacle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $binnacle = $this->Binnacles->newEntity();
        if ($this->request->is('post')) {
            $binnacle = $this->Binnacles->patchEntity($binnacle, $this->request->getData());
            if ($this->Binnacles->save($binnacle)) {
                $this->Flash->success(__('The binnacle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The binnacle could not be saved. Please, try again.'));
        }
        $this->set(compact('binnacle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Binnacle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $binnacle = $this->Binnacles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $binnacle = $this->Binnacles->patchEntity($binnacle, $this->request->getData());
            if ($this->Binnacles->save($binnacle)) {
                $this->Flash->success(__('The binnacle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The binnacle could not be saved. Please, try again.'));
        }
        $this->set(compact('binnacle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Binnacle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $binnacle = $this->Binnacles->get($id);
        if ($this->Binnacles->delete($binnacle)) {
            $this->Flash->success(__('The binnacle has been deleted.'));
        } else {
            $this->Flash->error(__('The binnacle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
