## Quick Start

```sh
$ git clone --recursive git@github.com:beebmx/kirby-starter.git
$ cd kirby-plain-mt
$ mkdir html/thumbs site/accounts html/assets/avatars
$ chmod 777 html/thumbs site/accounts html/assets/avatars
$ chmod -R 777 html/content
$ touch .env
$ composer install
$ composer clear-cache
```
`chmod 777` permissions are only for development. Don't use in production.
In the `.env` file you should put the `KIRBY_LICENSE`

###If is installed on MediaTemple

```sh
$ curl -sS https://getcomposer.org/installer | php -d allow_url_fopen=On
$ php -d allow_url_fopen=On composer.phar install
$ php -d allow_url_fopen=On composer.phar clear-cache
```

### Update panel
```sh
$ git submodule foreach --recursive git checkout master
$ git submodule foreach --recursive git pull
```

## Kirby

Kirby is a file-based CMS.
Easy to setup. Easy to use. Flexible as hell.

### Trial

You can try Kirby on your local machine or on a test
server as long as you need to make sure it is the right
tool for your next project.

### Buy a license

You can purchase your Kirby license at
<http://getkirby.com/buy>

A Kirby license is valid for a single domain. You can find 
Kirby's license agreement here: <http://getkirby.com/license>

### The Plainkit

Kirby's Plainkit is the most minimal setup you can get started with.
It does not include any content, styles or other kinds of decoration, 
so it's perfect to use this as a starting point for your own project.

### The Panel

You can find the login for Kirby's admin interface at
http://yourdomain.com/panel. You will be guided through the signup
process for your first user, when you visit the panel
for the first time.

### Installation

Kirby does not require a database, which makes it very easy to
install. Just copy Kirby's files to your server and visit the
URL for your website in the browser.

**Please check if the invisible .htaccess file has been
copied to your server correctly**

#### Requirements

Kirby runs on PHP 5.4+, Apache or Nginx.

#### Download

You can download the latest version of the Starterkit
from http://download.getkirby.com

#### With Git

If you are familiar with Git, you can clone Kirby's
Starterkit repository from Github.

    git clone --recursive https://github.com/getkirby/plainkit.git

### Documentation
<http://getkirby.com/docs>

### Issues and feedback

If you have a Github account, please report issues
directly on Github:

- <https://github.com/getkirby/kirby/issues>
- <https://github.com/getkirby/panel/issues>
- <https://github.com/getkirby/plainkit/issues>

Otherwise you can use Kirby's forum: http://getkirby.com/forum
or send us an email: <support@getkirby.com>

### Support
<http://getkirby.com/support>

### Copyright

© 2009-2014 Bastian Allgeier (Bastian Allgeier GmbH)
<http://getkirby.com>