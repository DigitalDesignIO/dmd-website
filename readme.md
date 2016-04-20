# Digital Media Design - HS Weingarten

## Dependencies

In order to run and build this project you need to install the following on your machine:

* A local server e.g. [Wamp](http://www.wampserver.com/en/) or [Xampp](https://www.apachefriends.org/index.html) for development
* [GIT](https://git-scm.com/)

Nice to have:

* [composer](https://getcomposer.org/) (lets you install php packages / libraries from the command line, you need it for the kirby cli)
* Kirby CLI (enables you to install the kirby starterkit, update the kirby core etc, @see [here](https://libraries.io/github/getkirby/cli) )

## Getting started

1. If you know your way around Git you can either clone this project into a project directory of your (xampp) server. Make sure to have the '--recursive' flag set to not miss the git submodule required for this project to work!

```bash
 $ cd c://yourXampp/htdocs/folder
 $ git clone https://github.com/DigitalDesignIO/ddkirby.git --recursive
```

2. Get missing files: Because this repository is public you are missing some important files that are not committed to the repository (e.g. the User Database). Get in contact with Klemens Ehret or Andreas Lorer for further instructions.

3. Place the missing files like the following:
* 'license.php' into 'app/site/config/license.php'
* 'content/' into 'app/content/*'
* 'accounts/' into 'app/site/accounts/*'

4. If you've done everything right, you can fire up your webserver and visit the site at: `"http://localhost/your/project"`

## The Panel

You can find the login for Kirby's admin interface at your `"http://localhost/your/project/panel"`

## Documentation

<http://getkirby.com/docs>

