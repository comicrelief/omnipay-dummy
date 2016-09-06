<?php
namespace Omnipay\Dummy\Message;

class CompletePurchaseRequest extends AuthorizeRequest
{
    public function getData()
    {
        return [
            'success' => true,
            'reference' => 'dummy-reference',
            'message' => 'dummy message'
        ];
    }

    public function sendData($data)
    {
        return $this->response = new Response($this, $data);
    }
}
