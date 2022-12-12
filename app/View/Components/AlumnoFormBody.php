<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlumnoFormBody extends Component
{
    private $alumno;
    /**
     * Create a new component instance.
     *@param \App\Models\Alumno $alumno
     * @return void
     */
    public function __construct($alumno=null)
    {
        if (is_null($alumno)) {
            $alumno= Alumno::make([]);
        }

        $this->alumno=$alumno;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params=[
            'alumno'=>$this->alumno,
        ];
        return view('components.alumno-form-body', $params);
    }
}
