<?php

/* composer.lock */
class __TwigTemplate_ef01d1384d9d91828eb86b2bec80f380409403db8e1f8b7ef590b31a1bf1f698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71ff6a45f7e81c36d1db3ba101e16536589a36e4e33d100c7e30f7f5722f95f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ff6a45f7e81c36d1db3ba101e16536589a36e4e33d100c7e30f7f5722f95f3->enter($__internal_71ff6a45f7e81c36d1db3ba101e16536589a36e4e33d100c7e30f7f5722f95f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "composer.lock"));

        // line 1
        echo "{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file\",
        \"This file is @generated automatically\"
    ],
    \"hash\": \"deff807af8cf50658992137d3ca4743b\",
    \"content-hash\": \"7b54f2501e7f67774242eb408f49265b\",
    \"packages\": [
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \">2.2,<2.4\"
            },
            \"require-dev\": {
                \"alcaeus/mongo-php-adapter\": \"^1.1\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^5.7\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2017-08-25 07:02:50\"
        },
        {
            \"name\": \"lin3s/front-foundation\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/LIN3S/FrontFoundation.git\",
                \"reference\": \"7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/LIN3S/FrontFoundation/zipball/7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\",
                \"reference\": \"7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\",
                \"shasum\": \"\"
            },
            \"type\": \"library\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"LIN3S\",
                    \"email\": \"info@lin3s.com\",
                    \"homepage\": \"https://lin3s.com\"
                }
            ],
            \"description\": \"Library that provides a sort of commonly used front-end components in LIN3S projects\",
            \"time\": \"2017-09-18 08:55:04\"
        },
        {
            \"name\": \"psr/cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/cache.git\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Cache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for caching libraries\",
            \"keywords\": [
                \"cache\",
                \"psr\",
                \"psr-6\"
            ],
            \"time\": \"2016-08-06 20:24:11\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/container.git\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Container\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
            \"homepage\": \"https://github.com/php-fig/container\",
            \"keywords\": [
                \"PSR-11\",
                \"container\",
                \"container-interface\",
                \"container-interop\",
                \"psr\"
            ],
            \"time\": \"2017-02-14 16:28:37\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Log\\\\\": \"Psr/Log/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"time\": \"2016-10-10 12:19:37\"
        },
        {
            \"name\": \"psr/simple-cache\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/simple-cache.git\",
                \"reference\": \"753fa598e8f3b9966c886fe13f370baa45ef0e24\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/simple-cache/zipball/753fa598e8f3b9966c886fe13f370baa45ef0e24\",
                \"reference\": \"753fa598e8f3b9966c886fe13f370baa45ef0e24\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\SimpleCache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interfaces for simple caching\",
            \"keywords\": [
                \"cache\",
                \"caching\",
                \"psr\",
                \"psr-16\",
                \"simple-cache\"
            ],
            \"time\": \"2017-01-02 13:31:39\"
        },
        {
            \"name\": \"symfony/asset\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/asset.git\",
                \"reference\": \"4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/asset/zipball/4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\",
                \"reference\": \"4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/http-kernel\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Asset Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"0fb57f94f58bcadd7a11215039bc59b5000968e5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/0fb57f94f58bcadd7a11215039bc59b5000968e5\",
                \"reference\": \"0fb57f94f58bcadd7a11215039bc59b5000968e5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"psr/simple-cache\": \"^1.0\",
                \"symfony/polyfill-apcu\": \"~1.1\"
            },
            \"conflict\": {
                \"symfony/var-dumper\": \"<3.3\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.4\",
                \"predis/predis\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"caching\",
                \"psr6\"
            ],
            \"time\": \"2017-09-03 14:06:51\"
        },
        {
            \"name\": \"symfony/class-loader\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/class-loader.git\",
                \"reference\": \"9c69968ce57924e9e93550895cd2b0477edf0e19\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/class-loader/zipball/9c69968ce57924e9e93550895cd2b0477edf0e19\",
                \"reference\": \"9c69968ce57924e9e93550895cd2b0477edf0e19\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/polyfill-apcu\": \"~1.1\"
            },
            \"suggest\": {
                \"symfony/polyfill-apcu\": \"For using ApcClassLoader on HHVM\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\ClassLoader\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony ClassLoader Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"f9f19a39ee178f61bb2190f51ff7c517c2159315\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/f9f19a39ee178f61bb2190f51ff7c517c2159315\",
                \"reference\": \"f9f19a39ee178f61bb2190f51ff7c517c2159315\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/filesystem\": \"~2.8|~3.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/finder\": \"<3.3\"
            },
            \"require-dev\": {
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/finder\": \"~3.3\",
                \"symfony/yaml\": \"~3.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Config\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Config Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-04 16:28:07\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\",
                \"reference\": \"a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/debug\": \"~2.8|~3.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.3\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/event-dispatcher\": \"~2.8|~3.0\",
                \"symfony/filesystem\": \"~2.8|~3.0\",
                \"symfony/process\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/filesystem\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Console\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Console Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-06 16:40:18\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"8beb24eec70b345c313640962df933499373a944\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/8beb24eec70b345c313640962df933499373a944\",
                \"reference\": \"8beb24eec70b345c313640962df933499373a944\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/log\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \">=2.3,<2.3.24|~2.4.0|>=2.5,<2.5.9|>=2.6,<2.6.2\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"~2.8|~3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Debug\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Debug Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-01 13:23:39\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"e593f06dd90a81c7b70ac1c49862a061b0ec06d2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/e593f06dd90a81c7b70ac1c49862a061b0ec06d2\",
                \"reference\": \"e593f06dd90a81c7b70ac1c49862a061b0ec06d2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/container\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.3.1\",
                \"symfony/finder\": \"<3.3\",
                \"symfony/yaml\": \"<3.3\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/yaml\": \"~3.3\"
            },
            \"suggest\": {
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using expressions in service container configuration\",
                \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
                \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony DependencyInjection Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-05 20:39:38\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"54ca9520a00386f83bca145819ad3b619aaa2485\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/54ca9520a00386f83bca145819ad3b619aaa2485\",
                \"reference\": \"54ca9520a00386f83bca145819ad3b619aaa2485\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony EventDispatcher Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\",
                \"reference\": \"b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Filesystem Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\",
                \"reference\": \"b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Finder Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\",
                \"reference\": \"e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"~1.0\",
                \"ext-xml\": \"*\",
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/cache\": \"~3.3\",
                \"symfony/class-loader\": \"~3.2\",
                \"symfony/config\": \"~3.3\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/event-dispatcher\": \"^3.3.1\",
                \"symfony/filesystem\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~3.3\",
                \"symfony/http-kernel\": \"~3.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"~3.3\",
                \"symfony/stopwatch\": \"~2.8|~3.0\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.0\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.3\",
                \"symfony/console\": \"<3.3\",
                \"symfony/form\": \"<3.3\",
                \"symfony/property-info\": \"<3.3\",
                \"symfony/serializer\": \"<3.3\",
                \"symfony/translation\": \"<3.2\",
                \"symfony/validator\": \"<3.3\",
                \"symfony/workflow\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"sensio/framework-extra-bundle\": \"^3.0.2\",
                \"symfony/asset\": \"~3.3\",
                \"symfony/browser-kit\": \"~2.8|~3.0\",
                \"symfony/console\": \"~3.3\",
                \"symfony/css-selector\": \"~2.8|~3.0\",
                \"symfony/dom-crawler\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/form\": \"~3.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~2.8|~3.0\",
                \"symfony/property-info\": \"~3.3\",
                \"symfony/security\": \"~2.8|~3.0\",
                \"symfony/security-core\": \"~3.2\",
                \"symfony/security-csrf\": \"~2.8|~3.0\",
                \"symfony/serializer\": \"~3.3\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~3.2\",
                \"symfony/validator\": \"~3.3\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/workflow\": \"~3.3\",
                \"symfony/yaml\": \"~3.2\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-apcu\": \"For best performance of the system caches\",
                \"symfony/console\": \"For using the console commands\",
                \"symfony/form\": \"For using forms\",
                \"symfony/property-info\": \"For using the property_info service\",
                \"symfony/serializer\": \"For using the serializer service\",
                \"symfony/validator\": \"For using validation\",
                \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
                \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony FrameworkBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-11 05:57:23\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\",
                \"reference\": \"2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"symfony/expression-language\": \"~2.8|~3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony HttpFoundation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-06 17:07:39\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"70f5bb3cdd737624249953b61023411e26be5db7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/70f5bb3cdd737624249953b61023411e26be5db7\",
                \"reference\": \"70f5bb3cdd737624249953b61023411e26be5db7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~2.8|~3.0\",
                \"symfony/event-dispatcher\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~3.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<2.8\",
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/var-dumper\": \"<3.3\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"~2.8|~3.0\",
                \"symfony/class-loader\": \"~2.8|~3.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/console\": \"~2.8|~3.0\",
                \"symfony/css-selector\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/dom-crawler\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/process\": \"~2.8|~3.0\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~2.8|~3.0\",
                \"symfony/var-dumper\": \"~3.3\"
            },
            \"suggest\": {
                \"symfony/browser-kit\": \"\",
                \"symfony/class-loader\": \"\",
                \"symfony/config\": \"\",
                \"symfony/console\": \"\",
                \"symfony/dependency-injection\": \"\",
                \"symfony/finder\": \"\",
                \"symfony/var-dumper\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony HttpKernel Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-11 16:13:23\"
        },
        {
            \"name\": \"symfony/polyfill-apcu\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-apcu.git\",
                \"reference\": \"cec32398a973a9bfe9d2f94f4b5d5e186b40b698\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-apcu/zipball/cec32398a973a9bfe9d2f94f4b5d5e186b40b698\",
                \"reference\": \"cec32398a973a9bfe9d2f94f4b5d5e186b40b698\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.5-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting apcu_* functions to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"apcu\",
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2017-07-05 15:09:33\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"7c8fae0ac1d216eb54349e6a8baa57d515fe8803\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/7c8fae0ac1d216eb54349e6a8baa57d515fe8803\",
                \"reference\": \"7c8fae0ac1d216eb54349e6a8baa57d515fe8803\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.5-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for the Mbstring extension\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"mbstring\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2017-06-14 15:44:48\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\",
                \"reference\": \"b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"970326dcd04522e1cd1fe128abaee54c225e27f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/970326dcd04522e1cd1fe128abaee54c225e27f9\",
                \"reference\": \"970326dcd04522e1cd1fe128abaee54c225e27f9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"conflict\": {
                \"symfony/config\": \"<2.8\",
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/yaml\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/common\": \"~2.2\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/yaml\": \"~3.3\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/dependency-injection\": \"For loading routes from a service\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Routing Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"router\",
                \"routing\",
                \"uri\",
                \"url\"
            ],
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"9a5610a8d6a50985a7be485c0ba745c22607beeb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/9a5610a8d6a50985a7be485c0ba745c22607beeb\",
                \"reference\": \"9a5610a8d6a50985a7be485c0ba745c22607beeb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Stopwatch Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/templating\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/templating.git\",
                \"reference\": \"5067742484cc3fbcfc73bfe9c309e54fa044c1e1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/templating/zipball/5067742484cc3fbcfc73bfe9c309e54fa044c1e1\",
                \"reference\": \"5067742484cc3fbcfc73bfe9c309e54fa044c1e1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using debug logging in loaders\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Templating\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Templating Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/twig-bridge\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bridge.git\",
                \"reference\": \"9c12e8f02937a1edfa02fcc73282c7c1a18304b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/9c12e8f02937a1edfa02fcc73282c7c1a18304b2\",
                \"reference\": \"9c12e8f02937a1edfa02fcc73282c7c1a18304b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"conflict\": {
                \"symfony/form\": \"<3.2.10|~3.3,<3.3.3\"
            },
            \"require-dev\": {
                \"fig/link-util\": \"^1.0\",
                \"symfony/asset\": \"~2.8|~3.0\",
                \"symfony/console\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/form\": \"^3.2.10|^3.3.3\",
                \"symfony/http-kernel\": \"~3.2\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/security\": \"~2.8|~3.0\",
                \"symfony/security-acl\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~2.8|~3.0\",
                \"symfony/var-dumper\": \"~2.8.10|~3.1.4|~3.2\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/yaml\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/asset\": \"For using the AssetExtension\",
                \"symfony/expression-language\": \"For using the ExpressionExtension\",
                \"symfony/finder\": \"\",
                \"symfony/form\": \"For using the FormExtension\",
                \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
                \"symfony/routing\": \"For using the RoutingExtension\",
                \"symfony/security\": \"For using the SecurityExtension\",
                \"symfony/stopwatch\": \"For using the StopwatchExtension\",
                \"symfony/templating\": \"For using the TwigEngine\",
                \"symfony/translation\": \"For using the TranslationExtension\",
                \"symfony/var-dumper\": \"For using the DumpExtension\",
                \"symfony/web-link\": \"For using the WebLinkExtension\",
                \"symfony/yaml\": \"For using the YamlExtension\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Twig Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/twig-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bundle.git\",
                \"reference\": \"cb4251a3270d0ea35a503bf3aebb9d917f2c4585\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/cb4251a3270d0ea35a503bf3aebb9d917f2c4585\",
                \"reference\": \"cb4251a3270d0ea35a503bf3aebb9d917f2c4585\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/config\": \"~3.2\",
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/http-kernel\": \"^3.3\",
                \"symfony/twig-bridge\": \"^3.3\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"symfony/asset\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/form\": \"~2.8|~3.0\",
                \"symfony/framework-bundle\": \"^3.2.8\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/yaml\": \"~2.8|~3.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony TwigBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-01 13:23:39\"
        },
        {
            \"name\": \"symfony/web-server-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-server-bundle.git\",
                \"reference\": \"b2508667fd9d468135f054c5afc59bc8a5ab7bc7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-server-bundle/zipball/b2508667fd9d468135f054c5afc59bc8a5ab7bc7\",
                \"reference\": \"b2508667fd9d468135f054c5afc59bc8a5ab7bc7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/console\": \"~3.3\",
                \"symfony/http-kernel\": \"~3.3\",
                \"symfony/process\": \"~3.3\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebServerBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony WebServerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-08-22 13:33:42\"
        },
        {
            \"name\": \"twig/twig\",
            \"version\": \"v2.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/twigphp/Twig.git\",
                \"reference\": \"eab7c3288ae6603d7d6f92b531626af2b162d1f2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/eab7c3288ae6603d7d6f92b531626af2b162d1f2\",
                \"reference\": \"eab7c3288ae6603d7d6f92b531626af2b162d1f2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"symfony/debug\": \"~2.7\",
                \"symfony/phpunit-bridge\": \"~3.3@dev\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Twig_\": \"lib/\"
                },
                \"psr-4\": {
                    \"Twig\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\",
                    \"homepage\": \"http://fabien.potencier.org\",
                    \"role\": \"Lead Developer\"
                },
                {
                    \"name\": \"Armin Ronacher\",
                    \"email\": \"armin.ronacher@active-4.com\",
                    \"role\": \"Project Founder\"
                },
                {
                    \"name\": \"Twig Team\",
                    \"homepage\": \"http://twig.sensiolabs.org/contributors\",
                    \"role\": \"Contributors\"
                }
            ],
            \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
            \"homepage\": \"http://twig.sensiolabs.org\",
            \"keywords\": [
                \"templating\"
            ],
            \"time\": \"2017-06-07 18:47:58\"
        }
    ],
    \"packages-dev\": [],
    \"aliases\": [],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": {
        \"lin3s/front-foundation\": 20
    },
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
";
        
        $__internal_71ff6a45f7e81c36d1db3ba101e16536589a36e4e33d100c7e30f7f5722f95f3->leave($__internal_71ff6a45f7e81c36d1db3ba101e16536589a36e4e33d100c7e30f7f5722f95f3_prof);

    }

    public function getTemplateName()
    {
        return "composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file\",
        \"This file is @generated automatically\"
    ],
    \"hash\": \"deff807af8cf50658992137d3ca4743b\",
    \"content-hash\": \"7b54f2501e7f67774242eb408f49265b\",
    \"packages\": [
        {
            \"name\": \"doctrine/cache\",
            \"version\": \"v1.7.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"reference\": \"b3217d58609e9c8e661cd41357a54d926c4a2a1a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1\"
            },
            \"conflict\": {
                \"doctrine/common\": \">2.2,<2.4\"
            },
            \"require-dev\": {
                \"alcaeus/mongo-php-adapter\": \"^1.1\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^5.7\",
                \"predis/predis\": \"~1.0\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.7.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Caching library offering an object-oriented API for many cache backends\",
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"cache\",
                \"caching\"
            ],
            \"time\": \"2017-08-25 07:02:50\"
        },
        {
            \"name\": \"lin3s/front-foundation\",
            \"version\": \"dev-master\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/LIN3S/FrontFoundation.git\",
                \"reference\": \"7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/LIN3S/FrontFoundation/zipball/7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\",
                \"reference\": \"7b914cbcb83fe9ef65da4700e9d8cbdbe06c9391\",
                \"shasum\": \"\"
            },
            \"type\": \"library\",
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"LIN3S\",
                    \"email\": \"info@lin3s.com\",
                    \"homepage\": \"https://lin3s.com\"
                }
            ],
            \"description\": \"Library that provides a sort of commonly used front-end components in LIN3S projects\",
            \"time\": \"2017-09-18 08:55:04\"
        },
        {
            \"name\": \"psr/cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/cache.git\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Cache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for caching libraries\",
            \"keywords\": [
                \"cache\",
                \"psr\",
                \"psr-6\"
            ],
            \"time\": \"2016-08-06 20:24:11\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/container.git\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/container/zipball/b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"reference\": \"b7ce3b176482dbbc1245ebf52b181af44c2cf55f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Container\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
            \"homepage\": \"https://github.com/php-fig/container\",
            \"keywords\": [
                \"PSR-11\",
                \"container\",
                \"container-interface\",
                \"container-interop\",
                \"psr\"
            ],
            \"time\": \"2017-02-14 16:28:37\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"reference\": \"4ebe3a8bf773a19edfe0a84b6585ba3d401b724d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Log\\\\\": \"Psr/Log/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"time\": \"2016-10-10 12:19:37\"
        },
        {
            \"name\": \"psr/simple-cache\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/simple-cache.git\",
                \"reference\": \"753fa598e8f3b9966c886fe13f370baa45ef0e24\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/simple-cache/zipball/753fa598e8f3b9966c886fe13f370baa45ef0e24\",
                \"reference\": \"753fa598e8f3b9966c886fe13f370baa45ef0e24\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\SimpleCache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interfaces for simple caching\",
            \"keywords\": [
                \"cache\",
                \"caching\",
                \"psr\",
                \"psr-16\",
                \"simple-cache\"
            ],
            \"time\": \"2017-01-02 13:31:39\"
        },
        {
            \"name\": \"symfony/asset\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/asset.git\",
                \"reference\": \"4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/asset/zipball/4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\",
                \"reference\": \"4edb1a43bb961ea5f05f440eba8db82b1d58ea5b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/http-kernel\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/http-foundation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Asset\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Asset Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/cache\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/cache.git\",
                \"reference\": \"0fb57f94f58bcadd7a11215039bc59b5000968e5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/cache/zipball/0fb57f94f58bcadd7a11215039bc59b5000968e5\",
                \"reference\": \"0fb57f94f58bcadd7a11215039bc59b5000968e5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/cache\": \"~1.0\",
                \"psr/log\": \"~1.0\",
                \"psr/simple-cache\": \"^1.0\",
                \"symfony/polyfill-apcu\": \"~1.1\"
            },
            \"conflict\": {
                \"symfony/var-dumper\": \"<3.3\"
            },
            \"provide\": {
                \"psr/cache-implementation\": \"1.0\",
                \"psr/simple-cache-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/cache\": \"~1.6\",
                \"doctrine/dbal\": \"~2.4\",
                \"predis/predis\": \"~1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Cache\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Cache component with PSR-6, PSR-16, and tags\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"caching\",
                \"psr6\"
            ],
            \"time\": \"2017-09-03 14:06:51\"
        },
        {
            \"name\": \"symfony/class-loader\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/class-loader.git\",
                \"reference\": \"9c69968ce57924e9e93550895cd2b0477edf0e19\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/class-loader/zipball/9c69968ce57924e9e93550895cd2b0477edf0e19\",
                \"reference\": \"9c69968ce57924e9e93550895cd2b0477edf0e19\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/polyfill-apcu\": \"~1.1\"
            },
            \"suggest\": {
                \"symfony/polyfill-apcu\": \"For using ApcClassLoader on HHVM\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\ClassLoader\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony ClassLoader Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/config\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/config.git\",
                \"reference\": \"f9f19a39ee178f61bb2190f51ff7c517c2159315\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/config/zipball/f9f19a39ee178f61bb2190f51ff7c517c2159315\",
                \"reference\": \"f9f19a39ee178f61bb2190f51ff7c517c2159315\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/filesystem\": \"~2.8|~3.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/finder\": \"<3.3\"
            },
            \"require-dev\": {
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/finder\": \"~3.3\",
                \"symfony/yaml\": \"~3.0\"
            },
            \"suggest\": {
                \"symfony/yaml\": \"To use the yaml reference dumper\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Config\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Config Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-04 16:28:07\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\",
                \"reference\": \"a1e1b01293a090cb9ae2ddd221a3251a4a7e4abf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/debug\": \"~2.8|~3.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.3\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/event-dispatcher\": \"~2.8|~3.0\",
                \"symfony/filesystem\": \"~2.8|~3.0\",
                \"symfony/process\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/filesystem\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Console\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Console Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-06 16:40:18\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"8beb24eec70b345c313640962df933499373a944\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/8beb24eec70b345c313640962df933499373a944\",
                \"reference\": \"8beb24eec70b345c313640962df933499373a944\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/log\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \">=2.3,<2.3.24|~2.4.0|>=2.5,<2.5.9|>=2.6,<2.6.2\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"~2.8|~3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Debug\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Debug Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-01 13:23:39\"
        },
        {
            \"name\": \"symfony/dependency-injection\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/dependency-injection.git\",
                \"reference\": \"e593f06dd90a81c7b70ac1c49862a061b0ec06d2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/dependency-injection/zipball/e593f06dd90a81c7b70ac1c49862a061b0ec06d2\",
                \"reference\": \"e593f06dd90a81c7b70ac1c49862a061b0ec06d2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/container\": \"^1.0\"
            },
            \"conflict\": {
                \"symfony/config\": \"<3.3.1\",
                \"symfony/finder\": \"<3.3\",
                \"symfony/yaml\": \"<3.3\"
            },
            \"provide\": {
                \"psr/container-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"symfony/config\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/yaml\": \"~3.3\"
            },
            \"suggest\": {
                \"symfony/config\": \"\",
                \"symfony/expression-language\": \"For using expressions in service container configuration\",
                \"symfony/finder\": \"For using double-star glob patterns or when GLOB_BRACE portability is required\",
                \"symfony/proxy-manager-bridge\": \"Generate service proxies to lazy load them\",
                \"symfony/yaml\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\DependencyInjection\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony DependencyInjection Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-05 20:39:38\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"54ca9520a00386f83bca145819ad3b619aaa2485\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/54ca9520a00386f83bca145819ad3b619aaa2485\",
                \"reference\": \"54ca9520a00386f83bca145819ad3b619aaa2485\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony EventDispatcher Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\",
                \"reference\": \"b32a0e5f928d0fa3d1dd03c78d020777e50c10cb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Filesystem Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\",
                \"reference\": \"b2260dbc80f3c4198f903215f91a1ac7fe9fe09e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Finder Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/framework-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/framework-bundle.git\",
                \"reference\": \"e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/framework-bundle/zipball/e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\",
                \"reference\": \"e41df19ba3e731e9e69ae3822dfaf562fb9d46d7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/cache\": \"~1.0\",
                \"ext-xml\": \"*\",
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/cache\": \"~3.3\",
                \"symfony/class-loader\": \"~3.2\",
                \"symfony/config\": \"~3.3\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/event-dispatcher\": \"^3.3.1\",
                \"symfony/filesystem\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~3.3\",
                \"symfony/http-kernel\": \"~3.3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/routing\": \"~3.3\",
                \"symfony/stopwatch\": \"~2.8|~3.0\"
            },
            \"conflict\": {
                \"phpdocumentor/reflection-docblock\": \"<3.0\",
                \"phpdocumentor/type-resolver\": \"<0.2.0\",
                \"phpunit/phpunit\": \"<4.8.35|<5.4.3,>=5.0\",
                \"symfony/asset\": \"<3.3\",
                \"symfony/console\": \"<3.3\",
                \"symfony/form\": \"<3.3\",
                \"symfony/property-info\": \"<3.3\",
                \"symfony/serializer\": \"<3.3\",
                \"symfony/translation\": \"<3.2\",
                \"symfony/validator\": \"<3.3\",
                \"symfony/workflow\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"fig/link-util\": \"^1.0\",
                \"phpdocumentor/reflection-docblock\": \"^3.0|^4.0\",
                \"sensio/framework-extra-bundle\": \"^3.0.2\",
                \"symfony/asset\": \"~3.3\",
                \"symfony/browser-kit\": \"~2.8|~3.0\",
                \"symfony/console\": \"~3.3\",
                \"symfony/css-selector\": \"~2.8|~3.0\",
                \"symfony/dom-crawler\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/form\": \"~3.3\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/process\": \"~2.8|~3.0\",
                \"symfony/property-info\": \"~3.3\",
                \"symfony/security\": \"~2.8|~3.0\",
                \"symfony/security-core\": \"~3.2\",
                \"symfony/security-csrf\": \"~2.8|~3.0\",
                \"symfony/serializer\": \"~3.3\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~3.2\",
                \"symfony/validator\": \"~3.3\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/workflow\": \"~3.3\",
                \"symfony/yaml\": \"~3.2\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"suggest\": {
                \"ext-apcu\": \"For best performance of the system caches\",
                \"symfony/console\": \"For using the console commands\",
                \"symfony/form\": \"For using forms\",
                \"symfony/property-info\": \"For using the property_info service\",
                \"symfony/serializer\": \"For using the serializer service\",
                \"symfony/validator\": \"For using validation\",
                \"symfony/web-link\": \"For using web links, features such as preloading, prefetching or prerendering\",
                \"symfony/yaml\": \"For using the debug:config and lint:yaml commands\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony FrameworkBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-11 05:57:23\"
        },
        {
            \"name\": \"symfony/http-foundation\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-foundation.git\",
                \"reference\": \"2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-foundation/zipball/2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\",
                \"reference\": \"2cdc7de1921d1a1c805a13dc05e44a2cd58f5ad3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/polyfill-mbstring\": \"~1.1\"
            },
            \"require-dev\": {
                \"symfony/expression-language\": \"~2.8|~3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpFoundation\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony HttpFoundation Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-06 17:07:39\"
        },
        {
            \"name\": \"symfony/http-kernel\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/http-kernel.git\",
                \"reference\": \"70f5bb3cdd737624249953b61023411e26be5db7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/http-kernel/zipball/70f5bb3cdd737624249953b61023411e26be5db7\",
                \"reference\": \"70f5bb3cdd737624249953b61023411e26be5db7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/log\": \"~1.0\",
                \"symfony/debug\": \"~2.8|~3.0\",
                \"symfony/event-dispatcher\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~3.3\"
            },
            \"conflict\": {
                \"symfony/config\": \"<2.8\",
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/var-dumper\": \"<3.3\",
                \"twig/twig\": \"<1.34|<2.4,>=2\"
            },
            \"require-dev\": {
                \"psr/cache\": \"~1.0\",
                \"symfony/browser-kit\": \"~2.8|~3.0\",
                \"symfony/class-loader\": \"~2.8|~3.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/console\": \"~2.8|~3.0\",
                \"symfony/css-selector\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/dom-crawler\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/process\": \"~2.8|~3.0\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~2.8|~3.0\",
                \"symfony/var-dumper\": \"~3.3\"
            },
            \"suggest\": {
                \"symfony/browser-kit\": \"\",
                \"symfony/class-loader\": \"\",
                \"symfony/config\": \"\",
                \"symfony/console\": \"\",
                \"symfony/dependency-injection\": \"\",
                \"symfony/finder\": \"\",
                \"symfony/var-dumper\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\HttpKernel\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony HttpKernel Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-11 16:13:23\"
        },
        {
            \"name\": \"symfony/polyfill-apcu\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-apcu.git\",
                \"reference\": \"cec32398a973a9bfe9d2f94f4b5d5e186b40b698\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-apcu/zipball/cec32398a973a9bfe9d2f94f4b5d5e186b40b698\",
                \"reference\": \"cec32398a973a9bfe9d2f94f4b5d5e186b40b698\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.5-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting apcu_* functions to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"apcu\",
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2017-07-05 15:09:33\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"7c8fae0ac1d216eb54349e6a8baa57d515fe8803\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/7c8fae0ac1d216eb54349e6a8baa57d515fe8803\",
                \"reference\": \"7c8fae0ac1d216eb54349e6a8baa57d515fe8803\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.5-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for the Mbstring extension\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"mbstring\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"time\": \"2017-06-14 15:44:48\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\",
                \"reference\": \"b7666e9b438027a1ea0e1ee813ec5042d5d7f6f0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/routing\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/routing.git\",
                \"reference\": \"970326dcd04522e1cd1fe128abaee54c225e27f9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/routing/zipball/970326dcd04522e1cd1fe128abaee54c225e27f9\",
                \"reference\": \"970326dcd04522e1cd1fe128abaee54c225e27f9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"conflict\": {
                \"symfony/config\": \"<2.8\",
                \"symfony/dependency-injection\": \"<3.3\",
                \"symfony/yaml\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/common\": \"~2.2\",
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/yaml\": \"~3.3\"
            },
            \"suggest\": {
                \"doctrine/annotations\": \"For using the annotation loader\",
                \"symfony/config\": \"For using the all-in-one router or any loader\",
                \"symfony/dependency-injection\": \"For loading routes from a service\",
                \"symfony/expression-language\": \"For using expression matching\",
                \"symfony/http-foundation\": \"For using a Symfony Request object\",
                \"symfony/yaml\": \"For using the YAML loader\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Routing\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Routing Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"router\",
                \"routing\",
                \"uri\",
                \"url\"
            ],
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"9a5610a8d6a50985a7be485c0ba745c22607beeb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/9a5610a8d6a50985a7be485c0ba745c22607beeb\",
                \"reference\": \"9a5610a8d6a50985a7be485c0ba745c22607beeb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Stopwatch Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/templating\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/templating.git\",
                \"reference\": \"5067742484cc3fbcfc73bfe9c309e54fa044c1e1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/templating/zipball/5067742484cc3fbcfc73bfe9c309e54fa044c1e1\",
                \"reference\": \"5067742484cc3fbcfc73bfe9c309e54fa044c1e1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using debug logging in loaders\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Templating\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Templating Component\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/twig-bridge\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bridge.git\",
                \"reference\": \"9c12e8f02937a1edfa02fcc73282c7c1a18304b2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bridge/zipball/9c12e8f02937a1edfa02fcc73282c7c1a18304b2\",
                \"reference\": \"9c12e8f02937a1edfa02fcc73282c7c1a18304b2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"conflict\": {
                \"symfony/form\": \"<3.2.10|~3.3,<3.3.3\"
            },
            \"require-dev\": {
                \"fig/link-util\": \"^1.0\",
                \"symfony/asset\": \"~2.8|~3.0\",
                \"symfony/console\": \"~2.8|~3.0\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/form\": \"^3.2.10|^3.3.3\",
                \"symfony/http-kernel\": \"~3.2\",
                \"symfony/polyfill-intl-icu\": \"~1.0\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/security\": \"~2.8|~3.0\",
                \"symfony/security-acl\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/translation\": \"~2.8|~3.0\",
                \"symfony/var-dumper\": \"~2.8.10|~3.1.4|~3.2\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/yaml\": \"~2.8|~3.0\"
            },
            \"suggest\": {
                \"symfony/asset\": \"For using the AssetExtension\",
                \"symfony/expression-language\": \"For using the ExpressionExtension\",
                \"symfony/finder\": \"\",
                \"symfony/form\": \"For using the FormExtension\",
                \"symfony/http-kernel\": \"For using the HttpKernelExtension\",
                \"symfony/routing\": \"For using the RoutingExtension\",
                \"symfony/security\": \"For using the SecurityExtension\",
                \"symfony/stopwatch\": \"For using the StopwatchExtension\",
                \"symfony/templating\": \"For using the TwigEngine\",
                \"symfony/translation\": \"For using the TranslationExtension\",
                \"symfony/var-dumper\": \"For using the DumpExtension\",
                \"symfony/web-link\": \"For using the WebLinkExtension\",
                \"symfony/yaml\": \"For using the YamlExtension\"
            },
            \"type\": \"symfony-bridge\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bridge\\\\Twig\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Twig Bridge\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-07-29 21:54:42\"
        },
        {
            \"name\": \"symfony/twig-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/twig-bundle.git\",
                \"reference\": \"cb4251a3270d0ea35a503bf3aebb9d917f2c4585\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/twig-bundle/zipball/cb4251a3270d0ea35a503bf3aebb9d917f2c4585\",
                \"reference\": \"cb4251a3270d0ea35a503bf3aebb9d917f2c4585\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/config\": \"~3.2\",
                \"symfony/http-foundation\": \"~2.8|~3.0\",
                \"symfony/http-kernel\": \"^3.3\",
                \"symfony/twig-bridge\": \"^3.3\",
                \"twig/twig\": \"~1.34|~2.4\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"doctrine/annotations\": \"~1.0\",
                \"doctrine/cache\": \"~1.0\",
                \"symfony/asset\": \"~2.8|~3.0\",
                \"symfony/dependency-injection\": \"~3.3\",
                \"symfony/expression-language\": \"~2.8|~3.0\",
                \"symfony/finder\": \"~2.8|~3.0\",
                \"symfony/form\": \"~2.8|~3.0\",
                \"symfony/framework-bundle\": \"^3.2.8\",
                \"symfony/routing\": \"~2.8|~3.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0\",
                \"symfony/templating\": \"~2.8|~3.0\",
                \"symfony/web-link\": \"~3.3\",
                \"symfony/yaml\": \"~2.8|~3.0\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\TwigBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony TwigBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-09-01 13:23:39\"
        },
        {
            \"name\": \"symfony/web-server-bundle\",
            \"version\": \"v3.3.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/web-server-bundle.git\",
                \"reference\": \"b2508667fd9d468135f054c5afc59bc8a5ab7bc7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/web-server-bundle/zipball/b2508667fd9d468135f054c5afc59bc8a5ab7bc7\",
                \"reference\": \"b2508667fd9d468135f054c5afc59bc8a5ab7bc7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/console\": \"~3.3\",
                \"symfony/http-kernel\": \"~3.3\",
                \"symfony/process\": \"~3.3\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"type\": \"symfony-bundle\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.3-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Bundle\\\\WebServerBundle\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony WebServerBundle\",
            \"homepage\": \"https://symfony.com\",
            \"time\": \"2017-08-22 13:33:42\"
        },
        {
            \"name\": \"twig/twig\",
            \"version\": \"v2.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/twigphp/Twig.git\",
                \"reference\": \"eab7c3288ae6603d7d6f92b531626af2b162d1f2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/twigphp/Twig/zipball/eab7c3288ae6603d7d6f92b531626af2b162d1f2\",
                \"reference\": \"eab7c3288ae6603d7d6f92b531626af2b162d1f2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"require-dev\": {
                \"psr/container\": \"^1.0\",
                \"symfony/debug\": \"~2.7\",
                \"symfony/phpunit-bridge\": \"~3.3@dev\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.4-dev\"
                }
            },
            \"autoload\": {
                \"psr-0\": {
                    \"Twig_\": \"lib/\"
                },
                \"psr-4\": {
                    \"Twig\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\",
                    \"homepage\": \"http://fabien.potencier.org\",
                    \"role\": \"Lead Developer\"
                },
                {
                    \"name\": \"Armin Ronacher\",
                    \"email\": \"armin.ronacher@active-4.com\",
                    \"role\": \"Project Founder\"
                },
                {
                    \"name\": \"Twig Team\",
                    \"homepage\": \"http://twig.sensiolabs.org/contributors\",
                    \"role\": \"Contributors\"
                }
            ],
            \"description\": \"Twig, the flexible, fast, and secure template language for PHP\",
            \"homepage\": \"http://twig.sensiolabs.org\",
            \"keywords\": [
                \"templating\"
            ],
            \"time\": \"2017-06-07 18:47:58\"
        }
    ],
    \"packages-dev\": [],
    \"aliases\": [],
    \"minimum-stability\": \"dev\",
    \"stability-flags\": {
        \"lin3s/front-foundation\": 20
    },
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \"^7.1\"
    },
    \"platform-dev\": []
}
", "composer.lock", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/composer.lock");
    }
}
