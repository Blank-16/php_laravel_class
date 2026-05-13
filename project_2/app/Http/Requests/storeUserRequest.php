<?php

namespace App\Http\Requests;

use App\Rules\checkUpperCase;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class storeUserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'StudentName' => ['required', 'alpha', 'min:3'],
            'email' => ['required', 'email', 'unique'],
            'mobile' => ['required', 'numeric', 'digits:10'],
            'alt_mobile' => ['nullable', 'numeric'],
            'gender' => ['required'],
            'dob' => ['required', 'date'],
            'age' => ['required', 'numeric', 'min:17'],
            'address' => ['required'],
            'pincode' => ['required', 'numeric', 'digits:6'],
            'course' => ['required'],
            'percentage' => ['required', 'numeric', 'between:0,100'],
            'signature' => ['required', 'file', 'mimes:jpeg,png,jpg,pdf'],
            'password' => ['required', 'min:8'],
            'confirm_password' => ['same:password'],
            'terms' => ['required', 'accepted']

        ];
    }

    // public function attributes()
    // {
    //     return [
    //         'email'=>'email address',
    //         'username'=>'First Name',
    //     ];
    // }

    public function messages()
    {
        return [
            'StudentName.required' => 'student name is require',
            'email.email' => 'Please enter a valid email format',
            'mobile.digits' => 'Mobile number must contain 10 digits',
            'alt_mobile.numeric' => 'Alternate mobile number should contains only numbers',
            'gender.required' => 'Please select your gender',
            'dob.date' => 'Please enter valid date of birth',
            'age.min' => 'Student must be at least 17 years old',
            'address.required' => 'Address field cannot be empty',
            'pincode.digits' => 'Pincode must contain 6 digits',
            'course.required' => 'Please select a course',
            'percentage.between' => 'Marks must be between 0 and 100',
            'signature.mimes' => 'Please upload valid signature file',
            'password.min' => 'Password must contain at least 8 characters',
            'confirm_password.same' => 'Passwords do not match',
            'terms.accepted' => 'You must accept terms and conditions',
        ];
    }
}
