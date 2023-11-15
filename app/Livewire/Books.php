<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class Books extends Component
{

    public $books, $title, $author, $description, $price;
    public $modal = false;

    public function render()
    {
        $this->books = Book::all();
        return view('livewire.books');
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }

    public function cerrarModal() {
        $this->modal = false;
    }

    public function limpiarCampos(){
        $this->title = '';
        $this->author = '';
        $this->description = '';
        $this->price = '';
    }
}
