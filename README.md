# Sonata Gentellela Theme

A simple integration of [Gentellela Alela!](https://colorlib.com/polygon/gentelella/index.html)
theme for [SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle).

This bundle automaticaly define a default configuration for sonata admin, so the
installation is as simple as :

```
composer require kinulab/sonata-gentellela-theme-bundle
```

and in the `app/AppKernel.php` :

```php
public function registerBundles()
{
    $bundles = [
        ...
        new Kinulab\SonataGentellelaThemeBundle\KinulabSonataGentellelaThemeBundle(),
    ];
}
```

Since the 3.14 version, this bundle use the same version policy. The version XY
of this bundle is for the version XY of `sonata-project/admin-bundle`.

# Disclaimer

**Most of the templates blocks are unchanged, but for the theme, we have been
forced to move somes of them. So if you've overrided the sonata themplates,
there could be some glitchs**


**Despite everything is automatically configured in `sonata_admin.templates`, it
append that some parts are still rendered with the traditional Sonata template.**
This is due to the fact that, some templates are not configurable.

In that case, you have to copy/past templates from this bundle in
`app/Resources/SonataAdminBundle/views/[...]`