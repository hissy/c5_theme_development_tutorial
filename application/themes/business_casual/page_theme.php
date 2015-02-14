<?php
namespace Application\Theme\BusinessCasual;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{
    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function registerAssets() {
        $this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('css', 'bootstrap/*');
        $this->requireAsset('javascript', 'jquery');
    }

    public function getThemeBlockClasses()
    {
        return array(
            'content' => array('text-center')
        );
    }
    
    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Brand Name'), 'menuClass' => 'brand-name', 'spanClass' => 'brand-name'),
            array('title' => t('Intro Text'), 'menuClass' => 'intro-text', 'spanClass' => 'intro-text')
        );
    }
}
