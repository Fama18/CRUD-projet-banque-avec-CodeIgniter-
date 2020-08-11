<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CompteModel;
use App\Models\PhysiqueModel;

class Compte extends Controller
{

    public function indexCm()
    {
        $model = new CompteModel();

        $data['compte'] = $model->orderBy('id', 'ASC')->findAll();

        return view('compte/listcompte', $data);
    }

    public function createCm()
    {
        $model = new PhysiqueModel();

        $data['clientphysique'] = $model->orderBy('id', 'ASC')->findAll();

        return view('compte/create-compte', $data);

    }

    public function storeCm()
    {

        helper(['form', 'url']);

        $model = new CompteModel();

        $data = [

            'numagence' => $this->request->getVar('numagence'),
            'numCompte'  => $this->request->getVar('numCompte'),
            'cleRib'  => $this->request->getVar('cleRib'),
            'clientphysique'  => $this->request->getVar('clientphysique'),
            ];

        //var_dump ($data);
        //die();

        $save = $model->insert($data);

        return redirect()->to( base_url('public/Compte/indexCm') );
    }

    public function editCm($id = null)
    {

     $model = new CompteModel();

     $data['compte'] = $model->where('id', $id)->first();

     return view('compte/edit-compte', $data);
    }


    public function updateCm()
    {

        helper(['form', 'url']);

        $model = new CompteModel();

        $id = $this->request->getVar('id');

        $data = [

            'numagence' => $this->request->getVar('numagence'),
            'numCompte'  => $this->request->getVar('numCompte'),
            'cleRib'  => $this->request->getVar('cleRib'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('public/Compte/indexCm') );
    }

    public function deleteCm($id = null)
    {

     $model = new MoralModel();

     $data['compte'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('public/Compte/indexCm') );
    }
}