<?php 
/*================================================================================================================
	fichier				: class.navigation.inc.php
	auteur				: Loris Fariello
	date de création	: novembre 2019
	
	role				: decrit la classe permet les navigation des films
  ================================================================================================================*/

/**
 * classe permetant les navigation des films
 * @author Loris Fariello 
 * @version 1.0
 * @copyright Loris Fariello - novembre 2019
 *
 */
    class navigation {
 
        private $module;
        private $page;
        private $action;
        private $section;
        private $nbSection;
        private $nav;
        
        public function __construct($module, $page, $action, $section, $nbSection, $nav){
           $this->setModule($module);
            $this->setPage($page);
           $this->setAction($action);
           $this->setSection($section);
           $this->setNbSection($nbSection);
           $this->setNav($nav);
        }
        
        private function setModule($module){
            $this->module = $module;
        }
        private function setPage($page){
            $this->page = $page;
        }
        private function setAction($action){
            $this->action = $action;
        }
        private function setSection($section){
            $this->section = $section;
        }
        private function setNbSection($nbSection){
            $this->nbSection = $nbSection;
        }
        private function setNav($nav){
            $this->nav = $nav;
        }
        private function getModule() {
            return $this->module;
        }
        private function getPage() {
            return $this->page;
        }
        private function getAction() {
            return $this->action;
        }
        private function getSection() {
            return $this->section;
        }
        private function getNbSection() {
            return $this->nbSection;
        }
        private function getNav() {
            return $this->nav;
        }
        
        
        
        public function getXhtmlBoutons() {
            if ($this->getSection() == 1) {
                return "<img src='./framework/image/btPremInactif.png' alt=''>
                        <img src='./framework/image/btPrecInactif.png' alt=''>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionSuivante . "'><img src='./framework/image/btSuivActif.png' alt=''></a>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionDerniere . "'><img src='./framework/image/btDerActif.png' alt=''></a>";
            }elseif ($this->getSection() == $this->getNbSection()) {
                return "<a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionPremiere . "'><img src='./framework/image/btPremActif.png' alt=''></a>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionPrecedente . "'><img src='./framework/image/btPrecActif.png' alt=''></a>
                        <img src='./framework/image/btSuivInactif.png' alt=''>
                        <img src='./framework/image/btDerInactif.png' alt=''>";
            }else {
                return "<a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionPremiere . "'><img src='./framework/image/btPremActif.png' alt=''></a>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionPrecedente . "'><img src='./framework/image/btPrecActif.png' alt=''></a>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionSuivante . "'><img src='./framework/image/btSuivActif.png' alt=''></a>
                        <a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $this->getNav()->sectionDerniere . "'><img src='./framework/image/btDerActif.png' alt=''></a>";
            }
        } // function
        public function getXhtmlNumeros() {
            $num = "";
            for ($i = 1; $i <= $this->getNbSection(); $i++) {
                $num .= "<a href='index.php?module=" . $this->getModule() . "&page=" . $this->getPage() . "&action=" . $this->getAction() . "&section=" . $i . "'> $i</a>";
            }
            return $num;
        }
    } // class

?>