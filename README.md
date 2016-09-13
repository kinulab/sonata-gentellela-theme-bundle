# Sonata Gentellela Theme

A simple integration of [https://colorlib.com/polygon/gentelella/index.html](Gentellela Alela!) theme for [https://github.com/sonata-project/SonataAdminBundle](SonataAdminBundle).

This bundle automaticaly define a default configuration for sonata admin, so the installation is as simple as :

```
composer require kinulab/sonata-getellela-theme-bundle
```

and in the `app/AppKernel.php` :

```
    public function registerBundles()
    {
        $bundles = [
            ...
            new Kinulab\SonataGentellelaThemeBundle\KinulabSonataGentellelaThemeBundle(),
        ];
```

**Most of the templates blocks are unchanged, but for the theme, we have been forced to move somes of them. So if you've overrided the sonata themplates, there could be some glitchs**
