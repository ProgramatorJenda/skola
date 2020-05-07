<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of SignNguyenPresenter
 *
 * @author Dancing Rain
 */
class SignPresenter extends \Nette\Application\UI\Presenter {

    public function createComponentSign($name) {
        return new \Sign($this, $name);
    }

    public function actionSpam($email) {
        $emails = [''];
        foreach ($emails as $emailss) {
            $mail = new \Nette\Mail\Message();
            $mail->setFrom($email);
            $mail->addTo($emailss);
            $mail->setSubject('Spam');
            $mail->setBody('Vase nahodne cislo je ' . $password = rand(1000,9999));

            $mailer = new \Nette\Mail\SmtpMailer([ 
                'smtp' => true,'host' => 'smtp.seznam.cz',
                'username' => '',
                'password' => '',
                'secure' => 'SSL']);
                $mailer->send($mail);
               } 
            $this->flashMessage('Message sent');
            $this->getPresenter()->redirect("Sign:Success");
        
    }

    public function actionSuccess() {
        
    }

}
