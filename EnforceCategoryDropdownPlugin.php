<?php

class EnforceCategoryDropdownPlugin extends Gdn_Plugin {
    public function postController_beforeFormInputs_handler($sender) {
        $sender->ShowCategorySelector = true;
    }
}
