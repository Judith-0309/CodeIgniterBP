<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\CompteModel;

class CompteController extends Controller
{

    public function index()
    {
        $model = new CompteModel();

        $data['compte'] = $model->orderBy('id', 'DESC')->findAll();

        return view('compte', $data);
    }

    public function create()
    {

        return view('create-compte');
    }

    public function store()
    {

        

        if (isset($_POST['envoyer'])) {
            $model = new CompteModel();

            $data = [
                
                'typeCompte' => $this->request->getVar('typeCompte'),
                'NumeroCompte'  => $this->request->getVar('NumeroCompte'),
                'CleRib'  => $this->request->getVar('CleRib'),
                'EtatCompte'  => $this->request->getVar('EtatCompte'),
                'DepotInitial'  => $this->request->getVar('DepotInitial'),
                'DateOuverture'  => $this->request->getVar('DateOuverture'),
                
            ];

            $save = $model->insert($data);
            var_dump($save);
           // die;
        }

        return view("compte/store");
    }

    public function edit($id = null)
    {

        $model = new CompteModel();

        $data['compte'] = $model->where('id', $id)->first();

        return view('public/index.php/edit-compte', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new CompteModel();

        $id = $this->request->getVar('id');

        $data = [

            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];

        $save = $model->update($id, $data);

        return redirect()->to(base_url('public/index.php/users'));
    }

    public function delete($id = null)
    {

        $model = new CompteModel();

        $data['compte'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('public/index.php/compte'));
    }
}
