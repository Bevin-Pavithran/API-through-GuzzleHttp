<?php

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GuzzleHttp\Client;




class CurrencyController extends Controller{
    /**
     * @Route("/currency")
     */
    public function ShowAction(Request $request){

        $client = new Client();

        //The API refers to www.ecb.europa.eu and can handle 30 currency
        //For this task I have chosen these 3 currency, other currency can be added

        $currencies = array(
            'USD' => 'USD',
            'EUR' => 'EUR',
            'GBP' => 'GBP',
        );

        //Creating the form, this could be done also in the Twig file
        $form = $this->createFormBuilder()
            ->add('amount', TextType::class, array('required' => false,   'attr' => array('placeholder' => 'Amount to convert','class' => 'form-control')))
            ->add('base_currency', ChoiceType::class, array(
                'choices'  => $currencies, 'attr' => array('class' => 'form-control')
            ))
            ->add('target_currency', ChoiceType::class, array(
                'choices'  => $currencies, 'attr' => array('class' => 'form-control')
            ))
            ->add('save', SubmitType::class, array('label' => 'Convert', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //task will take the Get response
            $task = $form->getData();

            $res = $client->request('GET', 'https://api.fixer.io/latest',
                array(
                    'form_params' => array(
                        'base' => $task['base_currency'],
                        'symbols' => $task['target_currency'],
                    )
                )
                );
            //Getting the response of the API request, we need it to display the error message
            $statusCode =  $res->getStatusCode();

            //passing TRUE will treat the result as array and not Object
            $api_response =json_decode($res->getBody(), TRUE);
            $rates = ($api_response['rates'][$task['target_currency']]);
            $result = $task['amount']*$rates;
            return $this->render('default/result.html.twig', array('request' => $task, 'rate' => $rates, 'result' => $result, 'status' => $statusCode ));

        }else{
            return $this->render('default/exchange.html.twig', array(
                'form' => $form->createView(),
            ));

        }

    }

} 