<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\ORM\TableRegistry;

use Cake\I18n\Time;

use Cake\Mailer\Email;

use Cake\Filesystem\File;

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
        
        $this->Auth->allow(['add', 'edit', 'recuperarClave', 'previo']);
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

    public function previo()
    {
        $this->autoRender = false;
        
        if ($this->request->is('post')) 
        {
            $filtro = $_POST['filtro'];
            return $this->redirect(['controller' => 'Users', 'action' => 'index', $filtro]);
        }
         
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($filtro = null)
    {
		$this->loadModel('Systems');
		$system = $this->Systems->get(2);

        $usersTable = TableRegistry::get('Users');
        
        $arrayResult = $usersTable->find('user', ['role' => $this->Auth->user('role')]);
        
        if ($arrayResult['indicator'] == 0)
        {
            $usersTodos = $arrayResult['searchRequired'];

            if (isset($filtro))
            {
                $usersSelect = $usersTodos->where(['Users.role' => $filtro]);
                $this->set('users', $this->paginate($usersSelect)); 
            }
            else
            {
                $this->set('users', $this->paginate($usersTodos));       
            }            
            $currentView = 'usersIndex';
            $this->set(compact('system', 'users', 'currentView'));
            $this->set('_serialize', ['system', 'users', 'currentView']);
		}
		else
		{
            $this->Flash->error(__('No se encontraron usuarios'));
            return $this->redirect(['controller' => 'Users', 'action' => 'wait']);
		}
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
    public function recuperarClave()
    {      	       	
		setlocale(LC_TIME, 'es_VE', 'es_VE.utf-8', 'es_VE.utf8'); 
		date_default_timezone_set('America/Caracas');

		$currentDate = time::now();

        $user = $this->Users->newEntity();
		
        if ($this->request->is('post')) 
        {
            $user = $this->Users->patchEntity($user, $this->request->getData());
							
			$ultimoRegistro = $this->Users->find('all', ['conditions' => [['Users.role' => $user->role], ['Users.email' => $user->email]], 
			'order' => ['Users.created' => 'DESC']]);
    
            $contadorRegistro = $ultimoRegistro->count();
		
			if ($contadorRegistro > 0)
			{
                $fila = $ultimoRegistro->first();       
             
				$user = $this->Users->get($fila->id);
			
				$primerNombreTrim = trim($user->primer_nombre);
				
				$primerNombre = strtoupper($primerNombreTrim);
				
				$primerApellidoTrim = trim($user->primer_apellido);
				
				$primerApellido = strtoupper($primerApellidoTrim);
			
				$password = 'Tb' . $user->id . $currentDate->second . $currentDate->minute . '$';

				$user->password = $password;
							
				if ($this->Users->save($user)) 
				{					
					$result = $this->emailRecuperarClave($user->email, $primerNombre, $user->username, $password);
			
					if ($result == 0)
					{
                        $this->Flash->success(__('Se envió el usuario y clave al email: ' . $user->email));
					}
					else
					{
						$this->Flash->error(__('No se pudo enviar el email con su usuario y contraseña. Por favor intente nuevamente'));
					}
				}
				else
				{
					$this->Flash->error(__('No se pudo crear la nueva contraseña. Por favor intente nuevamente'));
				}			
			}
			else
			{
				$this->Flash->error(__('No se encontró ningún usuario registrado con ese email'));
			}	
			return $this->redirect(['controller' => 'Users', 'action' => 'login']);
		}	
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    public function emailRecuperarClave($email = null, $primerNombre = null, $username = null, $password = null)
    {
        $correo = new Email(); 
        $correo
          ->setTransport('donWeb') 
          ->setEmailFormat('html') 
          ->setTo($email) 
          ->setFrom(['noresponder@tumundobienesraices.com' => 'Tu Mundo Bienes Raíces']) 
          ->setSubject('Recuperación de usuario y clave') 
          ->setViewVars([ 
            'varUser' => $primerNombre,
            'varUsername' => $username,
            'varPassword' => $password,
          ])
          ->viewBuilder()->setTemplate('email_clave');

        $correo->SMTPAuth = true;
        $correo->CharSet = "utf-8";     

        if($correo->send())
        {
            $result = 0;
        }
        else
        {
            $result = 1;
        }
        
        return $result;
    }
	public function arrayErrors($arrayCake = null)
	{
		$error_msg = [];
		
		foreach($arrayCake as $errors)
		{
			if(is_array($errors))
			{
				foreach($errors as $error)
				{
					
					$error_msg[] = $error;
				}
			}
			else
			{
				$error_msg[] = $errors;
			}
		}
		
		return $error_msg;
    }
    public function wait()
    {
        
    }
}