<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
// use Validator;
use Stripe;

class payment extends Controller
{
    public function pay(Request $request){

        $validator = FacadesValidator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            // 'amount' => 'required',
        ]);

        $input = $request->except('_token');

        if ($validator->passes()) {
            $stripe = Stripe::setApiKey(env('STRIPE_SECRET'));

            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year' => $request->get('ccExpiryYear'),
                        'cvc' => $request->get('cvvNumber'),
                    ],
                ]);

                if (!isset($token['id'])) {
                    return redirect()->route('buy');
                }

                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'USD',
                    'amount' => 50,
                    'description' => 'wallet',
                ]);

                if($charge['status'] == 'succeeded') {
                  //  return($charge);
                    return redirect()->route('buy')->with('message','payment done');
                } else {
                    return redirect()->route('addmoney.paymentstripe')->with('error','Money not add in wallet!');
                }
            } catch (Exception $e) {
                return redirect()->route('buy')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                return redirect()->route('buy')->with('error',$e->getMessage());
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                return redirect()->route('buy')->with('error',$e->getMessage());
            }
        }

    }


}
