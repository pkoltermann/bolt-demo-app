<?php

namespace Bundle\Site;

use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use Silex\Application;
use Bolt\Extension\SimpleExtension;

/**
 * Site bundle extension loader.
 *
 * This is the base bundle you can use to further customise Bolt for your
 * specific site.
 *
 * It is perfectly safe to remove this bundle, just remember to remove the
 * entry from your .bolt.yml or .bolt.php file.
 *
 * For more information on building bundles see https://docs.bolt.cm/extensions
 */
class CustomisationExtension extends SimpleExtension
{
    public function boot(Application $app)
{
    parent::boot($app);
    /** @var Logger $logger */
    $logger = $app['logger.system'];
    $logger->pushHandler(
        new ErrorLogHandler()
    );
}
}
