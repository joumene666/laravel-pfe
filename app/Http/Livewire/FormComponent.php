<?php

namespace App\Http\Livewire;

use App\Models\delegation;
use App\Models\gouvernerat;
use App\Models\secteur;
use App\Models\Structer;
use Livewire\Component;

class FormComponent extends Component
{

    public $gouvernerats = [];
    public $delegations = [];
    public $secteurs = [];
    public $code = "";
    public $date_creation = "";
    public $matricule_fiscale = "";
    public $num_compte_bancaire = "";
    public $changedGouv = "";
    public $type_structure = "";
    public $secteur_id = "";
    public $jort_creation = "";


    public function changedGouv($id){


        $this->code = gouvernerat::where('id', $id)->firstOrFail()->code;

        $this->delegations = delegation::where('gouvernerat_id', $id)->get();

    }
    public function changedDel($id){
        $c = delegation::where('id', $id)->firstOrFail()->code;
        $this->code = "$this->code" . "$c";
        $this->secteurs = secteur::where('delegation_id', $id)->get();

    }

    public function changedSec($id){
        $c = secteur::where('id', $id)->firstOrFail()->code;
        $this->code = "$this->code" . "$c";

    }
    public function addStructer(){
        
        $structer = Structer::create([
            'date_creation' => $this->date_creation,
            'matricule_fiscale' => $this->matricule_fiscale,
            'code_structer' => $this->code,
            'num_compte_bancaire' => $this->num_compte_bancaire,
            'type_structure' => $this->type_structure,
            'secteur_id' => $this->secteur_id,
            'jort_creation' => $this->jort_creation
        ]);

        if ($structer){
            return back()->with('success', 'Structure ajoutée avec succées');
        }else{
            return back()->with('error', 'Il y aune erreur sil vous plais essayer plus tard');
        }
    }


    public function render()
    {
        $this->gouvernerats = gouvernerat::all();
        return view('livewire.form-component');
    }
}
