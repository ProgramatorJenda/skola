<?php



namespace App\Presenters;

/**
 * Presenter k práci
 *
 * @author Honza
 */
class KnihovnaPresenter extends \Nette\Application\UI\Presenter{
    
    public function createComponentKnihovna($name) {
        return new \Knihovna($this, $name);
    }
    
    public function actionSuccess($name) {
            $odeslat = $this ->getRequest();
  
            $this->template->odeslat = $odeslat->post;

    }
}
