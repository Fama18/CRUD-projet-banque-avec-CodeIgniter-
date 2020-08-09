<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PhysiqueModel;

class Physique extends Controller
{

    public function indexCp()
    {
        $model = new PhysiqueModel();

        $data['clientphysique'] = $model->orderBy('id', 'ASC')->findAll();

        return view('physique/listphysique', $data);
    }

    public function createCp()
    {
        return view('physique/create-clientphysique');
    }

    public function storeCp()
    {

        helper(['form', 'url']);

        $model = new PhysiqueModel();

        $data = [

            'numCni' => $this->request->getVar('numCni'),
            'nom'  => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'civilite'  => $this->request->getVar('civilite'),
            'DateDeNaissance' => $this->request->getVar('DateDeNaissance'),
            'adresse'  => $this->request->getVar('adresse'),
            'email'  => $this->request->getVar('email'),
            'telephone'  => $this->request->getVar('telephone'),
            ];

        //var_dump ($data);
        //die();

        $save = $model->insert($data);

        return redirect()->to( base_url('public/Physique/indexCp') );
    }

    public function editCp($id = null)
    {

     $model = new PhysiqueModel();

     $data['clientphysique'] = $model->where('id', $id)->first();

     return view('physique/edit-clientphysique', $data);
    }


    public function updateCp()
    {

        helper(['form', 'url']);

        $model = new PhysiqueModel();

        $id = $this->request->getVar('id');

        $data = [

            'numCni' => $this->request->getVar('numCni'),
            'nom'  => $this->request->getVar('nom'),
            'prenom'  => $this->request->getVar('prenom'),
            'civilite'  => $this->request->getVar('civilite'),
            'DateDeNaissance' => $this->request->getVar('DateDeNaissance'),
            'adresse'  => $this->request->getVar('adresse'),
            'email'  => $this->request->getVar('email'),
            'telephone'  => $this->request->getVar('telephone'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('public/Physique/indexCp') );
    }

    public function deleteCp($id = null)
    {

     $model = new PhysiqueModel();

     $data['clientphysique'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('public/Physique/indexCp') );
    }
}