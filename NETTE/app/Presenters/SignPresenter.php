<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of SignPresenter
 *
 * @author Honza
 */
class SignPresenter extends \Nette\Application\UI\Presenter{
        
  public function createComponentSign($name) {
        return new \Sign($this, $name);
    }   
 public function nejakySpamAkce() {   
        $adresy = array('hnz.such@seznam.cz');


// cyklus foreeach

foreach ($adresy as $email) {

// tento objekt nette vytvori email zpravu
    $mail = new Message();
    $mail->setFrom('hnz.such@seznam.cz')
        ->addTo($email)
        ->setSubject('Spam') // tady bude v textu i jednoduche heslo pomoci funkce rand(5, 15);
        ->setBody('tohle je spam s random cislem' . $cislo = rand(5, 15));

// tento objekt se umi napojit na smtp a odeslat email
// az to budete odevzdavat na github, bez techto udaju, pouze prazdne uvozovky
    $mailer = new SmtpMailer([
        'host' => 'smtp.seznam.cz',
        'username' => 'KShadee@seznam.cz',
        'password' => 'murloc010',
        'secure' => 'ssl',
    ]);

// tento prikaz to odesle
    $mailer->send($mail);

}

$this->flashMessage("zprava byla odeslana");

// presmerovani zpet na formular
$this->getPresenter()->redirect("Sign:Success");
    
    
}
}