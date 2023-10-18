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

## Installing PHP debugger

1. Just follow instructions from [xdebug](https://xdebug.org/wizard)
2. Verify by `php_info.php` page (should have a XDebug section)

## Debugging PHP server with VSCode

### Prerequisites

1. PHP Debugger extension

### Setup Debug

Note: here we're debugging from a vscode's PHP server, not apache server (i don't know how to do that). So you can disable apache server when debugging

1. Go to debug panel and generate a configuration file
2. Find this config preset and add it. It is called "PHP: Launch Built-in web server"
3. The default configs from the preset should work just fine, set some breakpoints and launch the debug server
4. Open browser and navigate to file you need to debug, example link: `http://localhost:59605/src/pages/queryProducts.php`

## Installing Tailwind CSS

Following guidelines from [tailwind install page](https://tailwindcss.com/docs/installation)

1. We're using the standalone CLI in this ([blog post](https://tailwindcss.com/blog/standalone-cli))
2. Let's download the executable tailwind CLI and put it in `bin` (get the file from [github](https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.3.3) and rename as `tailwindcss.exe`
3. Initialize Tailwind: `bin/tailwindcss init`
4. Configure template path in `tailwind.config.js`, setting contents to `"./src/**/*.{html,js,php}"`

   ```[javascript]
   module.exports = {
      content: ["./src/**/*.{html,js,php}"],
      theme: {
         extend: {},
      },
      plugins: [],
      }
   ```

5. Create `src/input.css`

   ```[css]
   @tailwind base;
   @tailwind components;
   @tailwind utilities;
   ```

6. Run the tailwind process

   ```[bash]
   npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
   ```

   This will watch all your content files and build/update the `output.css` to match which tailwind classes/utils that has been use in our project. Remember to

   - use the `output.css` file in your HTMLs
   - Run the `tailwindcss --watch` when you want to see styles updated on your page

7. Try the `src/pages/tailwind` page out

## Installing JQuery

JQuery is just utility JS code, and it's small so we'll just download it to our project (minimize network problem from CDN)

1. Go to [releases page](https://releases.jquery.com/), get the minified JS code from [link](https://code.jquery.com/jquery-3.7.1.min.js)
2. Put it into `dist/jquery.min.js`
3. Require it with `<script type="text/javascript" src="path/to/jquery.min.js"></script>` in any files that uses it

