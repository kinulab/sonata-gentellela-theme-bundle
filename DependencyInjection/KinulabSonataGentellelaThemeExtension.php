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
                    'user_block'                    => 'KinulabSonataGentellelaThemeBundle:Core:user_block.html.twig',
                    'add_block'                     => 'KinulabSonataGentellelaThemeBundle:Core:add_block.html.twig',
                    'layout'                        => 'KinulabSonataGentellelaThemeBundle::standard_layout.html.twig',
                    'ajax'                          => 'KinulabSonataGentellelaThemeBundle::ajax_layout.html.twig',
                    'dashboard'                     => 'KinulabSonataGentellelaThemeBundle:Core:dashboard.html.twig',
                    'search'                        => 'KinulabSonataGentellelaThemeBundle:Core:search.html.twig',
                    'list'                          => 'KinulabSonataGentellelaThemeBundle:CRUD:list.html.twig',
                    'filter'                        => 'KinulabSonataGentellelaThemeBundle:Form:filter_admin_fields.html.twig',
                    'show'                          => 'KinulabSonataGentellelaThemeBundle:CRUD:show.html.twig',
                    'show_compare'                  => 'KinulabSonataGentellelaThemeBundle:CRUD:show_compare.html.twig',
                    'edit'                          => 'KinulabSonataGentellelaThemeBundle:CRUD:edit.html.twig',
                    'history'                       => 'KinulabSonataGentellelaThemeBundle:CRUD:history.html.twig',
                    'history_revision_timestamp'    => 'KinulabSonataGentellelaThemeBundle:CRUD:history_revision_timestamp.html.twig',
                    'acl'                           => 'KinulabSonataGentellelaThemeBundle:CRUD:acl.html.twig',
                    'action'                        => 'KinulabSonataGentellelaThemeBundle:CRUD:action.html.twig',
                    'short_object_description'      => 'KinulabSonataGentellelaThemeBundle:Helper:short-object-description.html.twig',
                    'preview'                       => 'KinulabSonataGentellelaThemeBundle:CRUD:preview.html.twig',
                    'list_block'                    => 'KinulabSonataGentellelaThemeBundle:Block:block_admin_list.html.twig',
                    'delete'                        => 'KinulabSonataGentellelaThemeBundle:CRUD:delete.html.twig',
                    'batch'                         => 'KinulabSonataGentellelaThemeBundle:CRUD:list__batch.html.twig',
                    'select'                        => 'KinulabSonataGentellelaThemeBundle:CRUD:list__select.html.twig',
                    'batch_confirmation'            => 'KinulabSonataGentellelaThemeBundle:CRUD:batch_confirmation.html.twig',
                    'inner_list_row'                => 'KinulabSonataGentellelaThemeBundle:CRUD:list_inner_row.html.twig',
                    'base_list_field'               => 'KinulabSonataGentellelaThemeBundle:CRUD:base_list_field.html.twig',
                    'pager_links'                   => 'KinulabSonataGentellelaThemeBundle:Pager:links.html.twig',
                    'pager_results'                 => 'KinulabSonataGentellelaThemeBundle:Pager:results.html.twig',
                    'tab_menu_template'             => 'KinulabSonataGentellelaThemeBundle:Core:tab_menu_template.html.twig',
                    'knp_menu_template'             => 'KinulabSonataGentellelaThemeBundle:Menu:sonata_menu.html.twig',
                    'search_result_block'           => 'KinulabSonataGentellelaThemeBundle:Block:block_search_result.html.twig',
                    'outer_list_rows_mosaic'        => 'KinulabSonataGentellelaThemeBundle:CRUD:list_outer_rows_mosaic.html.twig',
                    'outer_list_rows_list'          => 'KinulabSonataGentellelaThemeBundle:CRUD:list_outer_rows_list.html.twig',
                    'outer_list_rows_tree'          => 'KinulabSonataGentellelaThemeBundle:CRUD:list_outer_rows_tree.html.twig',
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
