<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateDestinationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
            'parent_destination' => $this->getParentDestinationId(),
        ]);
    }

    /**
     * Get the parent destination ID based on the type of the destination.
     *
     * @return int|null
     */
    protected function getParentDestinationId(): ?int
    {
        if ($this->type === 'city') {
            return $this->state;
        } elseif ($this->type === 'state') {
            return $this->country;
        }

        return null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd($this->all());
        return [
            'name' => 'sometimes|required|string',
            'slug' => 'sometimes|required|string|unique:destinations,slug,' . $this->route('destination')->id,
            'type' => 'required|in:country,state,city',
            'description' => 'nullable|string',
            'excerpt' => 'nullable|string',
            'country' => 'nullable|required_if:type,state|exists:destinations,id',
            'state' => 'nullable|required_if:type,city|exists:destinations,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
