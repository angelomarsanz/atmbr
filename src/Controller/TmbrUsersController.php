<?php
namespace App\Controller;

use App\Controller\AppController;

use App\Controller\TmbrUsermetaController;

use Cake\I18n\Time;

/**
 * TmbrUsers Controller
 *
 * @property \App\Model\Table\TmbrUsersTable $TmbrUsers
 *
 * @method \App\Model\Entity\TmbrUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmbrUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tmbrUsers = $this->paginate($this->TmbrUsers);

        $this->set(compact('tmbrUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmbr User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmbrUser = $this->TmbrUsers->get($id, [
            'contain' => []
        ]);

        $this->set('tmbrUser', $tmbrUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($user = null)
    {
        $this->autoRender = false;

        $resultado = 0;

        $usuarioMeta = new TmbrUsermetaController;

        $tmbrUser = $this->TmbrUsers->newEntity();

        debug($tmbrUser);

        $tmbrUser->user_login = $user->username;
        $tmbrUser->user_pass = $user->password;
        $tmbrUser->user_nicename = $user->username;
        $tmbrUser->user_email = $user->email;
        $tmbrUser->user_url = '';
        $tmbrUser->user_registered = Time::now();
        $tmbrUser->user_activation_key = '';
        $tmbrUser->user_status = 0;
        $tmbrUser->display_name = $user->username;

        if ($this->TmbrUsers->save($tmbrUser)) 
        {
			$ultimoRegistro = $this->TmbrUsers->find('all', ['conditions' => ['TmbrUsers.user_login' => $tmbrUser->user_login], 
			'order' => ['TmbrUsers.user_registered' => 'DESC']]);
    
            $contadorRegistro = $ultimoRegistro->count();
		
            if ($contadorRegistro > 0)
            {
                $fila = $ultimoRegistro->first();
                $camposMeta = 
                    ['nickname' => $user->username,
                    'first_name' => $user->primer_nombre,
                    'last_name' => $user->primer_apellido,
                    'description' => '',
                    'rich_editing' => true,
                    'syntax_highlighting' => true,
                    'comment_shortcuts' => true,
                    'admin_color' => 'fresh',
                    'use_ssl' => 0,
                    'show_admin_bar_front' => true,
                    'locale' => '',
                    'wp_capabilities' => 'a:1:{s:10:"subscriber";b:1;}',
                    'wp_user_level' => 0];

                foreach ($camposMeta as $clave => $valor)
                {
                    $resultado = $usuarioMeta->add($fila->ID, $clave, $valor);
                    if ($resultado > 0)
                    {
                        $resultado = 1;
                        break;
                    }
                }
            }
            else
            {
                $resultado = 1;
            }
        }
        else
        {
            $resultado = 1;
        }
        return $resultado;
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmbr User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmbrUser = $this->TmbrUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmbrUser = $this->TmbrUsers->patchEntity($tmbrUser, $this->request->getData());
            if ($this->TmbrUsers->save($tmbrUser)) {
                $this->Flash->success(__('The tmbr user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmbr user could not be saved. Please, try again.'));
        }
        $this->set(compact('tmbrUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmbr User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmbrUser = $this->TmbrUsers->get($id);
        if ($this->TmbrUsers->delete($tmbrUser)) {
            $this->Flash->success(__('The tmbr user has been deleted.'));
        } else {
            $this->Flash->error(__('The tmbr user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
