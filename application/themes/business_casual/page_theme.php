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
}
