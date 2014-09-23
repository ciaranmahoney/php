Php client library for Insightly web API (v2.1)
===============================================

The Insightly PHP SDK enables PHP developers to quickly integrate their applications with the Insightly REST API (version 2.1).

NOTE: works best with PHP version 5.5.x, some users have reported issues with parse errors using older versions of PHP.

The library handles low level communication, authentication,
and encoding to minimize learning curve and debugging overhead for new users.
The library provides the ability to read/write/delete
all major Insightly objects, including:

* Contacts
* Events
* Organizations
* Opportunities
* Projects

To use the library, simply add insightly.php to your PHP include-path.
Then making requests is as simple as:

```php
require("insightly.php");

$i = new Insightly('your-api-key');
$contacts = $i->getContacts();
```

The API interface is provided by the `Insightly` class.
Please refer to the source-code documentation for more information.

The library was authored by Nathan Davis, and is currently in beta.
