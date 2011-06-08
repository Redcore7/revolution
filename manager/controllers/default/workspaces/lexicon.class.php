<?php
/**
 * Loads lexicon management
 *
 * @package modx
 * @subpackage manager.workspaces
 */
class WorkspacesLexiconManagerController extends modManagerController {
    /**
     * Check for any permissions or requirements to load page
     * @return bool
     */
    public function checkPermissions() {
        return $this->modx->hasPermission('lexicons');
    }

    /**
     * Register custom CSS/JS for the page
     * @return void
     */
    public function loadCustomCssJs() {
        $mgrUrl = $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
        $this->modx->regClientStartupScript($mgrUrl.'assets/modext/widgets/core/modx.grid.local.property.js');
        $this->modx->regClientStartupScript($mgrUrl.'assets/modext/workspace/lexicon/combos.js');
        $this->modx->regClientStartupScript($mgrUrl.'assets/modext/workspace/lexicon/lexicon.grid.js');
        $this->modx->regClientStartupScript($mgrUrl.'assets/modext/workspace/lexicon/lexicon.panel.js');
        $this->modx->regClientStartupScript($mgrUrl.'assets/modext/workspace/lexicon/index.js');
    }

    /**
     * Custom logic code here for setting placeholders, etc
     * @param array $scriptProperties
     * @return mixed
     */
    public function process(array $scriptProperties = array()) {}

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('lexicon_management');
    }

    /**
     * Return the location of the template file
     * @return string
     */
    public function getTemplateFile() {
        return 'workspaces/lexicon/index.tpl';
    }

    /**
     * Specify the language topics to load
     * @return array
     */
    public function getLanguageTopics() {
        return array('package_builder','lexicon','namespace');
    }
}