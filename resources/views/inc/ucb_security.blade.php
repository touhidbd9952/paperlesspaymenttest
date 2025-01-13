<?php
    
    define('HMAC_SHA256', 'sha256');
    define('SECRET_KEY', env('UCB_SECRET_KEY'));
    //SECRET_KEY:production value will be different
    //dd(SECRET_KEY);
    function sign($params)
    {
        return signData(buildDataToSign($params), SECRET_KEY);
    }
    
    function signData($data, $secretKey)
    {
        return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
    }
    
    function buildDataToSign($params)
    {
        $signedFieldNames = explode(',', $params['signed_field_names']);
        foreach ($signedFieldNames as $field) {
            $dataToSign[] = $field . '=' . $params[$field];
        }
        return commaSeparate($dataToSign);
    }
    
    function commaSeparate($dataToSign)
    {
        return implode(',', $dataToSign);
    }
    
    ?>