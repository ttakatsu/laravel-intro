<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * ユーザーがこの要求を行うことを許可されているかどうかを判断します
     *
     * @return bool
     */
    public function authorize()
    {
        // 常に許可 trueを返す  返り値としてfalseを返すとこのリクエストは認可エラー(403)
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
            'name' => 'required|string|max:50',
            'price'  => 'required|integer',
            'author' => 'nullable|string|max:50',
        ];
    }
}
