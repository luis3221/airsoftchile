<?php

namespace App\Http\Requests;

use App\Models\Tienda;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TiendaRequest extends FormRequest
{
    /**
     * Cualquier operador autenticado (o visitante, en este proyecto de práctica)
     * puede crear o editar una tienda del directorio.
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
            'region' => ['required', Rule::in(Tienda::regiones())],
            'categoria' => ['required', Rule::in(Tienda::categorias())],
            'direccion' => ['nullable', 'string', 'max:150'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'imagen' => ['nullable', 'url', 'max:500'],
            'descripcion' => ['nullable', 'string', 'max:1000'],
            'calificacion' => ['nullable', 'numeric', 'min:0', 'max:5'],
            'envios_nacionales' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Mensajes de error en español para una mejor experiencia del usuario.
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre de la tienda es obligatorio.',
            'region.required' => 'Selecciona una región.',
            'region.in' => 'La región seleccionada no es válida.',
            'categoria.required' => 'Selecciona una categoría.',
            'categoria.in' => 'La categoría seleccionada no es válida.',
            'imagen.url' => 'La imagen debe ser una URL válida.',
        ];
    }
}
