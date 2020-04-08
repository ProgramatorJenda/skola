<?php


/**
 * Description of Prihlaska
 *
 * @author Honza
 */
class Prihlaska extends Nette\Application\UI\Form{
   
     public function __construct($parent, $name){
        parent::__construct();
    
    $this->setAction($parent->link("Prihlaska:success"));
        
        $this->setMethod("POST");
        
        $this->addText('jmeno', 'Jmeno Rodiče')
             ->setRequired('jmeno prosim');
        $this->addText('jmeno2', 'Jmeno dítěte')
             ->setRequired(TRUE);
        
        $this->addPassword('heslo', 'Heslo')
             ->setRequired(TRUE)  
             ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musi mit 6 znaku', 6);
        
        $this->addPassword('heslo2', 'Heslo znova')
             ->setRequired(TRUE)
             ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla se neshoduji', $this['heslo']);
        
        $this->addEmail('email','Email')
             ->setRequired(TRUE)
             ->addRule(\Nette\Forms\Form::EMAIL, 'Mas smulu, email je neplatny');
        
     $this->addSelect('ChceteDruzinu', 'Chcete Druzinu', array('Ano', 'Ne'))
             ->setRequired(TRUE);
        
        $this->addRadioList('Vek', 'Vek', array('5 let', '15 let', '19 let'))
             ->setRequired(TRUE);
        
        $this->addRadioList('Jazyk', 'Druhy jazyk', array('Angličtina', 'Ruština', 'Španělština'))
                ->setRequired(TRUE);
       
        
        $this->addText('pocet', 'pocet')
          ->setRequired(TRUE)
          ->addRule(\Nette\Forms\Form::INTEGER, 'Neni cislo!');
        
        $this->addTextArea('zprava', 'zprava');
     
        $this->addSelect('PridatZabavu', 'Pridat zabavu ve Druzine', array('Míčové Hry', 'Keramika', 'Tanečky'))
             ->setRequired(TRUE);
        $this->addUpload('File', 'Predloha');
       
        $this->addSubmit('Odeslat', 'Odeslat');
    
}




}