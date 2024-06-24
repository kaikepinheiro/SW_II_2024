<?php
    class Response {
        public static function resposta($status = 200, $message = 'sucess', $data = null) {
            //AQUI VAI O CORPO DA RESPOSTA
            header('Content-Type: application/json');

            if(!API_IS_ACTIVE){
                return json_encode([
                'status' => 400,
                'mensagem' => 'ERRO',
                'api_version' => API_VERSION,
                'time_response' => time(),
                'data_atual' => date('y-a-d H:i:s'),
                'dados' => null
                ]);
            }
            
            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'api_version' => API_VERSION,
                'time_response' => time(),
                'data_atual' => date('y-a-d H:i:s'),
                'dados' => $data
            ]);
        }
    }
?>    