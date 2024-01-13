<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required'],
            'first_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email:filter,dns'],
            'tell_1' => ['required', 'digits_between:1,5', 'numeric'],
            'tell_2' => ['required', 'digits_between:1,5', 'numeric'],
            'tell_3' => ['required', 'digits_between:1,5', 'numeric'],
            'address' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return[
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tell_1.required' => '電話番号を入力してください',
            'tell_1.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tell_1.numeric' => '電話番号は5桁までの数字で入力してください',
            'tell_2.required' => '電話番号を入力してください',
            'tell_2.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tell_2.numeric' => '電話番号は5桁までの数字で入力してください',
            'tell_3.required' => '電話番号を入力してください',
            'tell_3.digits_between' => '電話番号は5桁までの数字で入力してください',
            'tell_3.numeric' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}