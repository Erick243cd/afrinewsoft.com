<?php

namespace App\Controllers;

class Contacts extends BaseController
{
    public function index()
    {
        //
    }

    public function contactFromWebsite()
    {
        $agent = $this->request->getUserAgent();
        $data = [
            'links' => headerData("contact", localLang()),
            'page' => $page = 'contact',
            'validation' => null,
            'lang' => localLang(),
            'isMobile' => $agent->isMobile(),
            'services' => $this->serviceModel->asObject()->limit(4)->find()
        ];
        if ($this->request->getMethod() == 'post') {
            $this->validation->setRules([
                'fullname' => [
                    'label' => 'Nom complet',
                    'rules' => 'required',
                    'errors' => ['required' => 'Le champ {field} est requis ']
                ],
                'email_adress' => [
                    'label' => 'Adresse mail',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Le champ {field} est requis',
                        'valid_email' => 'Le champ {field} doit contenir une adresse mail valide'
                    ]
                ],

                'message' => [
                    'label' => 'Message',
                    'rules' => 'required|max_length[800]|min_length[10]',
                    'errors' => [
                        'required' => 'Le champ {field} est requis',
                        'max_length' => 'Le champ {field} doit contenir 500 caractère au plus',
                        'min_length' => 'Le champ {field} doit contenir au moins 10 caractères',
                    ]
                ],
            ]);
            if ($this->validation->withRequest($this->request)->run()) {
                $data = array(
                    'contactName' => htmlentities($this->request->getVar('fullname')),
                    'contactEmail' => htmlentities($this->request->getVar('email_adress')),
                    'contactPhone' => htmlentities($this->request->getVar('phone')),
                    'contactObject' => htmlentities($this->request->getVar('subject')),
                    'contactMessage' => htmlentities($this->request->getVar('message')),
                    'contactDate' => date('Y-d-m')
                );
                $this->contactModel->save($data);

                session()->setFlashdata('success', "Merci {$this->request->getVar('fullname')} de nous contacter , Votre message a été envoyé, nous vous répondrons dans un bref délai.");

                $this->sendMail((object)$data);

                return redirect()->to('/contact');
            } else {
                $data['validation'] = $this->validation->getErrors();
            }
        }
        return view('pages/' . localLang() . '/' . $page, $data);

    }

    function sendMail($data)
    {
        $to = 'client@afrinewsoft.com';
        $contents = "{$data->contactMessage}";
        $this->email->setFrom('contact@afrinewsoft.com', "{$data->contactName}");
        $this->email->setTo($to);

        $this->email->setCC('erickbanze@afrinewsoft.com');
        $this->email->setSubject($data->contactObject ?? "Contact via le site web");
        $this->email->setMessage($contents);

        if ($this->email->send()) {
            echo "succes";
        } else {
            print_r($this->email->printDebugger($this->email->send()));
        }
    }
}
