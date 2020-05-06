<?php


/**
 * Description of Sign
 *
 * @author Honza
 */
class Sign extends Nette\Application\UI\Form{
    
        public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Sign:Spam'));
        
        $this->setMethod("formSubmitted");

        $this->addEmail('email', 'Email')
                ->setRequired('Je potřeba vyplnit email')
                ->addRule(\Nette\Forms\Form::EMAIL, 'toto není emailová adresa');
        
        $this->addSubmit('odeslat', 'Odeslat');
        
        
    }
}
