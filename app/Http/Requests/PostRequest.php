<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
                'image' => 'nullable|image|max:2048',
                'title' => 'required|string|max:50',
                'content' => 'required|string|max:2000',
                'category_id' => 'required|exists:categories,id'
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
}
