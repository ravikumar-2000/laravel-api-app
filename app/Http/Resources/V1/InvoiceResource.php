<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'cutomer_id' => $this->customer_id,
            'id' => $this->id,
            'status' => $this->status,
            'amount' => $this->amount,
            'billedDate' => $this->billed_date,
            'paidDate' => $this->paid_date,

        ];
    }
}
