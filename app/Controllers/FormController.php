<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class FormController extends Controller
{

    public function create() {
        return view('contact_form');
    }
 
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[9]',
            'gender' => 'required',
            'fav_colour' => 'required|min_length[3]'
        ]);

        $formModel = new FormModel();
 
        if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'phone'  => $this->request->getVar('phone'),
                'gender'  => $this->request->getVar('gender'),
                'fav_colour' => $this->request->getVar('fav_colour')
            ]);          
            echo view('submit_success');
            //return $this->response->redirect(site_url('/submit_success'));
        }
    }

}