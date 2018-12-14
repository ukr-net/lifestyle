<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FormService;
use Validator;

class FormController extends Controller
{
    private $formService;

    public function __construct(FormService $formService) {
        $this->formService = $formService;
    }

    public function contactForm(Request $request) {
        $data = $request->except('_token');

        $validator = Validator::make($data, [
            'name' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'text' => 'string|required'
        ]);

        if ($validator->fails()) {
             return redirect('/contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $this->formService->sendEmail($data);

        return redirect('/contact');
    }
}
