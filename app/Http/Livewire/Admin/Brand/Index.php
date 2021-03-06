<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $name, $slug, $status,$brand_id;

public function rules()
{
    return[
'name' => 'required|string',
'slug'=> 'required|string',
'status'=> 'nullable'
    ];
}
// On reset la modale pour la créa des marques
public function resetInput()
{
    $this->name=NULL;
    $this->slug=NULL;
    $this->status=NULL;
    $this->brand_id=NULL;
}


    public function storeBrand()
    {
$validatedData = $this->validate();
Brand::create([
    'name'=> $this->name,
    'slug'=> Str::slug($this->slug),
    'status'=> $this->status== true ? '1':'0',
]);
session()->flash('message','Marque ajouté avec succès !');
$this->dispatchBrowserEvent('close-modal');
$this->resetInput();
    }


    public function closeModal()
        {
 $this->resetInput();
        }
    
        public function openModal()
        {
 $this->resetInput();
        }

    // Update des marques
public function editBrand(int $brand_id)
{
    $this->brand_id=$brand_id;
    $brand=Brand::findOrFail($brand_id);
    $this->name=$brand->name;
    $this->slug=$brand->slug;
    $this->status=$brand->status;

}

public function updateBrand()
{
    $validatedData = $this->validate();
Brand::findOrFail($this->brand_id)->update([
    'name'=> $this->name,
    'slug'=> Str::slug($this->slug),
    'status'=> $this->status== true ? '1':'0',
]);
session()->flash('message','Marque modifié avec succès !');
$this->dispatchBrowserEvent('close-modal');
$this->resetInput();
}
    // Suppression des marques
    public function deleteBrand($brand_id)
    {
        $this->brand_id=$brand_id;
    }

    public function destroyBrand()
    {
        Brand::findOrFail($this->brand_id)->delete();
        session()->flash('message','Marque supprimé avec succès !');
$this->dispatchBrowserEvent('close-modal');
$this->resetInput();
    }

    

    public function render()
    {
        $brands=Brand::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.brand.index',['brands'=>$brands])
        ->extends('layouts.admin')
        ->section('content');
    }
}
