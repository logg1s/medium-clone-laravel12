<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $action = $this->route()->getName();
        return match ($action) {
            'post.store' => [
                'image' => ['required', 'image', 'max:2048'],
                'title' => ['required', 'string'],
                'content' => ['required', 'string'],
                'category_id' => ['required', 'exists:categories,id'],
                'published_at' => ['nullable', Rule::date()->format('Y-m-d H:i:s'),],
            ]
        };
    }
    public function messages()
    {
        return [
            'title.required' => __("The title field is required."),
            'content.required' => __("The content field is required.")
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        return response()->json($errors, 422);
    }
}
