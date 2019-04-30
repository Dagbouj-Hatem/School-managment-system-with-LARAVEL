<?php

namespace App\DataTables;

use App\Examen;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ExamenDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        // file 
        $dataTable->editColumn('file', function($examen) {
            return '<a href="'. $examen->file.'" class="btn btn-primary">Télécharger l\'examen</a>';
        })->escapeColumns(['action'])->make(true);
        // matiere_id
        $dataTable->editColumn('matiere_id', function($examen) {
            return $examen->matiere->name;
        }); 
        // type_examen_id
        $dataTable->editColumn('type_examen_id', function($examen) {
            return $examen->typeExamen->name;
        });
         // classe_id
        $dataTable->editColumn('classe_id', function($examen) {
            return $examen->classe->name;
        });

        return $dataTable->addColumn('action', 'examens.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Examen $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Examen $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '280px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'buttons' => [
                    //['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    //['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    //['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'name',
            'description',
            'file',
            'matiere_id',
            'type_examen_id',
            'classe_id'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'examensdatatable_' . time();
    }
}
