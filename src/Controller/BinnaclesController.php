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
    public function add($novedad = null, $tipoClase = null, $nombreClase = null, $nombreMetodo = null, $arrayExtra = null)
    {
        $this->autoRender = false;
                            
        $binnacle = $this->Binnacles->newEntity();

        $binnacle->novedad = $novedad;
        
        $binnacle->tipo_clase = $tipoClase;
        
        $binnacle->nombre_clase = $nombreClase;
        
        $binnacle->nombre_metodo = $nombreMetodo;
        
        if (isset($arrayExtra))
        {
            $contadorArray = 1;
            
            foreach ($arrayExtra as $arrayExtras)
            {
                if ($contadorArray == 1)
                {
                    $binnacle->columna_extra1 = $arrayExtras;
                }
                if ($contadorArray == 2)
                {
                    $binnacle->columna_extra2 = $arrayExtras;
                }                  
                if ($contadorArray == 3)
                {
                    $binnacle->columna_extra3 = $arrayExtras;
                }
                if ($contadorArray == 4)
                {
                    $binnacle->columna_extra4 = $arrayExtras;
                }
                if ($contadorArray == 5)
                {
                    $binnacle->columna_extra5 = $arrayExtras;
                }
                if ($contadorArray == 6)
                {
                    $binnacle->columna_extra6 = $arrayExtras;
                }
                if ($contadorArray == 7)
                {
                    $binnacle->columna_extra7 = $arrayExtras;
                }
                if ($contadorArray == 8)
                {
                    $binnacle->columna_extra8 = $arrayExtras;
                }
                if ($contadorArray == 9)
                {
                    $binnacle->columna_extra9 = $arrayExtras;
                }
                if ($contadorArray == 10)
                {
                    $binnacle->columna_extra10 = $arrayExtras;
                }
                $contadorArray++;
            }
        }
        
        $binnacle->usuario_responsable = $this->Auth->user('username');
                
        if (!($this->Binnacles->save($binnacle)))
        {
            $this->Flash->error(__('No se pudo grabar el registro en la tabla Binnacles'));
        }
        return;
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
