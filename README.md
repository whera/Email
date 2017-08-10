# E-mail Value Object
Value object for handling email-type values

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/whera/Email/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/whera/Email/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/whera/Email/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/whera/Email/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/whera/Email/badges/build.png?b=master)](https://scrutinizer-ci.com/g/whera/Email/build-status/master)

## Installation
Via Composer:

```bash
composer require wsw/email
```

## Usage
```php
<?php

use WSW\Email\Email;

try {
    $email = new Email('ronaldo@whera.com.br');

    echo $email->getEmail();    // (string) ronaldo@whera.com.br
    echo $email->getUsername(); // (string) ronaldo
    echo $email->getHostname(); // (string) whera.com.br
    print_r($email->getMx());   // (array) list mx records

    echo $email; // (string) ronaldo@whera.com.br

} catch (\InvalidArgumentException $e) {
    echo $e->getMessage();
}
```

## Testing
``` bash
$ composer test
```

## Security
If you discover any security related issues, please email **ronaldo@whera.com.br** instead of using the issue tracker.

## Credits
- [Ronaldo Matos Rodrigues](https://github.com/whera)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.