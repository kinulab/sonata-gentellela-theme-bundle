# Sonata Gentellela Theme

A simple integration of [Gentellela Alela!](https://colorlib.com/polygon/gentelella/index.html) theme for [SonataAdminBundle](https://github.com/sonata-project/SonataAdminBundle).

This bundle automaticaly define a default configuration for sonata admin, so the installation is as simple as :

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

**Most of the templates blocks are unchanged, but for the theme, we have been forced to move somes of them. So if you've overrided the sonata themplates, there could be some glitchs**
