<?php

namespace Kinulab\SonataGentellelaThemeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class KinulabSonataGentellelaThemeExtension extends Extension implements PrependExtensionInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
    }

    public function prepend(ContainerBuilder $container)
    {
        $bundles = $container->getParameter('kernel.bundles');
        if (isset($bundles['SonataAdminBundle'])) {
            $config = [
                'templates' => [
                    'user_block'                    => '@KinulabSonataGentellelaTheme/Core/user_block.html.twig',
                    'add_block'                     => '@KinulabSonataGentellelaTheme/Core/add_block.html.twig',
                    'layout'                        => '@KinulabSonataGentellelaTheme/standard_layout.html.twig',
                    'ajax'                          => '@KinulabSonataGentellelaTheme/ajax_layout.html.twig',
                    'dashboard'                     => '@KinulabSonataGentellelaTheme/Core/dashboard.html.twig',
                    'search'                        => '@KinulabSonataGentellelaTheme/Core/search.html.twig',
                    'list'                          => '@KinulabSonataGentellelaTheme/CRUD/list.html.twig',
                    'filter'                        => '@KinulabSonataGentellelaTheme/Form/filter_admin_fields.html.twig',
                    'show'                          => '@KinulabSonataGentellelaTheme/CRUD/show.html.twig',
                    'show_compare'                  => '@KinulabSonataGentellelaTheme/CRUD/show_compare.html.twig',
                    'edit'                          => '@KinulabSonataGentellelaTheme/CRUD/edit.html.twig',
                    'history'                       => '@KinulabSonataGentellelaTheme/CRUD/history.html.twig',
                    'history_revision_timestamp'    => '@KinulabSonataGentellelaTheme/CRUD/history_revision_timestamp.html.twig',
                    'acl'                           => '@KinulabSonataGentellelaTheme/CRUD/acl.html.twig',
                    'action'                        => '@KinulabSonataGentellelaTheme/CRUD/action.html.twig',
                    'short_object_description'      => '@KinulabSonataGentellelaTheme/Helper/short-object-description.html.twig',
                    'preview'                       => '@KinulabSonataGentellelaTheme/CRUD/preview.html.twig',
                    'list_block'                    => '@KinulabSonataGentellelaTheme/Block/block_admin_list.html.twig',
                    'delete'                        => '@KinulabSonataGentellelaTheme/CRUD/delete.html.twig',
                    'batch'                         => '@KinulabSonataGentellelaTheme/CRUD/list__batch.html.twig',
                    'select'                        => '@KinulabSonataGentellelaTheme/CRUD/list__select.html.twig',
                    'batch_confirmation'            => '@KinulabSonataGentellelaTheme/CRUD/batch_confirmation.html.twig',
                    'inner_list_row'                => '@KinulabSonataGentellelaTheme/CRUD/list_inner_row.html.twig',
                    'base_list_field'               => '@KinulabSonataGentellelaTheme/CRUD/base_list_field.html.twig',
                    'pager_links'                   => '@KinulabSonataGentellelaTheme/Pager/links.html.twig',
                    'pager_results'                 => '@KinulabSonataGentellelaTheme/Pager/results.html.twig',
                    'tab_menu_template'             => '@KinulabSonataGentellelaTheme/Core/tab_menu_template.html.twig',
                    'knp_menu_template'             => '@KinulabSonataGentellelaTheme/Menu/sonata_menu.html.twig',
                    'search_result_block'           => '@KinulabSonataGentellelaTheme/Block/block_search_result.html.twig',
                    'outer_list_rows_mosaic'        => '@KinulabSonataGentellelaTheme/CRUD/list_outer_rows_mosaic.html.twig',
                    'outer_list_rows_list'          => '@KinulabSonataGentellelaTheme/CRUD/list_outer_rows_list.html.twig',
                    'outer_list_rows_tree'          => '@KinulabSonataGentellelaTheme/CRUD/list_outer_rows_tree.html.twig',
                    'button_acl'                    => '@KinulabSonataGentellelaTheme/Button/acl_button.html.twig',
                    'button_create'                 => '@KinulabSonataGentellelaTheme/Button/create_button.html.twig',
                    'button_edit'                   => '@KinulabSonataGentellelaTheme/Button/edit_button.html.twig',
                    'button_history'                => '@KinulabSonataGentellelaTheme/Button/history_button.html.twig',
                    'button_list'                   => '@KinulabSonataGentellelaTheme/Button/list_button.html.twig',
                    'button_show'                   => '@KinulabSonataGentellelaTheme/Button/show_button.html.twig',
                ],
                'assets'    => [
                    'stylesheets'   => [
                        'bundles/kinulabsonatagentellelatheme/css/bootstrap.min.css',
                        'bundles/kinulabsonatagentellelatheme/css/font-awesome.min.css',
                        'bundles/kinulabsonatagentellelatheme/css/icheck.css',
                        'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
                        'bundles/sonatacore/vendor/select2/select2.css',
                        'bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css',
                        'bundles/kinulabsonatagentellelatheme/css/prettify.min.css',
                        'bundles/kinulabsonatagentellelatheme/css/custom.min.css',
                        'bundles/kinulabsonatagentellelatheme/css/sonata-gentellela.css',
                    ],
                    'javascripts'   => [
//                        'bundles/kinulabsonatagentellelatheme/js/jquery.min.js',
                        /* JQuery has been moved in header. This is bad, but necessary until https://github.com/sonata-project/SonataAdminBundle/pull/3647 complete.
                         * This will be cleaned up with the version 4.0 of sonata admin */

                        'bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js',
                        'bundles/kinulabsonatagentellelatheme/js/moment.min.js',
                        'bundles/kinulabsonatagentellelatheme/js/bootstrap.min.js',
                        'bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                        'bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js',
                        'bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js',
                        'bundles/sonataadmin/vendor/jquery-form/jquery.form.js',
                        'bundles/sonataadmin/jquery/jquery.confirmExit.js',
                        'bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
                        'bundles/kinulabsonatagentellelatheme/js/custom.min.js',
                        'bundles/sonatacore/vendor/select2/select2.min.js',
                        'bundles/sonataadmin/vendor/iCheck/icheck.min.js',
                        'bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js',
                        'bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js',
                        'bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js',
                        'bundles/sonataadmin/vendor/readmore-js/readmore.min.js',

                        'bundles/sonataadmin/Admin.js',
                        'bundles/sonataadmin/treeview.js',
                    ]
                ]
            ];
            $container->prependExtensionConfig('sonata_admin', $config);
        }
    }
}
