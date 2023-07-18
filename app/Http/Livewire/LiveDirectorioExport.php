<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\empresaExport;
use Livewire\WithPagination;

class LiveDirectorioExport extends Component
{
    use WithPagination;

    public $buscar = '';
    public $porPagina = 15;
    public $campo = 'razon_social';
    public $order = 'asc';
    public $icono = '-circle';
    public $presentacion = 1; //--- grilla=1 y tabla=2
    public $depto = 0; //--- 0=todos y n=depto
    protected $queryString = [
        'buscar' => ['except' => ''],
        'campo' => ['except' => null],
        'order' => ['except' => null],
        'presentacion' => ['except' => null],
        'depto',
    ];

    public function render()
    {
        $emp_export = empresaExport::where('razon_social', 'like', "%{$this->buscar}%");
        if($this->depto > 0 && $this->depto < 10){
            $emp_export = $emp_export->Where('depto_id', '=', $this->depto);
        }

        if($this->campo && $this->order){
            $emp_export = $emp_export->orderBy($this->campo, $this->order);
        }else{
            $this->campo = null;
            $this->order = null;
        }

        $emp_export = $emp_export->paginate($this->porPagina);

        //dd($emp_export);

        return view('livewire.live-directorio-export', [
            'empresas' => $emp_export
        ]);
    }
    //---inicializa las variables cuando se renderiza el componente
    public function mount(){
        $this->icono = $this->iconoDireccion($this->order);
    }
    //---quita todos los filtros aplicados
    public function limpiar(){
        //$this->page = 1;
        $this->order = null;
        $this->campo = null;
        $this->icono = '-circle';
        $this->buscar = '';
        $this->porPagina = 15;
        $this->presentacion = 1;
    }
    //---repagina despues de realizar la busqueda
    public function updatingBuscar()
    {
        $this->resetPage();
    }
    //---ordena el directorio por un campo determinado 
    public function sortable($campo)
    {
        if($campo !== $this->campo){
            $this->order = null;
        }
        switch($this->order){
            case null:
                $this->order = 'asc';
                break;
            case 'asc':
                $this->order = 'desc';
                break;
            case 'desc':
                $this->order = null;
                break;
        }
        $this->icono = $this->iconoDireccion($this->order);
        $this->campo = $campo;
    }
    //---determina el indicador de ordenacion "el icono"
    public function iconoDireccion($sort)
    {
        if(!$sort){
            return '-circle';
        }

        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
    }
}
