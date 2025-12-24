<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        //echo "die";die;
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function changePassword()
    {
        $userId = session()->get('user_id');

        if (!$userId) {
            return redirect()->back()->with('error', 'You must be logged in to change your password.');
        }

        if ($this->request->getPost('new_password') != $this->request->getPost('confirm_password')) {
            return redirect()->back()->with('error', 'New Password and Confirm Password not matching!');
        }

        $user = $this->userModel->find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        if (!password_verify($this->request->getPost('current_password'), $user['password'])) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        if (password_verify($this->request->getPost('new_password'), $user['password'])) {
            return redirect()->back()->with('error', 'New password must be different from the current password.');
        }

        $this->userModel->update($userId, [
            'password' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }



    public function index()
    {
        //echo "die";die;
      
        // // Step 1: Hash the password
        // $password = '1234'; // replace with your password
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // // Display the hash
        // echo "Hashed Password: " . $hashedPassword . PHP_EOL;

        // // Step 2: Verify the password
        // $inputPassword = '1234'; // password entered by user

        // if (password_verify($inputPassword, $hashedPassword)) {
        //     echo "Password matches!";
        // } else {
        //     echo "Password does not match.";
        // }

        return view('admin/login', ['title' => 'Admin Login']);
    }

    public function login()
    {
        //echo "die";die;
        $session = session();
    
        // Validate input
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];
    
        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Please enter a valid email and password.');
        }
    
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Get user from database
        $user = $this->userModel->where('email', $email)->first();
    
        if ($user) {
            // Check password
            if (password_verify($password, $user['password'])) {
                // Set session
                $session->set([
                    'user_id'     => $user['id'],
                    'user_email'  => $user['email'],
                    'isLoggedIn'  => true
                ]);
    
                return redirect()->to('/admin/dashboard')->with('success', 'Login successful!');
            } else {
                return redirect()->back()->withInput()->with('error', 'Invalid password.');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email not found.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login')->with('success', 'You have been logged out.');
    }

    public function changePasswordShow()
    {
        return view('admin/auth/changePassword', [
            'title' => 'Change Password'
        ]);
    }





    // public function login()
    // {
    //     log_message('debug', 'Login method: ' . $this->request->getMethod());

    //     if ($this->request->getMethod() === 'post') {
    //         $email = $this->request->getPost('email');
    //         $password = $this->request->getPost('password');
    //         $user = $this->userModel->getUserByEmail($email);

    //         if ($user) {
    //             if (password_verify($password, $user['password'])) {
    //                 $token = base64_encode($user['email'] . '|' . time());

    //                 session()->set([
    //                     'isLoggedIn' => true,
    //                     'user_id'    => $user['id'],
    //                     'email'      => $user['email'],
    //                     'auth_token' => $token
    //                 ]);

    //                 session()->setFlashdata('success', 'Login successful!');
    //                 log_message('info', 'Login successful for: ' . $email);

    //                 return redirect()->to('/admin/gallery');
    //             } else {
    //                 session()->setFlashdata('error', 'Incorrect password.');
    //                 log_message('error', 'Incorrect password for: ' . $email);
    //             }
    //         } else {
    //             session()->setFlashdata('error', 'Email not found.');
    //             log_message('error', 'Login attempt with unknown email: ' . $email);
    //         }

    //         return redirect()->to('/admin/login')->withInput();
    //             log_message('error', 'Login attempt with unknown email: ' . $email);
    //     }

    //     return redirect()->to('/admin/login');
    // }

    // public function logout()
    // {
    //     session()->destroy();
    //     session()->setFlashdata('success', 'Logged out successfully.');
    //     return redirect()->to('/admin/login');
    // }
}
