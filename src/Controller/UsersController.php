<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        
        $this->Auth->allow(['add', 'edit', 'testComunicationSend', 'addWeb', 'addWebF', 'checkData', 'addWebBasic', 'addWebBasicF', 'mailPromoter', 'mailBudget', 'restore', 'recoverPassword', 
            'mailRecoverPassword']);
    }
    
    public function isAuthorized($user)
    {
        if(isset($user['role']))
        {
            if ($user['role'] == 'Auditor(a) externo' || $user['role'] == 'Auditor(a) interno' || $user['role'] == 'Administrador(a) de la clínica')
            {
                if(in_array($this->request->action, ['home', 'addBasic', 'editBasic', 'indexPatientUser', 'view', 'viewBasic', 'editBasic', 'delete', 'deleteBasic', 'logout', 'checkUser', 'viewGlobal', 'confirmPatient', 'restore', 'wait', 'findPatient', 'index', 'add', 'edit', 'confirmUser', 'restoreUser', 'previousUser', 'findUser', 'findPromoter', 'indexBasic', 'reasignUser', 'findPromoterMulti', 
                        'arrayErrors']))
                {
                    return true;
                }
            }
            elseif ($user['role'] == 'Coordinador(a)')
            {
                if(in_array($this->request->action, ['home', 'addBasic', 'editBasic', 'indexPatientUser', 'view', 'viewBasic', 'editBasic', 'delete', 'deleteBasic', 'logout', 'checkUser', 'viewGlobal', 'confirmPatient', 'restore', 'wait', 'findPatient', 'index', 'add', 'edit', 'confirmUser', 'restoreUser', 'previousUser', 'findUser', 'findPromoter', 'indexBasic', 'reasignUser', 
                        'arrayErrors']))
                {
                    return true;
                }
            }			
            elseif ($user['role'] === 'Promotor(a)' || $user['role'] === 'Promotor(a) independiente')
            {
                if(in_array($this->request->action, ['home', 'addBasic', 'editBasic', 'indexPatientUser', 'view', 'viewBasic', 'editBasic', 'delete', 'deleteBasic', 'logout', 'checkUser', 'viewGlobal', 'confirmPatient', 'restore', 'wait', 'findPatient', 'index', 'add', 'edit', 'confirmUser', 'restoreUser', 'arrayErrors']))
                {
                    return true;
                }                
            }
            elseif ($user['role'] === 'Call center')
            {
                if(in_array($this->request->action, ['home', 'addBasic', 'editBasic', 'indexPatientUser', 'view', 'viewBasic', 'editBasic', 'delete', 'deleteBasic', 'logout', 'checkUser', 'viewGlobal', 'confirmPatient', 'restore', 'wait', 'arrayErrors']))
                {
                    return true;
                }                
            }
        }
        return parent::isAuthorized($user);
    }

    public function login()
    {
        if($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user); 
                
                /* $this->loadModel('Systems');

                $system = $this->Systems->get(2);

                if ($system->system_switch == true)
                {
                    if ($this->Auth->user('user_status') == "INACTIVO" || $this->Auth->user('deleted_record') == 1)
                    {
                        $this->Flash->error(__("Acceso restringido"));
                        $this->logout();
                    }
                    else
                    { */
                        return $this->redirect($this->Auth->redirectUrl());
                    /* } 
                }
                else
                {
                    if ($this->Auth->user('username') == 'angelsanz')
                    {
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                    else
                    {
                        $this->Flash->error(__('Estimado usuario, en estos momentos estamos haciendo labores de mantenimiento en el sistema, por favor intente más tarde..'));
                        
                        return $this->redirect(['controller' => 'Users', 'action' => 'logout']); 
                    }
                } */
            }
            else
            {
                $this->Flash->error('Datos invalidos, por favor intente nuevamente', ['key' => 'auth']);
            }
        }
    }       

    public function home()
    {
        $this->render();
        
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
