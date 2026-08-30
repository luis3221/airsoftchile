<?php

namespace App\Http\Requests;

use App\Models\Cancha;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CanchaRequest extends FormRequest
{
    /**
     * Cualquier operador autenticado (o visitante, en este proyecto de práctica)
     * puede crear o editar una cancha del directorio.
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
            'region' => ['required', Rule::in(Cancha::regiones())],
            'categoria' => ['required', Rule::in(Cancha::categorias())],
            'direccion' => ['nullable', 'string', 'max:150'],
            'lat' => ['nullable', 'numeric', 'between:-90,90'],
            'lng' => ['nullable', 'numeric', 'between:-180,180'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'sitio_web' => ['nullable', 'url', 'max:500'],
            'imagen' => ['nullable', 'url', 'max:500'],
            'descripcion' => ['nullable', 'string', 'max:1000'],
            'calificacion' => ['nullable', 'numeric', 'min:0', 'max:5'],
            'estacionamiento' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Mensajes de error en español para una mejor experiencia del usuario.
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre de la cancha es obligatorio.',
            'region.required' => 'Selecciona una región.',
            'region.in' => 'La región seleccionada no es válida.',
            'categoria.required' => 'Selecciona una categoría.',
            'categoria.in' => 'La categoría seleccionada no es válida.',
            'imagen.url' => 'La imagen debe ser una URL válida.',
            'sitio_web.url' => 'El link debe ser una URL válida (ej: https://ejemplo.cl).',
        ];
    }
}
