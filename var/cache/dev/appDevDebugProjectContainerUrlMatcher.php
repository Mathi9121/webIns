<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/fonts')) {
            if (0 === strpos($pathinfo, '/fonts/FontAwesome')) {
                // _assetic_FontAwesome_otf
                if ('/fonts/FontAwesome.otf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'FontAwesome_otf',  'pos' => NULL,  '_format' => 'otf',  '_route' => '_assetic_FontAwesome_otf',);
                }

                // _assetic_FontAwesome_otf_0
                if ('/fonts/FontAwesome_FontAwesome_1.otf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'FontAwesome_otf',  'pos' => 0,  '_format' => 'otf',  '_route' => '_assetic_FontAwesome_otf_0',);
                }

            }

            if (0 === strpos($pathinfo, '/fonts/fontawesome-webfont')) {
                // _assetic_fontawesome_webfont_eot
                if ('/fonts/fontawesome-webfont.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_fontawesome_webfont_eot',);
                }

                // _assetic_fontawesome_webfont_eot_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.eot' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_fontawesome_webfont_eot_0',);
                }

                // _assetic_fontawesome_webfont_svg
                if ('/fonts/fontawesome-webfont.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_fontawesome_webfont_svg',);
                }

                // _assetic_fontawesome_webfont_svg_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.svg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_fontawesome_webfont_svg_0',);
                }

                // _assetic_fontawesome_webfont_ttf
                if ('/fonts/fontawesome-webfont.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_fontawesome_webfont_ttf',);
                }

                // _assetic_fontawesome_webfont_ttf_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.ttf' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_fontawesome_webfont_ttf_0',);
                }

                // _assetic_fontawesome_webfont_woff
                if ('/fonts/fontawesome-webfont.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfont_woff',);
                }

                // _assetic_fontawesome_webfont_woff_0
                if ('/fonts/fontawesome-webfont_fontawesome-webfont_1.woff' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fontawesome_webfont_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_fontawesome_webfont_woff_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/img')) {
            if (0 === strpos($pathinfo, '/img/coin_rouge')) {
                // _assetic_images
                if ('/img/coin_rouge.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'images',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_images',);
                }

                // _assetic_images_0
                if ('/img/coin_rouge_coin_rouge_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'images',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_images_0',);
                }

            }

            if (0 === strpos($pathinfo, '/img/sort_')) {
                if (0 === strpos($pathinfo, '/img/sort_asc')) {
                    // _assetic_sort_asc
                    if ('/img/sort_asc.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_asc',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_sort_asc',);
                    }

                    // _assetic_sort_asc_0
                    if ('/img/sort_asc_sort_asc_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_asc',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_sort_asc_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/sort_desc')) {
                    // _assetic_sort_desc
                    if ('/img/sort_desc.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_desc',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_sort_desc',);
                    }

                    // _assetic_sort_desc_0
                    if ('/img/sort_desc_sort_desc_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_desc',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_sort_desc_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/sort_asc_disabled')) {
                    // _assetic_sort_asc_disabled
                    if ('/img/sort_asc_disabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_asc_disabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_sort_asc_disabled',);
                    }

                    // _assetic_sort_asc_disabled_0
                    if ('/img/sort_asc_disabled_sort_asc_disabled_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_asc_disabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_sort_asc_disabled_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/sort_desc_disabled')) {
                    // _assetic_sort_desc_disabled
                    if ('/img/sort_desc_disabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_desc_disabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_sort_desc_disabled',);
                    }

                    // _assetic_sort_desc_disabled_0
                    if ('/img/sort_desc_disabled_sort_desc_disabled_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_desc_disabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_sort_desc_disabled_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/sort_both')) {
                    // _assetic_sort_both
                    if ('/img/sort_both.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_both',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_sort_both',);
                    }

                    // _assetic_sort_both_0
                    if ('/img/sort_both_sort_both_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'sort_both',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_sort_both_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/img/back_')) {
                if (0 === strpos($pathinfo, '/img/back_enabled')) {
                    // _assetic_back_enabled
                    if ('/img/back_enabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_enabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_back_enabled',);
                    }

                    // _assetic_back_enabled_0
                    if ('/img/back_enabled_back_enabled_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_enabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_back_enabled_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/back_disabled')) {
                    // _assetic_back_disabled
                    if ('/img/back_disabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_disabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_back_disabled',);
                    }

                    // _assetic_back_disabled_0
                    if ('/img/back_disabled_back_disabled_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_disabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_back_disabled_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/img/forward_')) {
                if (0 === strpos($pathinfo, '/img/forward_disabled')) {
                    // _assetic_forward_disabled
                    if ('/img/forward_disabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_disabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_forward_disabled',);
                    }

                    // _assetic_forward_disabled_0
                    if ('/img/forward_disabled_forward_disabled_1.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_disabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_forward_disabled_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/img/forward_enabled')) {
                    // _assetic_forward_enabled
                    if ('/img/forward_enabled.png' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_enabled',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_forward_enabled',);
                    }

                    if (0 === strpos($pathinfo, '/img/forward_enabled_')) {
                        // _assetic_forward_enabled_0
                        if ('/img/forward_enabled_forward_enabled_1.png' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_enabled',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_forward_enabled_0',);
                        }

                        if (0 === strpos($pathinfo, '/img/forward_enabled_hover')) {
                            // _assetic_forward_enabled_hover
                            if ('/img/forward_enabled_hover.png' === $pathinfo) {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_enabled_hover',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_forward_enabled_hover',);
                            }

                            // _assetic_forward_enabled_hover_0
                            if ('/img/forward_enabled_hover_forward_enabled_hover_1.png' === $pathinfo) {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'forward_enabled_hover',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_forward_enabled_hover_0',);
                            }

                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/img/back_enabled_hover')) {
                // _assetic_back_enabled_hover
                if ('/img/back_enabled_hover.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_enabled_hover',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_back_enabled_hover',);
                }

                // _assetic_back_enabled_hover_0
                if ('/img/back_enabled_hover_back_enabled_hover_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'back_enabled_hover',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_back_enabled_hover_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/5cb8318')) {
            // _assetic_5cb8318
            if ('/css/5cb8318.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cb8318',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5cb8318',);
            }

            if (0 === strpos($pathinfo, '/css/5cb8318_')) {
                // _assetic_5cb8318_0
                if ('/css/5cb8318_popup_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cb8318',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5cb8318_0',);
                }

                // _assetic_5cb8318_1
                if ('/css/5cb8318_inscriptions_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cb8318',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5cb8318_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/a96784d')) {
                // _assetic_a96784d
                if ('/js/a96784d.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a96784d',);
                }

                if (0 === strpos($pathinfo, '/js/a96784d_')) {
                    if (0 === strpos($pathinfo, '/js/a96784d_jquery')) {
                        // _assetic_a96784d_0
                        if ('/js/a96784d_jquery-ui.min_1.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a96784d_0',);
                        }

                        // _assetic_a96784d_1
                        if ('/js/a96784d_jquery.stickytableheaders_2.js' === $pathinfo) {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a96784d_1',);
                        }

                    }

                    // _assetic_a96784d_2
                    if ('/js/a96784d_inscription_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a96784d_2',);
                    }

                    // _assetic_a96784d_3
                    if ('/js/a96784d_showDetailsInscriptions_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a96784d_3',);
                    }

                    // _assetic_a96784d_4
                    if ('/js/a96784d_reponseschampPerso_5.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a96784d_4',);
                    }

                    // _assetic_a96784d_5
                    if ('/js/a96784d_popup_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a96784d_5',);
                    }

                    // _assetic_a96784d_6
                    if ('/js/a96784d_maj-statuts_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a96784d_6',);
                    }

                    // _assetic_a96784d_7
                    if ('/js/a96784d_proposition-export_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a96784d',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_a96784d_7',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/b87cbbd')) {
                // _assetic_b87cbbd
                if ('/js/b87cbbd.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b87cbbd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b87cbbd',);
                }

                if (0 === strpos($pathinfo, '/js/b87cbbd_')) {
                    // _assetic_b87cbbd_0
                    if ('/js/b87cbbd_jquery-ui.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b87cbbd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b87cbbd_0',);
                    }

                    // _assetic_b87cbbd_1
                    if ('/js/b87cbbd_ajoutStructure_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b87cbbd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b87cbbd_1',);
                    }

                    // _assetic_b87cbbd_2
                    if ('/js/b87cbbd_tagsAdresse_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b87cbbd',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b87cbbd_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/0c3fff4')) {
                // _assetic_0c3fff4
                if ('/css/0c3fff4.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3fff4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0c3fff4',);
                }

                // _assetic_0c3fff4_0
                if ('/css/0c3fff4_autocomplete-ui_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c3fff4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0c3fff4_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/32276e1')) {
                // _assetic_32276e1
                if ('/css/32276e1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '32276e1',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_32276e1',);
                }

                if (0 === strpos($pathinfo, '/css/32276e1_')) {
                    // _assetic_32276e1_0
                    if ('/css/32276e1_evenements_1.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '32276e1',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_32276e1_0',);
                    }

                    // _assetic_32276e1_1
                    if ('/css/32276e1_jquery.nouislider_2.css' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '32276e1',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_32276e1_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/cb3b227')) {
            // _assetic_cb3b227
            if ('/js/cb3b227.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb3b227',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cb3b227',);
            }

            if (0 === strpos($pathinfo, '/js/cb3b227_')) {
                // _assetic_cb3b227_0
                if ('/js/cb3b227_jquery.nouislider.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb3b227',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cb3b227_0',);
                }

                // _assetic_cb3b227_1
                if ('/js/cb3b227_filtresEvenement_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb3b227',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_cb3b227_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/caa58ea')) {
            // _assetic_caa58ea
            if ('/css/caa58ea.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'caa58ea',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_caa58ea',);
            }

            // _assetic_caa58ea_0
            if ('/css/caa58ea_popup_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'caa58ea',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_caa58ea_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/e657628')) {
            // _assetic_e657628
            if ('/js/e657628.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e657628',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e657628',);
            }

            if (0 === strpos($pathinfo, '/js/e657628_')) {
                // _assetic_e657628_0
                if ('/js/e657628_popup_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e657628',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e657628_0',);
                }

                // _assetic_e657628_1
                if ('/js/e657628_formEvenement_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e657628',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e657628_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/b724853')) {
            // _assetic_b724853
            if ('/css/b724853.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b724853',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b724853',);
            }

            if (0 === strpos($pathinfo, '/css/b724853_')) {
                // _assetic_b724853_0
                if ('/css/b724853_dataTables.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b724853',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b724853_0',);
                }

                // _assetic_b724853_1
                if ('/css/b724853_intervenants_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b724853',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b724853_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d725e57')) {
            // _assetic_d725e57
            if ('/js/d725e57.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd725e57',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d725e57',);
            }

            if (0 === strpos($pathinfo, '/js/d725e57_')) {
                // _assetic_d725e57_0
                if ('/js/d725e57_dataTables.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd725e57',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d725e57_0',);
                }

                // _assetic_d725e57_1
                if ('/js/d725e57_intervenants_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd725e57',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d725e57_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3699504')) {
            // _assetic_3699504
            if ('/css/3699504.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3699504,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3699504',);
            }

            // _assetic_3699504_0
            if ('/css/3699504_evenements_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3699504,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3699504_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/83a1292')) {
            // _assetic_83a1292
            if ('/js/83a1292.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '83a1292',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_83a1292',);
            }

            if (0 === strpos($pathinfo, '/js/83a1292_')) {
                // _assetic_83a1292_0
                if ('/js/83a1292_jquery.nouislider.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '83a1292',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_83a1292_0',);
                }

                // _assetic_83a1292_1
                if ('/js/83a1292_Chart.min_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '83a1292',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_83a1292_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/50fdcc4')) {
            // _assetic_50fdcc4
            if ('/css/50fdcc4.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '50fdcc4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_50fdcc4',);
            }

            if (0 === strpos($pathinfo, '/css/50fdcc4_')) {
                // _assetic_50fdcc4_0
                if ('/css/50fdcc4_convention_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '50fdcc4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_50fdcc4_0',);
                }

                // _assetic_50fdcc4_1
                if ('/css/50fdcc4_popup_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '50fdcc4',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_50fdcc4_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ce522e7')) {
            // _assetic_ce522e7
            if ('/js/ce522e7.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce522e7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ce522e7',);
            }

            if (0 === strpos($pathinfo, '/js/ce522e7_')) {
                // _assetic_ce522e7_0
                if ('/js/ce522e7_conventions_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce522e7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ce522e7_0',);
                }

                // _assetic_ce522e7_1
                if ('/js/ce522e7_popup_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce522e7',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ce522e7_1',);
                }

                // _assetic_ce522e7_2
                if ('/js/ce522e7_export-convention_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ce522e7',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ce522e7_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/a44553e')) {
            // _assetic_a44553e
            if ('/images/a44553e.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a44553e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_a44553e',);
            }

            // _assetic_a44553e_0
            if ('/images/a44553e_flamme_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a44553e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_a44553e_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/0dc2acd')) {
            // _assetic_0dc2acd
            if ('/js/0dc2acd.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0dc2acd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0dc2acd',);
            }

            if (0 === strpos($pathinfo, '/js/0dc2acd_')) {
                // _assetic_0dc2acd_0
                if ('/js/0dc2acd_formModele_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0dc2acd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0dc2acd_0',);
                }

                // _assetic_0dc2acd_1
                if ('/js/0dc2acd_jquery-ui-1.9.2.custom.min_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0dc2acd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0dc2acd_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/4ee243b')) {
                // _assetic_4ee243b
                if ('/css/4ee243b.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4ee243b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4ee243b',);
                }

                // _assetic_4ee243b_0
                if ('/css/4ee243b_editionchampPerso_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4ee243b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4ee243b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/1c749bc')) {
                // _assetic_1c749bc
                if ('/css/1c749bc.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1c749bc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1c749bc',);
                }

                // _assetic_1c749bc_0
                if ('/css/1c749bc_accueil_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1c749bc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1c749bc_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/325c83a')) {
            // _assetic_325c83a
            if ('/js/325c83a.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '325c83a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_325c83a',);
            }

            // _assetic_325c83a_0
            if ('/js/325c83a_accueil_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '325c83a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_325c83a_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/0a2eae6')) {
            // _assetic_0a2eae6
            if ('/css/0a2eae6.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0a2eae6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0a2eae6',);
            }

            // _assetic_0a2eae6_0
            if ('/css/0a2eae6_dataTables.min_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0a2eae6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0a2eae6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/cfa18d3')) {
                // _assetic_cfa18d3
                if ('/js/cfa18d3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfa18d3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cfa18d3',);
                }

                if (0 === strpos($pathinfo, '/js/cfa18d3_')) {
                    // _assetic_cfa18d3_0
                    if ('/js/cfa18d3_delete-template_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfa18d3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cfa18d3_0',);
                    }

                    // _assetic_cfa18d3_1
                    if ('/js/cfa18d3_jquery-ui.min_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfa18d3',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_cfa18d3_1',);
                    }

                    // _assetic_cfa18d3_2
                    if ('/js/cfa18d3_sort-templates_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cfa18d3',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_cfa18d3_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/26297bb')) {
                // _assetic_26297bb
                if ('/js/26297bb.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_26297bb',);
                }

                if (0 === strpos($pathinfo, '/js/26297bb_part_1_')) {
                    // _assetic_26297bb_0
                    if ('/js/26297bb_part_1_delete-template_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_26297bb_0',);
                    }

                    // _assetic_26297bb_1
                    if ('/js/26297bb_part_1_exportfrompreview_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_26297bb_1',);
                    }

                    // _assetic_26297bb_2
                    if ('/js/26297bb_part_1_place-variables_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_26297bb_2',);
                    }

                    // _assetic_26297bb_3
                    if ('/js/26297bb_part_1_sort-templates_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_26297bb_3',);
                    }

                    // _assetic_26297bb_4
                    if ('/js/26297bb_part_1_tinymce.init_5.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '26297bb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_26297bb_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/33fcd97')) {
                // _assetic_33fcd97
                if ('/css/33fcd97.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33fcd97',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_33fcd97',);
                }

                // _assetic_33fcd97_0
                if ('/css/33fcd97_kube.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '33fcd97',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_33fcd97_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/722d74f')) {
                // _assetic_722d74f
                if ('/css/722d74f.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '722d74f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_722d74f',);
                }

                // _assetic_722d74f_0
                if ('/css/722d74f_font-awesome.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '722d74f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_722d74f_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/076af4c')) {
                // _assetic_076af4c
                if ('/js/076af4c.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '076af4c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_076af4c',);
                }

                // _assetic_076af4c_0
                if ('/js/076af4c_exportfrompreview_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '076af4c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_076af4c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/975fb8e')) {
                // _assetic_975fb8e
                if ('/js/975fb8e.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '975fb8e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_975fb8e',);
                }

                // _assetic_975fb8e_0
                if ('/js/975fb8e_dataTables.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '975fb8e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_975fb8e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/46846dd')) {
                // _assetic_46846dd
                if ('/js/46846dd.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '46846dd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_46846dd',);
                }

                if (0 === strpos($pathinfo, '/js/46846dd_')) {
                    // _assetic_46846dd_0
                    if ('/js/46846dd_jquery-ui.min_1.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '46846dd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_46846dd_0',);
                    }

                    // _assetic_46846dd_1
                    if ('/js/46846dd_tagsAdresse_2.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '46846dd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_46846dd_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/f315b8c')) {
            // _assetic_f315b8c
            if ('/css/f315b8c.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f315b8c',);
            }

            if (0 === strpos($pathinfo, '/css/f315b8c_part_1_')) {
                // _assetic_f315b8c_0
                if ('/css/f315b8c_part_1_autocomplete-ui_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f315b8c_0',);
                }

                // _assetic_f315b8c_1
                if ('/css/f315b8c_part_1_dataTables.min_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f315b8c_1',);
                }

                // _assetic_f315b8c_2
                if ('/css/f315b8c_part_1_font-awesome.min_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f315b8c_2',);
                }

                // _assetic_f315b8c_3
                if ('/css/f315b8c_part_1_jquery.datetimepicker_4.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f315b8c_3',);
                }

                // _assetic_f315b8c_4
                if ('/css/f315b8c_part_1_kube.min_5.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_f315b8c_4',);
                }

                // _assetic_f315b8c_5
                if ('/css/f315b8c_part_1_popup_6.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_f315b8c_5',);
                }

                // _assetic_f315b8c_6
                if ('/css/f315b8c_part_1_style_7.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f315b8c',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_f315b8c_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/dad913b')) {
                // _assetic_dad913b
                if ('/images/dad913b.jpg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dad913b',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_dad913b',);
                }

                // _assetic_dad913b_0
                if ('/images/dad913b_bg_1.jpg' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dad913b',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_dad913b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/3eceafd')) {
                // _assetic_3eceafd
                if ('/images/3eceafd.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3eceafd',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_3eceafd',);
                }

                // _assetic_3eceafd_0
                if ('/images/3eceafd_logo-ocim_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3eceafd',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_3eceafd_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/0706f3e')) {
                // _assetic_0706f3e
                if ('/images/0706f3e.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0706f3e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_0706f3e',);
                }

                // _assetic_0706f3e_0
                if ('/images/0706f3e_logo-header_1.png' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0706f3e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_0706f3e_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/2aa9ee2')) {
            // _assetic_2aa9ee2
            if ('/js/2aa9ee2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2aa9ee2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2aa9ee2',);
            }

            // _assetic_2aa9ee2_0
            if ('/js/2aa9ee2_jquery_1.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '2aa9ee2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_2aa9ee2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/4f9e5db')) {
            // _assetic_4f9e5db
            if ('/css/4f9e5db.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9e5db',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_4f9e5db',);
            }

            if (0 === strpos($pathinfo, '/css/4f9e5db_')) {
                // _assetic_4f9e5db_0
                if ('/css/4f9e5db_kube.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9e5db',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_4f9e5db_0',);
                }

                // _assetic_4f9e5db_1
                if ('/css/4f9e5db_style_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9e5db',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_4f9e5db_1',);
                }

                // _assetic_4f9e5db_2
                if ('/css/4f9e5db_jquery.datetimepicker_3.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f9e5db',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_4f9e5db_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/7da4399')) {
            // _assetic_7da4399
            if ('/js/7da4399.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7da4399',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7da4399',);
            }

            if (0 === strpos($pathinfo, '/js/7da4399_')) {
                // _assetic_7da4399_0
                if ('/js/7da4399_kube.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7da4399',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7da4399_0',);
                }

                // _assetic_7da4399_1
                if ('/js/7da4399_jquery.datetimepicker_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7da4399',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7da4399_1',);
                }

                // _assetic_7da4399_2
                if ('/js/7da4399_main_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7da4399',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7da4399_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if ('/_configurator' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__configurator_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }
                not__configurator_home:

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ('/_configurator/final' === $pathinfo) {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/intervenants')) {
            // intervenants
            if ('/intervenants' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_intervenants;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'intervenants');
                }

                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::indexAction',  '_route' => 'intervenants',);
            }
            not_intervenants:

            if (0 === strpos($pathinfo, '/intervenants/evenement')) {
                // intervenants_show
                if (preg_match('#^/intervenants/evenement\\-(?P<idevenement>[^/]++)/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_show')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::showAction',));
                }

                // intervenants_new
                if (preg_match('#^/intervenants/evenement/(?P<idevenement>[^/]++)/new$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_new')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::newAction',  'idevenement' => 'null',));
                }

                // intervenants_create
                if (preg_match('#^/intervenants/evenement\\-(?P<idevenement>[^/]++)/create/?$#sD', $pathinfo, $matches)) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_intervenants_create;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'intervenants_create');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_create')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::createAction',));
                }
                not_intervenants_create:

                // intervenants_edit
                if (preg_match('#^/intervenants/evenement/(?P<idevenement>[^/]++)/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_edit')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::editAction',  'idevenement' => 'null',));
                }

                // intervenants_update
                if (preg_match('#^/intervenants/evenement\\-(?P<idevenement>[^/]++)/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_update')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::updateAction',));
                }

                // intervenants_delete
                if (preg_match('#^/intervenants/evenement\\-(?P<idevenement>[^/]++)/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'intervenants_delete')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\IntervenantController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/signataire')) {
            // signataire
            if ('/signataire' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_signataire;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'signataire');
                }

                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::indexAction',  '_route' => 'signataire',);
            }
            not_signataire:

            // signataire_show
            if (preg_match('#^/signataire/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_show')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::showAction',));
            }

            if (0 === strpos($pathinfo, '/signataire/evenement')) {
                // signataire_new
                if (preg_match('#^/signataire/evenement\\-(?P<idevenement>[^/]++)/inscription\\-(?P<idinscription>[^/]++)/new$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_new')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::newAction',));
                }

                // signataire_create
                if (preg_match('#^/signataire/evenement\\-(?P<idevenement>[^/]++)/(?P<idinscription>[^/]++)/create$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_create')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::createAction',));
                }

                // signataire_edit
                if (preg_match('#^/signataire/evenement\\-(?P<idevenement>[^/]++)/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_edit')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::editAction',));
                }

                // signataire_update
                if (preg_match('#^/signataire/evenement\\-(?P<idevenement>[^/]++)/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_update')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::updateAction',));
                }

            }

            // signataire_delete
            if (preg_match('#^/signataire/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'signataire_delete')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\SignataireController::deleteAction',));
            }

        }

        // ocim_contacts_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocim_contacts_homepage')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/structure')) {
            // structure_ajout
            if ('/structure_ajout' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\AdresseController::ajoutTypeStructureAction',  '_route' => 'structure_ajout',);
            }

            // structure
            if ('/structures' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\AdresseController::indexAction',  '_route' => 'structure',);
            }

        }

        if (0 === strpos($pathinfo, '/documents')) {
            // documents
            if ('/documents' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_documents;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'documents');
                }

                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::indexAction',  '_route' => 'documents',);
            }
            not_documents:

            // documents_show
            if (preg_match('#^/documents/(?P<id>[^/]++)/inscription\\-(?P<idinscription>[^/]++)/(?P<mode>preview|show)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documents_show')), array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::showAction',));
            }

            // documents_new
            if ('/documents/new' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::newAction',  '_route' => 'documents_new',);
            }

            // documents_create
            if ('/documents/create' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::createAction',  '_route' => 'documents_create',);
            }

            // documents_edit
            if (preg_match('#^/documents/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documents_edit')), array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::editAction',));
            }

            // documents_update
            if (preg_match('#^/documents/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documents_update')), array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::updateAction',));
            }

            // documents_delete
            if (preg_match('#^/documents/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documents_delete')), array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/documents/liens')) {
                // documents_liens
                if ('/documents/liens' === $pathinfo) {
                    return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::liensAction',  '_route' => 'documents_liens',);
                }

                // documents_liensconventions
                if ('/documents/liens-conventions' === $pathinfo) {
                    return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::liensConventionAction',  '_route' => 'documents_liensconventions',);
                }

            }

            // template_copy
            if ('/documents/copy' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::copieAction',  '_route' => 'template_copy',);
            }

            // documents_exportfrompreview
            if ('/documents/exportpreview' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::exportfrompreviewAction',  '_route' => 'documents_exportfrompreview',);
            }

            // document_maj_ordre
            if ('/documents/maj-order' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ExportBundle\\Controller\\TemplateController::majOrdreAction',  '_route' => 'document_maj_ordre',);
            }

        }

        // ocim_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocim_user_homepage')), array (  '_controller' => 'OCIMUserBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/convention')) {
                // convention
                if (preg_match('#^/convention(?:/(?P<slug>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::indexAction',  'slug' => 1,));
                }

                // convention_show
                if (preg_match('#^/convention/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_show')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::showAction',));
                }

                if (0 === strpos($pathinfo, '/convention/inscription')) {
                    // convention_new
                    if (preg_match('#^/convention/inscription\\-(?P<idinscription>[^/]++)/new$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_new')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::newAction',));
                    }

                    // convention_create
                    if (preg_match('#^/convention/inscription\\-(?P<idinscription>[^/]++)/create$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_create')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::createAction',));
                    }

                }

                // convention_edit
                if (preg_match('#^/convention/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_edit')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::editAction',));
                }

                // convention_update
                if (preg_match('#^/convention/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::updateAction',));
                }

                // convention_delete
                if (preg_match('#^/convention/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'convention_delete')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/convention/ajax')) {
                    // convention_derniernumero
                    if ('/convention/ajax/derniernumero' === $pathinfo) {
                        return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::derniernumeroAction',  '_route' => 'convention_derniernumero',);
                    }

                    // convention_createConvention
                    if ('/convention/ajax/createConvention' === $pathinfo) {
                        return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::createConventionAction',  '_route' => 'convention_createConvention',);
                    }

                    // convention_updateetape
                    if ('/convention/ajax/updateConvention' === $pathinfo) {
                        return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ConventionController::updateConventionAction',  '_route' => 'convention_updateetape',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/champPerso')) {
                // champPerso
                if ('/champPerso' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_champPerso;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'champPerso');
                    }

                    return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::indexAction',  '_route' => 'champPerso',);
                }
                not_champPerso:

                // champPerso_show
                if (preg_match('#^/champPerso/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'champPerso_show')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::showAction',));
                }

                // champPerso_new
                if ('/champPerso/new' === $pathinfo) {
                    return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::newAction',  '_route' => 'champPerso_new',);
                }

                // champPerso_create
                if ('/champPerso/create' === $pathinfo) {
                    return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::createAction',  '_route' => 'champPerso_create',);
                }

                // champPerso_edit
                if (0 === strpos($pathinfo, '/champPerso/evenement') && preg_match('#^/champPerso/evenement\\-(?P<idevenement>[^/]++)(?:/(?P<generation>generate|edit))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'champPerso_edit')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::editAction',  'generation' => 'edit',));
                }

                // champPerso_update
                if (preg_match('#^/champPerso/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'champPerso_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::updateAction',));
                }

                // champPerso_delete
                if (preg_match('#^/champPerso/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'champPerso_delete')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::deleteAction',));
                }

                // champPerso_reponse
                if ('/champPerso/update/reponse' === $pathinfo) {
                    return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\ChampPersoController::reponseAction',  '_route' => 'champPerso_reponse',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // evenement
            if (preg_match('#^/e/(?P<type>formation|event)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_evenement;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'evenement');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::indexAction',  'type' => 'formation',));
            }
            not_evenement:

            // evenement_show
            if (preg_match('#^/e/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::showAction',));
            }

            // evenement_new
            if (preg_match('#^/e/(?P<type>formation|event)/new$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_new')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::newAction',  'type' => 'formation',));
            }

            // evenement_create
            if ('/e/create' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
            }

            // evenement_edit
            if (preg_match('#^/e/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::editAction',));
            }

            // evenement_update
            if (preg_match('#^/e/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::updateAction',));
            }

            // evenement_delete
            if (preg_match('#^/e/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::deleteAction',));
            }

            // evenement_addtype
            if ('/e/nouveau-type' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::ajoutTypeAction',  '_route' => 'evenement_addtype',);
            }

            // evenement_addintervenants
            if (preg_match('#^/e/(?P<idevenement>[^/]++)/intervenant$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_addintervenants')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::indexIntervenantEvenementAction',));
            }

            // evenement_intervenants_update
            if (preg_match('#^/e/(?P<idevenement>[^/]++)/intervenant_update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_intervenants_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\EvenementController::updateIntervenantEvenementAction',));
            }

        }

        if (0 === strpos($pathinfo, '/formule')) {
            // formule
            if ('/formule' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_formule;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'formule');
                }

                return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::indexAction',  '_route' => 'formule',);
            }
            not_formule:

            // formule_show
            if (preg_match('#^/formule/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formule_show')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::showAction',));
            }

            // formule_new
            if ('/formule/new' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::newAction',  '_route' => 'formule_new',);
            }

            // formule_create
            if ('/formule/create' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::createAction',  '_route' => 'formule_create',);
            }

            // formule_edit
            if (preg_match('#^/formule/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formule_edit')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::editAction',));
            }

            // formule_update
            if (preg_match('#^/formule/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formule_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::updateAction',));
            }

            // formule_delete
            if (preg_match('#^/formule/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'formule_delete')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\FormuleController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // inscription
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_inscription;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'inscription');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::indexAction',));
            }
            not_inscription:

            // inscription_show
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_show')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::showAction',));
            }

            // inscription_new
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/new$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_new')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::newAction',));
            }

            // inscription_create
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/create$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_create')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::createAction',));
            }

            // inscription_edit
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/edit\\-(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_edit')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::editAction',));
            }

            // inscription_update
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::updateAction',));
            }

            // inscription_delete
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/inscription\\-(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_delete')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::deleteAction',));
            }

            // inscription_edit_ordre
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/ordre$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_edit_ordre')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::ordreAction',));
            }

            // inscription_update_statut_convention
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/statut\\-convention/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_inscription_update_statut_convention;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'inscription_update_statut_convention');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update_statut_convention')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::updateStatutConventionAction',));
            }
            not_inscription_update_statut_convention:

            // inscription_update_statut_inscription
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/statut\\-inscription/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_inscription_update_statut_inscription;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'inscription_update_statut_inscription');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update_statut_inscription')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::updateStatutInscriptionAction',));
            }
            not_inscription_update_statut_inscription:

            // inscription_update_statut_financement
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/statut\\-financement/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_inscription_update_statut_financement;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'inscription_update_statut_financement');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update_statut_financement')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::updateStatutFinancementAction',));
            }
            not_inscription_update_statut_financement:

            // inscription_switch_stagiaire_class
            if (preg_match('#^/evenement\\-(?P<idevenement>[^/]++)/inscriptions/switch\\-stagiaire\\-intervenant/(?P<idinscription>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_switch_stagiaire_class')), array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\InscriptionController::switchStagiaireAction',));
            }

        }

        if (0 === strpos($pathinfo, '/personne')) {
            // personne
            if ('/personne' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_personne;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'personne');
                }

                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::indexAction',  '_route' => 'personne',);
            }
            not_personne:

            // personne_show
            if (preg_match('#^/personne/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personne_show')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::showAction',));
            }

            // personne_new
            if ('/personne/new' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::newAction',  '_route' => 'personne_new',);
            }

            // personne_create
            if ('/personne/create' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::createAction',  '_route' => 'personne_create',);
            }

            // personne_edit
            if (preg_match('#^/personne/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personne_edit')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::editAction',));
            }

            // personne_update
            if (preg_match('#^/personne/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personne_update')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::updateAction',));
            }

            // personne_delete
            if (preg_match('#^/personne/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personne_delete')), array (  '_controller' => 'OCIM\\ContactsBundle\\Controller\\PersonneController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if ('/user' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_user;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'user');
                }

                return array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ('/user/new' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ('/user/create' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::updateAction',));
            }

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'OCIM\\UserBundle\\Controller\\UserController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // connexion
            if ('/connexion' === $pathinfo) {
                return array (  '_controller' => 'OCIM\\UserBundle\\Controller\\AdminController::connexionAction',  '_route' => 'connexion',);
            }

            // check
            if ('/check' === $pathinfo) {
                return array('_route' => 'check');
            }

        }

        // deconnexion
        if ('/deconnexion' === $pathinfo) {
            return array('_route' => 'deconnexion');
        }

        // home
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_home;
            } else {
                return $this->redirect($rawPathinfo.'/', 'home');
            }

            return array (  '_controller' => 'OCIM\\EvenementsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }
        not_home:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
