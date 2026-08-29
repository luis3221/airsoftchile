<?php

namespace App\Http\Requests;

use App\Models\Evento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventoRequest extends FormRequest
{
    /**
     * Cualquier operador autenticado (o visitante, en este proyecto de práctica)
     * puede crear o editar un evento del calendario.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación compartidas entre "crear" y "editar",
     * gracias a que ambos formularios reutilizan este mismo Request.
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:100'],
            'region' => ['required', Rule::in(Evento::regiones())],
            'categoria' => ['required', Rule::in(Evento::categorias())],
            'lugar' => ['nullable', 'string', 'max:150'],
            'fecha' => ['required', 'date'],
            'hora' => ['nullable', 'date_format:H:i'],
            'tarifa' => ['nullable', 'integer', 'min:0'],
            'cupos' => ['nullable', 'integer', 'min:1'],
            'imagen' => ['nullable', 'url', 'max:500'],
            'descripcion' => ['nullable', 'string', 'max:1000'],
            'inscripcion_abierta' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Mensajes de error en español para una mejor experiencia del usuario.
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del evento es obligatorio.',
            'region.required' => 'Selecciona una región.',
            'region.in' => 'La región seleccionada no es válida.',
            'categoria.required' => 'Selecciona un tipo de juego.',
            'categoria.in' => 'El tipo de juego seleccionado no es válido.',
            'fecha.required' => 'La fecha del evento es obligatoria.',
            'fecha.date' => 'Ingresa una fecha válida.',
            'hora.date_format' => 'Ingresa una hora válida (HH:MM).',
            'imagen.url' => 'La imagen debe ser una URL válida.',
        ];
    }
}
