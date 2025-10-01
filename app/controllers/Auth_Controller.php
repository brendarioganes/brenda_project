<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: Auth_Controller
 * 
 * Automatically generated via CLI.
 */
class Auth_Controller extends Controller {
    public function __construct()
    {
        parent::__construct();
    }


    public function loginForm(){

         if ($this->session->userdata('logged_in')) {
            if($this->session->userdata('role') == 'admin'){
                redirect('/admin/user-management');

            }else{
                redirect('/home');
            }
            }else{
                $this->call->view('auth/login');
            }
            }

    public function loginUser(){
        $this->form_validation
            ->name('username')
                ->required()
            ->name('password')
                ->required();

            if ($this->form_validation->run() == FALSE) {
                $errors = $this->form_validation->get_errors();
                setErrors($errors);
                redirect('/login');
            } else {

                $username      = $this->io->post('username');
                $password   = $this->io->post('password');

                $user = $this->UserModel->findByUsername($username);
                 if ($user) {
                    if (password_verify($password, $user['password'])) {
                      $this->session->set_userdata([
        
                                'user_id' => $user['id'],
                                'username' => $user['username'],
                                'role' => $user['role'],
                                'logged_in' => TRUE
                            ]);

                            setMessage('success', 'Welcome back, ' . $user['username']);
                            redirect(uri:'/home');

                            if($user['role'] == 'admin'){
                                redirect('/admin/user-management');
                            }else{
                                redirect('/home');
                            }
                        } else {
                            setMessage('danger', 'Invalid password.');
                            redirect(uri:'/');
                        }
                    } else {
                        setMessage('danger', 'User not found.');
                        redirect(uri:'/');
                    }

            }


    }

    
    public function logout()
        {
            $this->session->unset_userdata(['user_id', "username", 'email', 'logged_in']);
             redirect('/');
         }

}