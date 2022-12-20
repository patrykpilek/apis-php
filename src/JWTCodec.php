<?php

class JWTCodec
{
    public function encode(array $payload): string
    {
        $header = json_encode([
            "typ" => "JWT",
            "alg" => "HS256"
        ]);
        $header = $this->base64urlEncode($header);
        
        $payload = json_encode($payload);
        $payload = $this->base64urlEncode($payload);
        
        $signature = hash_hmac("sha256",
                               $header . "." . $payload,
                               "5A7134743777217A25432646294A404E635266556A586E3272357538782F413F",
                               true);
        $signature = $this->base64urlEncode($signature);
        
        return $header . "." . $payload . "." . $signature;
    }
    
    private function base64urlEncode(string $text): string
    {
        return str_replace(
            ["+", "/", "="],
            ["-", "_", ""],
            base64_encode($text)
        );
    }
}









