<?php
namespace App\Controllers;
use App\Models\ReviewModel;

class ReviewController extends BaseController {
   
    public function save() {
        $model = new ReviewModel();
        $model->save([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'rating'  => $this->request->getPost('rating'),
            'comment' => $this->request->getPost('comment'),
        ]);
        return redirect()->to(base_url('/'))->with('success', 'Review submitted!');
    }

    // Display the full list for admin
    public function list() {
        $model = new \App\Models\ReviewModel();
        $data['reviews'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('admin/reviews_list', $data);
    }

    // Update status (Visible/Hidden)
    public function toggleStatus($id) {
        $model = new \App\Models\ReviewModel();
        $review = $model->find($id);
        $newStatus = ($review['view_status'] == 1) ? 0 : 1;
        
        $model->update($id, ['view_status' => $newStatus]);
        return redirect()->back()->with('success', 'Status updated successfully!');
    }

    public function delete_review($id)
    { 
        $model = new \App\Models\ReviewModel();
        if (!$model->find($id)) {
            return redirect()->back()->with('error', 'Review not found!');
        }

        $model->delete($id);

        return redirect()->to('admin/reviews')->with('success', 'Review deleted successfully!');
    }
}