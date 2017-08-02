<?php

class ydtestimonials extends Module
{
    public function __construct()
    {
        $this->name = 'ydtestimonials';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Yohann Doré';
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Témoignages');
        $this->description = $this->l('Module pour laisser un témoignage commenté');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        if (!parent::install()
            || !$this->addAdminTab()
        ) {
            return false;
        }
        return true;
    }
    public function uninstall()
    {
        if (!parent::uninstall()
            || !$this->removeAdminTab()
        ) {
            return false;
        }

        return true;
    }

    public function addAdminTab()
    {
        $tab = new Tab();
        foreach(Language::getLanguages(false) as $lang)
            $tab->name[(int) $lang['id_lang']] = 'Témoignage';
        $tab->class_name = 'AdminTestimonials';
        $tab->module = $this->name;
        $tab->id_parent = 0;
        if (!$tab->save())
            return false;
        return true;
    }

    public function removeAdminTab()
    {
        $classNames = array('admin_blog' => 'AdminTestimonials');
        $return = true;
        foreach ($classNames as $key => $className) {
            $tab = new Tab(Tab::getIdFromClassName($className));
            $return &= $tab->delete();
        }
        return $return;
    }
}
