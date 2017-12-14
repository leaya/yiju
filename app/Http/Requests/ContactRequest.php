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
            "template-contactform-name" => "required|max:30",
            "template-contactform-city" => "required|max:30",
            "template-contactform-edu" => "required|max:50",
            "template-contactform-study" => "required|max:50",
            "template-contactform-phone" => "required|max:30",
            "template-contactform-qqweixin" => "required|max:50",
            "template-contactform-ielts" => "max:50",
            "template-contactform-email" => "required|email|max:30",
            "template-contactform-service" => "max:50",
            "template-contactform-message" => "required|min:10",
            "captcha" => "required|captcha",
        ];
    }

    public function messages()
    {
        return [
            "template-contactform-name.required" => "称呼字段必须填写",
            "template-contactform-city.required" => "城市字段必须填写",
            "template-contactform-edu.required" => "学历字段必须填写",
            "template-contactform-study.required" => "专业字段必须填写",
            "template-contactform-phone.required" => "联系电话字段必须填写",
            "template-contactform-qqweixin.required" => "QQ/微信号 字段必须填写",
            "template-contactform-email.required" => "邮箱字段必须填写",
            "template-contactform-message.required" => "评估 / 咨询内容 字段必须填写",
            "template-contactform-name.max" => "称呼字段最长30个字符",
            "template-contactform-city.max" => "城市字段最长30个字符",
            "template-contactform-edu.max" => "学历字段最长50个字符",
            "template-contactform-study.max" => "专业字段最长50个字符",
            "template-contactform-phone.max" => "联系电话字段输入过长",
            "template-contactform-qqweixin.max" => "QQ/微信号 字段输入过长",
            "template-contactform-ielts.max" => "雅思成绩字段输入过长",
            "template-contactform-email.email" => "邮箱字段不合法",
            "template-contactform-email.max" => "邮箱字段输入过长",
            "template-contactform-service.max" => "移民国家字段输入过长",
            "template-contactform-message.min" => "评估 / 咨询内容 字段至少10个字符以上",
            "captcha.required" => "验证码不能为空",
            "captcha.captcha" => "请输入正确的验证码",
        ];
    }
}
