<?php

// tests/bootstrap.php

include "vendor/autoload.php";

\Pimcore\Bootstrap::setProjectRoot();
\Pimcore\Bootstrap::bootstrap();
\Pimcore\Bootstrap::kernel();