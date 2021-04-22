# System testing example

A Laravel project to show you how you can do system testing in Laravel. 

Please take note of the following: 

1. In Laravel *system testing*  is called *feature testing*.
2. This project shows system with a user management module. There is no authentication in this app, the user module is purely there because it is relatable. At least better than Foos and Bars.

## Changes necessary to your project

Please read the very good documentation at: https://laravel.com/docs/8.x/testing

If you cache your config, please run `config:clear` **before** running the tests.

- **phpunit.xml**
  
    Uncomment the database lines:
    ```xml
    <server name="DB_CONNECTION" value="sqlite"/> 
    <server name="DB_DATABASE" value=":memory:"/> 
    ```
  
## Code coverage

Please install XDebug and configure PhpStorm correctly.

- **Installing XDebug**

    - XAMPP: https://odan.github.io/2020/12/03/xampp-xdebug-setup-php8.html
    - Homebrew: https://xdebug.org/docs/install#pecl
    - Linux: https://xdebug.org/docs/install#linux
    
- **Configuring PhpStorm**

    Make sure to follow the XDebug 3 steps: https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html.

    You can also just right-click a test folder/class/method and press `run with coverage`. This will show a wizard in
    which you can configure XDebug.

## Debugging from the browser

This isn't really about testing anymore, but it can definitely help!

1. Install browser extension https://www.jetbrains.com/help/phpstorm/browser-debugging-extensions.html
2. Create breakpoint by clicking on line number
3. Start debug session: https://www.jetbrains.com/help/phpstorm/zero-configuration-debugging.html
