<?php

/**
 * Part of the Antares package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Antares Core
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */

namespace Antares\Brands\Adapter;

use Antares\Brands\Contracts\StylerAdapter;

class LayoutStyler extends AbstractAdapter implements StylerAdapter
{

    /**
     * creates styles for first text colots
     * 
     * @return String
     */
    protected function brandLeftFirstColors()
    {
        $return = '';
        if (!is_null($value  = array_get($this->colors, 'text.main.first'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= "#table-ma { color:" . $value . "}\n";
            $return .= ".menu-aside li a span, .menu-aside li a i{color:" . $value . "}\n";
            $return .= ".breadcrumbs,.breadcrumbs > li:last-child .ddown__init a, .breadcrumbs .ddown .ddown__content .ddown__arrow:after,.breadcrumbs .ddown .ddown__init.ddown__init--white:after, .ddown .ddown__init.ddown__init--white i {color:" . $value . "}\n";
            $return .= ".search-box:before, .search-box > i {color:" . $value . "}\n";
            $return .= ".item-grp  i {color:" . $value . "}\n";
            $return .= ".btn.btn--brand{color:" . $value . "}\n";
            $return .= "aside.main-sidebar .menu-tooltip .menu-tooltip__header i,aside.main-sidebar .menu-tooltip .menu-tooltip__content{color:" . $value . " !important}\n";
            $return .= ".ddown .ddown__init.ddown__init--white:after, .ddown .ddown__init.ddown__init--white i{color:" . $value . "}\n";
            $return .= ".FM .noty_type_success{color:" . $value . "}\n";
        }
        return $return;
    }

    /**
     * creates styles for second text colots
     * 
     * @return String
     */
    protected function brandLeftSecondColors()
    {
        $return = '';
        if (!is_null($value  = array_get($this->colors, 'text.secondary.first'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= "aside.main-sidebar ul.main-menu > li > a, aside.main-sidebar ul.main-menu > li > a .icon, aside.main-sidebar ul.main-menu > li > a i,aside.main-sidebar ul.main-menu .submenu section header h3{color:" . $value . "}\n";
            $return .= ".app-content.page-login .login-box .input-field .mdl-textfield__input{color:$value !important}\n";
        }
        if (!is_null($value = array_get($this->colors, 'text.background.first'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= ".form-block label:not(.switch) {color:" . $value . "}\n";
            $return .= ".mdl-textfield label:not(.switch) {color:" . $value . "}\n";
        }
        if (!is_null($value = array_get($this->colors, 'text.main.second'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= ".search-box .search-box__search-field,.sandbox-mode-title {color:" . $value . "}\n";
            $return .= ".main-head .search-box .search-box__mdl-textfield .mdl-textfield__label {color:" . $value . "}\n";
            $return .= ".search-box .search-box__search-field{ border-color:" . $value . "}\n";
            $return .= ".tbl-c table tr.is-selected td:last-child i, .tbl-c table tr.is-selected td.dt-actions i,.tbl-c table tr td a,.tbl-c .antares-table tr.is-selected td, .tbl-c .antares-table tr.ui-selected td a, .tbl-c .antares-table tr.ui-selected td, .tbl-c .antares-table tr.ui-selecting td{color:" . $value . "!important}\n";
            $return .= ".mdl-textfield--AR input.mdl-textfield__input{border-bottom-color:" . $value . " !important}\n";
        }

        if (!is_null($value = array_get($this->colors, 'text.secondary.second'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= ".main-menu .is-active .icon, .main-menu .is-active i, .main-menu .is-active .text { color:" . $value . " !important;}\n";
            $return .= "aside.main-sidebar ul.main-menu > li > a:hover, aside.main-sidebar ul.main-menu > li > a:hover .icon, aside.main-sidebar ul.main-menu > li > a:hover i, aside.main-sidebar ul.main-menu > li > a:hover span, aside.main-sidebar ul.main-menu > li > a:hover i{color:" . $value . " !important}\n";
        }
        if (!is_null($value = array_get($this->colors, 'text.background.second'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= "form fieldset legend{color:" . $value . "}\n";
        }

        return $return;
    }

    /**
     * creates styles for main first containers
     * 
     * @return String
     */
    protected function brandFirstColors()
    {
        $return = '@media only screen and (max-width: 1023px) and (min-width: 768px)
                        #app-wrapper aside.main-sidebar ul.main-menu li.main-menu__brand > a .main-sidebar__logo{
                            background-image: url(' . brand_logo('big', asset('/img/logos/logo_default_full.png')) . ') !important;
                        }}';

        if (!is_null($value = array_get($this->colors, 'main.value'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= ".app-content:before{background:$value !important;},.error-container .top-area,.app-content:before{ background-color:" . $value . " !important}\n";
            $return .= ".error-container .top-area .error-message{background:$value !important;},\n";
            $return .= ".zd__header i{color:$value !important;}\n";
            $return .= ".main-menu-html div.more-trigger.is-expanded .more-trigger__inner,.main-menu-html div.more-trigger .more-trigger__inner{background-color:$value !important;}\n";
            $return .= ".grid-stack-item-content .card.card--pagination .tbl-c .pagination--type2 .dataTables_paginate span > .mdl-js-button.current{color:$value !important;}\n";
            $return .= ".mdl-tabs.is-upgraded .mdl-tabs__tab.is-active, .pagination .antares-pagination ul li .active, .pagination .antares-pagination ul li.active span, .pagination .antares-pagination ul li a:hover{color:$value !important;}\n";
            $return .= ".card--pagination .tbl-c .dataTables_wrapper .pagination--type2 .dataTables_paginate > span a.current{color:$value !important;}\n";


            $return .= "@media only screen and (max-width: 1023px) and (min-width: 768px){
                #app-wrapper aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl ul.mobile-ddowns__menu{
                    background-color:$value !important;
                }
            }";
            $return .= "@media only screen and (max-width: 1023px) and (min-width: 768px){
                    #app-wrapper aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl.mobile-ddowns__sgl--open:after{
                        color:$value !important;
                    }
            }";
            $return .= ".mdl-tabs.is-upgraded .mdl-tabs__tab.is-active:after{background:$value !important;}";


            $return .= ".ddown.ddown--brand .ddown__menu li.is-selected .flex-block:after,.zd__header i{ color:" . $value . " !important;}\n";
            $return .= "aside.main-sidebar ul.main-menu .submenu.submenu--system section.section--2col .submenu__content .submenu__content-right .datarow .datarow__right i{ color:" . $value . " !important;}\n";
            $return .= ".flex-block .flex-block__badge { color:" . $value . " !important;}\n";
            $return .= ".switch .switch-checkbox:checked + .switch-container{ background-color:" . $value . " !important;}\n";
            $return .= ".dropzone-form .dz-message .dz-m__content span { color:" . $value . " !important;}\n";
            $return .= ".ddown .ddown__menu > li:hover > a, .ddown .ddown__menu > li:hover > a i { color:" . $value . " !important;}\n";
            $return .= ".breadcrumbs .ddown__menu { border-color:" . $value . " !important;}\n";
            $return .= "i.zmdi-help-outline.help--trigger:hover { color:" . $value . " !important;}\n";
            $return .= ".ddown.ddown--brand .ddown__menu li.is-selected .flex-block .flex-block__title { color:" . $value . " !important;}\n";
            $return .= ".ddown.ddown--brand .ddown__menu li.is-selected .flex-block { color:" . $value . " !important;}\n";
            $return .= ".timeline li a { color:" . $value . " !important;}\n";
            $return .= ".icheckbox_billevo.checked { background-color: " . $value . "!important;}\n";
            $return .= ".tbl-c table tr:not(.is-selected) td:not(.dataTables_empty) a,.ddown.ddown--columns li.col-is-visible a,.ddown.ddown--columns li.col-is-visible a:after,.btn-link.btn--primary { color: " . $value . "!important;}\n";

            $return .= ".timeline li.timeline__entry--ok:before { color:" . $value . " !important;}\n";
            $return .= ".ddown.ddown--brand .ddown__menu li.is-selected .flex-block, .ddown.ddown--brand .ddown__menu li.is-selected .flex-block .flex-block__title { color:" . $value . " !important;}\n";
            $return .= ".mdl-textfield__label:after { background-color:" . $value . " !important;}\n";
            $return .= ".card.card--chart-small .card__header { background-color:" . $value . " !important;}\n";
            $return .= ".card.card--chart-small .card__header-chart { background-color:" . $value . " !important;}\n";
            $return .= ".card.card--primary-light { background-color:" . $value . " !important;}\n";
            $return .= ".form-block .radio-btns [data-type=radio-btn] input:checked+.btn, .btn.btn--primary { background-color:" . $value . " !important;}\n";
            $return .= ".login-box a { color:" . $value . " !important;}\n";

            $return .= ".ddown-multi .ddown-multi__submenu > li.ddown-multi__return { background-color:" . $value . " !important;}\n";
            $return .= ".dataTables_length a.active { color:" . $value . "}\n";
            $return .= ".card-filter .ddown--filter-edit.ddown--open .card-filter__sgl.ddown__init span:after,.select2-container .select2-selection--multiple .select2-selection__rendered li.select2-selection__choice { background-color:" . $value . "}\n";
            $return .= ".pagination .pagination-filter ul li a:hover,.card-filter .ddown--filter-edit.ddown--open .card-filter__sgl.ddown__init { color:" . $value . "!important;}\n";
            $return .= ".icheck-label:hover > .icheckbox_billevo, .icheckbox_billevo.hover { border-color:" . $value . "!important;}\n";
            $return .= ".tbl-c .dataTables_wrapper .pagination--type2 .dataTables_paginate .paginate_button:hover { color:" . $value . "!important;}\n";

            $return .= "aside.main-sidebar ul.main-menu .submenu.submenu--system section.section--2col .submenu__content .submenu__content-right .datarow .datarow__right i { color:" . $value . "!important;}\n";
            $return .= ".grid-col--menu,.menu-aside-container{background:$value !important;}\n";

            $return .= "@media only screen and (max-width: 768px) {
                    #app-wrapper aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl ul.mobile-ddowns__menu {
                        background-color: $value
                    }
                }\n";
            $return .= "@media only screen and (max-width: 768px) {
                    aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl ul.mobile-ddowns__menu li.mobile-ddowns__menu-header {
                        border-bottom: 1px solid $value
                    }
                }\n";


            $return .= ".app-content:before{background:$value !important;}\n";
            $return .= ".app-content__footer .btn--primary{background-color:$value !important;}\n";
            $return .= ".breadcrumbs .ddown__menu{ border-color:$value !important;}\n";

            $return .= "aside.main-sidebar ul.main-menu > li.has-submenu > a:after{border-color: transparent $value transparent transparent !important }\n";
            $return .= "aside.main-sidebar .menu-tooltip{background:$value}";

            $return .= ".tbl-c .antares-table tr.is-selected td, .tbl-c .antares-table tr.ui-selected td, .tbl-c .antares-table tr.ui-selecting td{border-bottom-color:$value}";

            $return .= ".main-menu-html .nav-container.animation-active div.more-trigger:before{background-color:$value}\n";
            $return .= ".acl-node .acl-node__input input:checked + label::before{border-color:$value}";
        }

        if (!is_null($modPri2 = array_get($this->colors, 'main.mod2')) && !is_null($modPri3 = array_get($this->colors, 'main.mod3'))) {
            $modPri1 = array_get($this->colors, 'main.mod2');
            $modPri1 = starts_with($modPri1, '#') ? $modPri1 : '#' . $modPri1;
            $modPri2 = starts_with($modPri2, '#') ? $modPri2 : '#' . $modPri2;
            $modPri3 = starts_with($modPri3, '#') ? $modPri3 : '#' . $modPri3;
            $return  .= ".btn.btn--brand{background:$modPri3 !important;}\n";
            $return  .= ".app-content.page-login{ background-image:linear-gradient(to top, " . $modPri1 . " 0%, " . $modPri3 . " 100%) !important; }";
        }

        if (!is_null($modPri1 = array_get($this->colors, 'main.mod1'))) {
            $modPri1 = starts_with($modPri1, '#') ? $modPri1 : '#' . $modPri1;
            $return  .= ".breadcrumbs > li.is-active { background-color:" . $modPri1 . "!important;}\n";
            $return  .= ".menu-aside li.is-active a{background-color:$modPri1 !important;}\n";
        }

        if (!is_null($modPri3 = array_get($this->colors, 'main.mod3'))) {
            $modPri3 = starts_with($modPri3, '#') ? $modPri3 : '#' . $modPri3;
            $return  .= ".badge,.btn.btn--indigo{background-color:$modPri3 !important;}\n";
            $return  .= ".menu-aside{border-bottom:1px solid $modPri1 !important;}\n";
            $return  .= ".ddown--brand .ddown__init{background-color:$modPri3 !important;}\n";
            $return  .= "body .select2-dropdown ul.select2-results__options li.select2-results__option[aria-selected=true],
                         body .select2-dropdown ul.select2-results__options li.select2-results__option[aria-selected=true]:after,
                         body .select2.select2-container--open .select2-selection__rendered
                         body .select2.select2-container--open .select2-selection__arrow:before,{
                color: $modPri3 !important;
            }";
            $return  .= ".error-container .top-area{ background-color:" . $modPri3 . " !important}\n";
            $return  .= "@media only screen and (max-width: 1023px) and (min-width: 768px){
                    #app-wrapper aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl ul.mobile-ddowns__menu li:hover{
                        background-color:$modPri3
                    }
            }";
            $return  .= "@media only screen and (max-width: 1023px) and (min-width: 768px){
                #app-wrapper aside.main-sidebar .mobile-ddowns .mobile-ddowns__sgl ul.mobile-ddowns__menu li.mobile-ddowns__menu-header{
                    border-bottom-color:$modPri3
                }
            }";
            $return  .= ".menu-mobile-settings + .select2 .select2-selection{
                    background:$modPri3 !important;
            }";

            $return .= "body .pace .pace-progress {
                background: $modPri3 !important;
            }";
            $return .= ".tbl-c .antares-table tr.is-selected td, .tbl-c .antares-table tr.ui-selected td, .tbl-c .antares-table tr.ui-selecting td {
                background: $modPri3 !important;
            }";
            $return .= ".acl-node .acl-node__input input:checked + label::before{"
                    . "background:$modPri3
                        }";
            $return .= ".acl-node.acl-node--open > .acl-node__input > .acl-node__arrow{"
                    . "color:$modPri3
                        }";
            $return .= ".FM.FM--bg .noty_type_success{"
                    . "background-color:$modPri3
                        }";
        }
        return $return;
    }

    /**
     * creates styles for second containers
     * 
     * @return String
     */
    protected function brandSecondColors()
    {
        $return = '';
        if (!is_null($value  = array_get($this->colors, 'secondary.value'))) {
            $value  = starts_with($value, '#') ? $value : '#' . $value;
            $return .= "aside.main-sidebar { background-color:" . $value . " !important}\n";
            $return .= "aside.main-sidebar ul.main-menu .submenu { background-color:" . $value . "}\n";
            $return .= ".main-menu-html div.more-trigger i { color:" . $value . "}\n";
        }
        if (!is_null($modSec1 = array_get($this->colors, 'secondary.mod1'))) {
            $modSec1 = starts_with($modSec1, '#') ? $modSec1 : '#' . $modSec1;
            $return  .= "aside.main-sidebar ul.main-menu > li.more-trigger{border-color:" . $modSec1 . "}\n";
        }

        return $return;
    }

    /**
     * creates style for layout components
     * 
     * @return type
     */
    public function style()
    {

        return '<style data-desc="brand-colors">' .
                $this->brandFirstColors() .
                $this->brandSecondColors() .
                $this->brandLeftFirstColors() .
                $this->brandLeftSecondColors() .
                '</style>';
    }

}
