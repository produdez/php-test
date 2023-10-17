# Template Project

## Prerequisites

Set `php.exe` as environment variable

## Setting up ORM

### Install Package Manager `composer`

Can install globally or locally (in same folder as project)

1. Follow the official [instruction](https://getcomposer.org/download/)

If you install locally your project should have a file called `composer.phar`

### Install Dependencies

If you installed `composer` globally with an installer, you can use command `composer`, else if you installed composer in-project please use `php composer.phar`

1. Install deps with `composer install`

### Config Doctrine ORM

Reference Official Doc ([Getting Started](https://www.doctrine-project.org/projects/doctrine-orm/en/2.16/tutorials/getting-started.html))

1. `bootstrap.php`
   1. Make sure to point to the folder containing your "Models", in this case it's `/src/models`
2. `bin/doctrine`
   1. Just make sure to point to `bootstrap.php`
3. Format your Model classes properly following Doctrine's

### Verify Doctrine Installation

1. Start XAMPP and run MySQL
2. Run `php bin/doctrine orm:schema-tool:update --force --dump-sql`
3. You should get some green text saying `[OK] Database schema updated successfully!`
4. Get more of the tools' information by using `--help`

### Test The ORM code out

1. Run Apache Server
2. Go to `http://localhost/src/pages/newProduct.html` to create new product
3. Then check out `showProduct.php` or `queryProducts.php` for a list of products

