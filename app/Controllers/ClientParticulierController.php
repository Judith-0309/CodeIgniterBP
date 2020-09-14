<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\ClientParticulierModel;

class ClientParticulierController extends Controller
{

    public function index()
    {
        $model = new ClientParticulierModel();

        $data['clientparticulier'] = $model->orderBy('id', 'DESC')->findAll();

        return view('clientparticulier', $data);
    }

    public function create()
    {

        return view('create-clientparticulier');
    }

    public function store()
    {

        /*helper(['form', 'url']);
         
        $model = new ClientParticulierModel();
 
        $data = [
 
            'nom' => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'telephone'  => $this->request->getVar('telephone'),
            'genre'  => $this->request->getVar('genre'),
            'email'  => $this->request->getVar('email'),
            'adresse'  => $this->request->getVar('adresse'),
            'profession'  => $this->request->getVar('profession'),
            'salarie'  => $this->request->getVar('salarie'),
            'salarie_actuel'  => $this->request->getVar('salarie_actuel'),
            'nom_employeur'  => $this->request->getVar('nom_employeur'),
            'cni'  => $this->request->getVar('cni'),
            ];
 
        $save = $model->insert($data);*/

        if (isset($_POST['envoyer'])) {
            $model = new ClientParticulierModel();

            $data = [

                'nom' => $this->request->getVar('nom'),
                'prenom'  => $this->request->getVar('prenom'),
                'telephone'  => $this->request->getVar('telephone'),
                'genre'  => $this->request->getVar('genre'),
                'email'  => $this->request->getVar('email'),
                'adresse'  => $this->request->getVar('adresse'),
                'profession'  => $this->request->getVar('profession'),
                'salarie'  => $this->request->getVar('salarie'),
                'salarie_actuel'  => $this->request->getVar('salarie_actuel'),
                'nom_employeur'  => $this->request->getVar('nom_employeur'),
                'cni'  => $this->request->getVar('cni'),
            ];

            $save = $model->insert($data);
            var_dump($save);
            die;
        }

        return view("clientParticulier/store");
    }

    public function edit($id = null)
    {

        $model = new ClientParticulierModel();

        $data['clientparticulier'] = $model->where('id', $id)->first();

        return view('public/index.php/edit-clientparticulier', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new ClientParticulierModel();

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

        $model = new ClientParticulierModel();

        $data['clientparticulier'] = $model->where('id', $id)->delete();

        return redirect()->to(base_url('public/index.php/clientparticulier'));
    }
}
