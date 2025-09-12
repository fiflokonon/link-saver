<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Payplus\Pay\PayPlus;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendPaiement()
    {

        $co = (new PayPlus())->init();

        $co->addItem("Jean Gucci", 3, 150, 450, "Jean bleu, de marque Gucci");
        $co->addItem("Jean Prada", 2, 100, 200, "Jean noir, de marque Prada");
        $total_amount=100; // for test
        $co->setTotalAmount($total_amount);
        $co->setDescription("Achat de deux articles sur le site Jeans Missebo");
        $co->setCustomerFirstName("My first name"); // This is not required. It is optional
        $co->setCustomerLastName("My last name"); // This is not required. It is optional
        $co->setCustomerEmail("test@gmail.com"); // This is not required. It is optional

        $co->addCustomData('first_key',"first_value");

        // démarrage du processus de paiement
        // envoi de la requete
        if($co->create()) {

            // Requête acceptée, alors on redirige le client vers la page de validation de paiement
            return redirect()->to($co->getInvoiceUrl());
        }else{
            // Requête refusée, alors on affiche le motif du rejet
            return [
                "success" => false,
                "message" => "$co->response_text"
            ];
        }
    }

}
