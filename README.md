# Firework
![Maintained](https://img.shields.io/badge/Maintained%3F-yes-green.svg)
[![Github repository link](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](github.com)
[![Support us](https://img.shields.io/badge/Patreon-F96854?style=for-the-badge&logo=patreon&logoColor=white)](example.com)

**TL;DR: Lightweight and fast framework for creating web apps.**
[Visit our site for more information](example.com).

## Benefits
 - The most lightweight php web framework with simple VC (View-Controller) architecture.
 - Fast.
 - Easy to modify and use in other projects.
 - Your project won't be burdened with unnecessary files.
 - Fast do develop and deploy.
 - Easy to use for newbies in php.

## Installation in 3 steps
 1. Make sure you've installed apache, php, npm and composer on your server.
 2. Download a Firework:
`composer create-project slidi/firework example`.
 3. Open a directory:
`cd example`
 4. Run an Installer file:
`php firework.php install`.
 Congratulations, you successfully installed Firework!
 
## Usage in 2 steps
 1. Put your HTML into `/app/views` folder, .css/.sass/.scss and .js/.ts files into the `/static` folder.
 2. Rename `.html` files to `.fire.php`, replacing the dynamic variables you need with `{{variableName}}` in your code.
 **Make sure you've installed gulp if you're using .ts/.scss/.sass files compillation.**

## Running in 1 step
 1. Run `php firework.php run` and chill out.
 
## License
- **MPL 2.0 (Mozilla Public License Version 2.0) license.**
Free to private and commercials use, modification and distribution.
More about license [here](https://www.mozilla.org/en-US/MPL/2.0/).
