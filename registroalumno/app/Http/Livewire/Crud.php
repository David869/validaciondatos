<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\registros;

class Crud extends Component
{
    public $registross, $codigo, $nombre, $direccion, $telefono, $email, $registros_id;
    public $isOpen = 0;

    public function openModal(){
        $this->isOpen = true;
    }
    public function closeModal(){
        $this->isOpen = false;
    }

    public function render()
    { 
        $this->registross = registros::all();
        return view('livewire.crud');
    }

    public function create(){
        $this->openModal();

    }
        
        public function store(){
            //validar los campos
            $this->validate([
                'codigo'=>'required',
                'nombre'=>'required',
                'direccion'=>'required',
                'telefono'=>'required',
                'email'=>'required'
            ]);
    
            
            //guardar o actualizar
            registros::updateOrCreate(['id'=>$this->registros_id],[
                'codigo'=> $this->codigo,
                'nombre'=> $this->nombre,
                'direccion'=> $this->direccion,
                'telefono'=> $this->telefono,
                'email'=> $this->email
            ]);
    
    
            //creare una variable de sesion para enviar un mensaje
            session()->flash('message', $this->registros_id ? 'Se ha actualizado' : 'Se ha guardado exitosamente!');
    
            $this->closeModal();
    
        }

        public function edit($id){
            $registros = registros::findOrFail($id);
            $this->registros_id= $id;
            $this->codigo= $registros->codigo;
            $this->nombre= $registros->nombre;
            $this->direccion= $registros->direccion;
            $this->telefono= $registros->telefono;
            $this->email= $registros->email;
    
            $this->openModal();//llamamos al metodo que permite cargar el formulario
        }
        public function delete($id){
            registros::find($id)->delete();
            session()->flash('message', 'Registro eliminado');
        }
    


    
}
