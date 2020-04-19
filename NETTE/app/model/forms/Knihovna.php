<?php

/**
 * Komponenta knihovny
 *
 * @author Honza
 */
class Knihovna extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link("Knihovna:success"));

        $this->setMethod("POST");

        $this->addText('krestnijmeno', 'Křestní jméno')
                ->setRequired("Křestní jméno prosím");

        $this->addText('prijmeni', 'Příjmení')
                ->setRequired("Prosím vyplňte políčko Příjmení");

        $this->addPassword("heslo", 'Heslo')
                ->setRequired(TRUE)
                ->addRule(Nette\Forms\Form::MIN_LENGTH, "Heslo musí mít minimálně 6 znaků", 6);

        $this->addPassword('heslo2', 'Potvrďte své heslo')
                ->setRequired(TRUE)
                ->addRule(Nette\Forms\Form::EQUAL, "Hesla se neshodují", $this ["heslo"]);
        
        $this->addText('email', 'Váš email')
                ->setRequired(TRUE)
                ->addRule(Nette\Forms\Form::EMAIL, 'Prosím napište váš email');
        
                
        $this->addText('rodnecislo', 'Rodné číslo')
                ->setRequired(TRUE)
                ->addRule(Nette\Forms\Form::INTEGER, 'Prosím vyplntě jenom čísla');
        
        $this->addText('cislokarty', 'Číslo klubové karty')
                ->setRequired(TRUE)
                ->addRule(Nette\Forms\Form::INTEGER, 'Prosím vyplntě jenom čísla');
        
        $this->addText('nazevknihy', 'Název Knihy')
                ->setRequired("Prosím vyplňte Název knihy");
        
        $this->addSelect('preklad', 'Pokud je knížka v cizím jazyce, přejete si najít i přeloženou verzy?', array('Ano', 'Ne'))
                ->setRequired(TRUE);
        
        $this->addCheckboxList('stav', 'Stav knížky', array('Poškozený', 'Mírně poškozená', 'Úplně nová'))
             ->setRequired(TRUE);
        
        $this->addRadioList('dobavydani', 'Doba vydání knížky', array('1950-1980', '1980-2000', '2000-2020'))
                ->setRequired(TRUE);
        
        $this->addUpload('pokudnevimnazev', 'Nemůžete si vzpomenout na název knihy? Nahrajte obrázek knihy')
                ->setRequired(FALSE);

        $this->addText('prodejna', 'Nejbližší prodejna')
                ->setRequired(TRUE);
        
        $this->addTextArea('zprava', 'Dodatečná zpráva pro knihovnu')
                ->setRequired(FALSE);

        $this->addSelect('osobne', 'Chtece si knížku vyzvednout osobně na prodejně', array("Ano", "Ne"))
                ->setRequired(TRUE);
        
        $this->addText('adresa', 'Vaše adresa (Vyplňujte pouze v pokud bude kniha dovezena kurýrem)')
                ->setRequired("Prosím vyplňte vaši adresu")
                ->setRequired(FALSE);
        
        $this->addTextArea('zpravakuryrovi', 'Dodatečná zpráva pro kurýra (Vyplňujte pouze v pokud bude kniha dovezena kurýrem)')
                ->setRequired(FALSE);

        
        $this->addSelect('platba', 'Platba při převzetí (vyplňujte pouze pokud bude kniha dovezena kurýrem)', array('Žádná', 'Platit hotově', 'Platba Kartou'))
                ->setRequired(FALSE);
        
        $this->addRadioList('uctenka', 'Chcete při dovozu účtenku?', array('Ano', 'Ne'))
                ->setRequired(FALSE);
        
        $this->addCheckbox('souhlas', 'Souhlasíte s pravidly vypůjčení knížky')
                ->setRequired(TRUE);
        
        $this->addSubmit('Odeslat', 'Odeslat');
        
    }

}
