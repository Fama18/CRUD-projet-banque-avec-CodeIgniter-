<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MoralModel;

class Moral extends Controller
{

    public function index()
    {
        $model = new MoralModel();

        $data['clientmoral'] = $model->orderBy('id', 'ASC')->findAll();

        return view('moral/listmoral', $data);
    }

    public function create()
    {
        return view('moral/create-clientmoral');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new MoralModel();

        $data = [

            'nomEntreprise' => $this->request->getVar('nomEntreprise'),
            'AdresseEntreprise'  => $this->request->getVar('AdresseEntreprise'),
            'RaisonSocial'  => $this->request->getVar('RaisonSocial'),
            'numIdent'  => $this->request->getVar('numIdent'),
            ];

        //var_dump ($data);
        //die();

        $save = $model->insert($data);

        return redirect()->to( base_url('public/Moral/index') );
    }

    public function edit($id = null)
    {

     $model = new MoralModel();

     $data['clientmoral'] = $model->where('id', $id)->first();

     return view('moral/edit-clientmoral', $data);
    }


    public function update()
    {

        helper(['form', 'url']);

        $model = new MoralModel();

        $id = $this->request->getVar('id');

        $data = [

            'nomEntreprise' => $this->request->getVar('nomEntreprise'),
            'AdresseEntreprise'  => $this->request->getVar('AdresseEntreprise'),
            'RaisonSocial'  => $this->request->getVar('RaisonSocial'),
            'numIdent'  => $this->request->getVar('numIdent'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('public/Moral/index') );
    }

    public function delete($id = null)
    {

     $model = new MoralModel();

     $data['clientmoral'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('public/Moral/index') );
    }
}
