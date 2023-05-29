<?php

namespace App\Http\Livewire\Test;

use App\Models\Form as ModelsForm;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;
    public $document;
    public function rules()
    {
        return [
            'document' => 'required|mimetypes:application/pdf',
        ];
    }
    public function render()
    {
        return view('livewire.test.form');
    }
    public function save()
    {
        $this->validate();
        ModelsForm::create([
            'document' => $this->document->store('documentos', 'public'),
        ]);
    }
}
