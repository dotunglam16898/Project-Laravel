 <?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
           'name' => 'required|min:6|max:255',
           'origin_price' => 'required|numeric',
           'sale_price' => 'required|numeric',
           'category_id' =>'required',
           'status' => 'required',
           'content' => 'required',
       ];
   }

   public function messages()
   {
    return [
       'required' => ':attribute khong duoc de trong ',
       'min' =>':attribute khong duoc nho hon :min',
       'max' => ':attribute khong duoc lon hon :max'
   ];
}

public function attributes(){
    return [
        'name' => 'Ten san pham',
        'origin_price' => 'Gia goc',
        'sale_price' => 'Gia ban',
        'content' => 'Noi dung'



    ];
}


}
