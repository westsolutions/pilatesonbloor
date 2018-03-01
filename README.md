# Barebones
Barebones starter template for static site integrations.

## Requirements
- NodeJS must be installed.
- Yarn globalley installed.
- A PHP server.

## Installation
- Clone the repo and run `yarn`
- Run php server. Recommended `valet link`
- Enter your site URL in `src/config.json`

## watch

This build provides you with a compiler that watches your files and serves up your domain on localhost with live reload enabled.

- Run `yarn start` and open `http://localhost:3000`

## build

When going live, building the project will compile and optimize all assets and put them in `/dist`.

- Run `yarn build:production`

## Third Party Librairies

To install third party libraries, use `yarn add {package name}`. You can include sass from `node_modules` with `~package/path.scss`.

Use the ES6 syntax `import` to import libraries into your `main.js`. Or if you want another separate script file, add it to `src/config.json` entry in a new array.
