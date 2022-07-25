<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "guardian_name"=>[
                "required"
            ],

            "father_name"=>[
                "required"
            ],

            "mother_name"=>[
                "required"
            ],

            "father_profession"=>[
                "required"
            ],

            "mother_profession"=>[
                "required"
            ],

            "email"=>[
                "required"
            ],

            "phone"=>[
                "required",
                "max:11",
                "min:11"
            ],
            "address"=>[
                "required"
            ],

            "image"=>[
                'image:jpg, jpeg, png',
                'max:512',
            ],

            "user_name"=>[
                "required",
                "max:10",
                "min:4"
            ],

            "password"=>[
                "required",
                "min:8"
            ],
        ];
    }
}
