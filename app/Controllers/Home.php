<?php

namespace App\Controllers;
use App\Models\ImageModel;
use App\Models\TourPackageModel;
use App\Models\CategoryModel;
use App\Models\EnquiryModel;
use App\Models\VehicleModel;
use App\Models\ContactModel;
use App\Models\ReviewModel;


class Home extends BaseController
{

    protected $imageModel;

    public function __construct()
    {
        $this->imageModel = new ImageModel();
        $this->tourPackageModel = new TourPackageModel();
        $this->CategoryModel = new CategoryModel();
        helper(['form', 'url']);
    }

    public function index(): string
    {
        $ReviewModel = new \App\Models\ReviewModel();

          $data['reviews'] = $ReviewModel->where('view_status', 1)
                                   ->orderBy('created_at', 'DESC')
                                   ->paginate(4, 'group1');
        $data['pager']   = $ReviewModel->pager;

        
        $data['tourDetails'] = $this->tourPackageModel->where('status', 1)->findAll();
        return view('landing_page', $data);
    }

    public function send()
    {
        helper(['form', 'url']);

        // Get POST data
        $arrival_date = $this->request->getPost('arrival_date');
        $name         = $this->request->getPost('name');
        $phone        = $this->request->getPost('phone');
        $email        = $this->request->getPost('email');
        $members      = $this->request->getPost('members');
        $destination  = $this->request->getPost('destination');
        $message      = $this->request->getPost('message');

        // Validation
        if (!$arrival_date || !$name || !$phone || !$email || !$members || !$destination || !$message) {
            return redirect()->back()->with('error', 'Please fill all fields!')->withInput();
        }

        // Create instance of the model
        $enquiryModel = new \App\Models\EnquiryModel();

        // Data to insert
        $data = [
            'date'               => $arrival_date,
            'full_name'          => $name,
            'contact_no'         => $phone,
            'email_id'           => $email,
            'no_of_member'       => $members,
            'select_destination' => $destination,
            'message'            => $message,
            'created_on'         => date('Y-m-d H:i:s'),
            'updated_on'         => date('Y-m-d H:i:s')
        ];

        // Insert data into database
        $insertedId = $enquiryModel->insert($data);

        if (!$insertedId) {
            return redirect()->back()->with('error', 'Insert failed. Please try again.')->withInput();
        }

        // Create HTML email body with table
        $body = '
        <html>
        <head>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                    max-width: 600px;
                }
                th, td {
                    border: 1px solid #4CAF50;
                    padding: 12px;
                    text-align: left;
                }
                th {
                    background-color: #4CAF50;
                    color: white;
                }
                td {
                    background-color: #f9f9f9;
                }
                h3 {
                    color: #333;
                }
            </style>
        </head>
        <body>
            <h3>New Enquiry Details</h3>
            <table>
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Arrival Date</td>
                    <td>' . htmlspecialchars($arrival_date) . '</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>' . htmlspecialchars($name) . '</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>' . htmlspecialchars($phone) . '</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>' . htmlspecialchars($email) . '</td>
                </tr>
                <tr>
                    <td>Number of Members</td>
                    <td>' . htmlspecialchars($members) . '</td>
                </tr>
                <tr>
                    <td>Destination</td>
                    <td>' . htmlspecialchars($destination) . '</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>' . nl2br(htmlspecialchars($message)) . '</td>
                </tr>
            </table>
        </body>
        </html>';

        // Send email
        $emailService = \Config\Services::email();
        $emailService->setTo('harishrolls@gmail.com'); // support email
        $emailService->setFrom('support@tharitourtravel.com', 'Thari Tour & Travel'); // must match SMTP
        $emailService->setSubject('New Enquiry from Website');
        $emailService->setMessage($body);
        $emailService->setMailType('html'); // important for HTML email

        if (!$emailService->send()) {
            // Log if email fails
            log_message('error', 'Enquiry email failed: ' . $emailService->printDebugger(['headers', 'subject', 'body']));
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Enquiry sent successfully!');
    }



    
     public function contact()
    {
        return view('contact');
    }

    public function spiti()
    {
        $data['tourDetails'] = $this->tourPackageModel->where('status', 1)->findAll();
        return view('spiti', $data);
    }

    public function vehicle()
    {
        return view('vehicle');
    }

     public function saveVehicle()
    {
        
        $vehicleModel = new VehicleModel();

        // Collect data from POST request
        $data = [
            'full_name'      => $this->request->getPost('full_name'),
            'mobileNumber'   => $this->request->getPost('mobileNumber'),
            'email'          => $this->request->getPost('email'),
            'adults'         => $this->request->getPost('adults'),
            'children'       => $this->request->getPost('children'),
            'vehicleType'    => $this->request->getPost('vehicleType'),
            'duration'       => $this->request->getPost('duration'),
            'durationValue'  => $this->request->getPost('durationValue'),
            'with_driver'    => $this->request->getPost('with_driver'),
            'pickupLocation' => $this->request->getPost('pickupLocation'),
            'pickupDate'     => $this->request->getPost('pickupDate'),
            'created_on'     => date('Y-m-d H:i:s'),
        ];

        // Insert data into database
        $vehicleModel->insert($data);

        // Redirect or show success message
        return redirect()->to('/vehicle')->with('success', 'Vehicle booked successfully!');
    }

    public function about()
    {
        return view('about');
    }

    // Gallery-related method
    public function gallery()
    {
        // $data['categories'] = $this->CategoryModel->findAll();
        $data['categories'] = ['himachal', 'sikkim', 'cultural', 'urban'];
        $data['images'] = [];

        foreach ($data['categories'] as $category) {
            $data['images'][$category] = $this->imageModel->getImages($category);
        }

        $data['title'] = 'Our Gallery - Thari Tour Travel';
        return view('gallery', $data);
    }


    public function saveContact()
    {
        $contactModel = new \App\Models\ContactModel();

        // Get POST data
        $fullname = $this->request->getPost('fullname');
        $email    = $this->request->getPost('email');
        $phone    = $this->request->getPost('phone');
        $subject  = $this->request->getPost('subject');
        $message  = $this->request->getPost('message');

        // Simple validation
        if (!$fullname || !$email || !$phone || !$subject || !$message) {
            return redirect()->back()->with('error', 'Please fill all fields!')->withInput();
        }

        // Prepare data
        $data = [
            'fullname'   => $fullname,
            'email'      => $email,
            'phone'      => $phone,
            'subject'    => $subject,
            'message'    => $message,
            'created_on' => date('Y-m-d H:i:s'),
        ];

        // Insert into database
        $insertedId = $contactModel->insert($data);

        if (!$insertedId) {
            return redirect()->back()->with('error', 'Failed to send message. Please try again.')->withInput();
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
