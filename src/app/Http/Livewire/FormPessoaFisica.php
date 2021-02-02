<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormPessoaFisica extends Component {


    // public $nomeCompleto = "ana";
    // public $cpf = "06193833994";
    // public $dataNascimento = "1987-01-01";
    // public $rg = "77498044";
    // public $emissor = "SSP/PR";
    // public $dataEmissao = "1987-01-01";
    // public $genero="";
    // public $nacionalidade="";
    // public $profissao = "Dev";
    // public $nomePai = "Luiz";
    // public $nomeMae = "Maria";

    public $nomeCompleto;
    public $cpf;
    public $dataNascimento;
    public $rg;
    public $emissor;
    public $dataEmissao;
    public $genero="-1";
    public $nacionalidade="";
    public $estadoCivil="";
    public $profissao;
    public $nomePai;
    public $nomeMae;

    protected $rules = [
        "nomeCompleto" => "required|min:5",
        "cpf" => "required|formato_cpf",
        "dataNascimento" => "required",
        "rg" => "required|min:5",
        "emissor" => "required|min:3",
        "dataEmissao" => "required",
        "genero" => "required|not_in:-1",
        "nacionalidade" => "required|not_in:null",
        "profissao" => "required|min:3",
        "nomePai" => "required|min:5",
        "nomeMae" => "required|min:5",
        "estadoCivil" => "required|not_in:null"
    ];

    public function clear() {
        dd('Rola');
        $this->resetInputFields();
    }

    private function resetInputFields() {
        
        $this->nomeCompleto = "";
        $this->cpf = "";
        $this->dataNascimento = "";
        $this->rg = "";
        $this->emissor = "";
        $this->dataEmissao = "";
        $this->genero = "";
        $this->nacionalidade = "";
        $this->profissao = "";
        $this->nomePai = "";
        $this->nomeMae = "";
    }


    public function store() {
        $this->validate();
        
        dd($this->nomeCompleto, 
        $this->cpf,
        $this->dataNascimento,
        $this->rg,
        $this->emissor,
        $this->dataEmissao,
        $this->genero,
        $this->nacionalidade,
        $this->profissao,
        $this->nomePai,
        $this->nomeMae);
    } 

    public function render() {
        return view('livewire.form-pessoa-fisica');
    }
}
