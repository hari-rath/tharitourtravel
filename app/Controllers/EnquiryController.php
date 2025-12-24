<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class EnquiryController extends BaseController
{
    public function send()
    {
        // echo "hi";die;
        helper(['form', 'url']);

        $arrivalDate  = $this->request->getPost('arrival_date');
        $name         = $this->request->getPost('name');
        $phone        = $this->request->getPost('phone');
        $email        = $this->request->getPost('email');
        $members      = $this->request->getPost('members');
        $destination  = $this->request->getPost('destination');
        $message      = $this->request->getPost('message');
        $captcha      = $this->request->getPost('captcha');

        // Simple captcha validation
        // if (trim($captcha) !== "9") {
        //     return redirect()->back()->with('error', 'Captcha is incorrect!');
        // }

        // Prepare email content
        $emailContent = "
            <h3>New Tour Enquiry</h3>
            <p><strong>Arrival Date:</strong> {$arrivalDate}</p>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>No. of Members:</strong> {$members}</p>
            <p><strong>Destination:</strong> {$destination}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        echo "<pre>";
        print_r($emailContent);die;

        // Load Email library
        $emailService = \Config\Services::email();

        $emailService->setTo('support@tharitourtravel.com');
        $emailService->setFrom('support@tharitourtravel.com', 'Thari Tour Travel');
        $emailService->setSubject('New Tour Enquiry');
        $emailService->setMessage($emailContent);




        if ($emailService->send()) {
            return redirect()->back()->with('success', 'Your enquiry has been sent successfully!');
        } else {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
            die();
        }


        // if ($emailService->send()) {
        //     return redirect()->back()->with('success', 'Your enquiry has been sent successfully!');
        // } else {
        //     return redirect()->back()->with('error', 'Failed to send enquiry. Please try again later.');
        // }
    }
}
