<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TmbrUsermeta Controller
 *
 * @property \App\Model\Table\TmbrUsermetaTable $TmbrUsermeta
 *
 * @method \App\Model\Entity\TmbrUsermetum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmbrUsermetaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $tmbrUsermeta = $this->paginate($this->TmbrUsermeta);

        $this->set(compact('tmbrUsermeta'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmbr Usermetum id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmbrUsermetum = $this->TmbrUsermeta->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('tmbrUsermetum', $tmbrUsermetum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null, $clave = null, $valor = null)
    {
        $this->autoRender = false;

        $resultado = 0;

        $tmbrUsermetum = $this->TmbrUsermeta->newEntity();

        $tmbrUsermetum->user_id = $id;
        $tmbrUsermetum->meta_key = $clave;
        $tmbrUsermetum->meta_value = $valor;

        if (!($this->TmbrUsermeta->save($tmbrUsermetum))) 
        {
            $resultado = 1;
        }
        return $resultado;
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmbr Usermetum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmbrUsermetum = $this->TmbrUsermeta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmbrUsermetum = $this->TmbrUsermeta->patchEntity($tmbrUsermetum, $this->request->getData());
            if ($this->TmbrUsermeta->save($tmbrUsermetum)) {
                $this->Flash->success(__('The tmbr usermetum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmbr usermetum could not be saved. Please, try again.'));
        }
        $users = $this->TmbrUsermeta->Users->find('list', ['limit' => 200]);
        $this->set(compact('tmbrUsermetum', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmbr Usermetum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmbrUsermetum = $this->TmbrUsermeta->get($id);
        if ($this->TmbrUsermeta->delete($tmbrUsermetum)) {
            $this->Flash->success(__('The tmbr usermetum has been deleted.'));
        } else {
            $this->Flash->error(__('The tmbr usermetum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
