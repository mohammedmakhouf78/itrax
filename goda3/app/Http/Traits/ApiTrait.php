<?php
namespace App\Http\Traits;

trait ApiTrait
{
    public function apiResponce($code = 200,$message = null,$errors = null,$data = null)
    {
        $array = [
            'status' => $code,
            'message' => $message
        ];

        if(is_null($data) && !is_null($errors))
        {
            $array['errors'] = $errors;
        }
        elseif(is_null($errors) && !is_null($data))
        {
            $array['data'] = $data;
        }
        else
        {
            $array['data'] = $data;
            $array['errors'] = $errors;
        }

        return response()->json($array,200);
    }
}