<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'ttl' => ['date'],
            'jenis_kelamin' => ['string', 'max:20'],
            'agama' => ['string', 'max:10'],
            'kebangsaan' => ['string', 'max:30'],
            'spesialis' => ['string', 'max:30'],
            'alamat' => ['string', 'max:255'],
            'no_hp' => ['string', 'max:20'],
            'image' => ['string', 'max:300'],
        ];
    }
}
