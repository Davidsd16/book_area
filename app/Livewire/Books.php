<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;

class Books extends Component
{

    public $books;

    public function render()
    {
        $this->books = Book::all();
       // var_dump($this->books);
       // die();
        return view('livewire.books');
    }
}
