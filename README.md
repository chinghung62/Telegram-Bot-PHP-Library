# Telegram-Bot-PHP-Library
Telgram Bot PHP is a very basic and non-modular PHP library for fast implementation, providing opportunity for a quick experience of bot deployment. It is a beginner-friendly library compared to other powerful libraries.

All types, methods and parameters are supported **EXCEPT** those for *WebApp*, *Payments*, *Telegram Passport* and *Games*. Some of the methods for *Stickers* are not provided.

This library refers and follows up to Telegram Bot API **6.5 (February 3, 2023)**.

## Introduction
Telegram Bot PHP Library is a library written in PHP, for faster implementation of a newly created Telegram bot. It supports chat bot development by making development easier, reducing complexity and making the code shorter.
- Receive incoming HTTPS POST requests (contains bot update data) sent from Telegram servers, and respond to these updates by interacting with Telegram Bot API to make bot 'alive'. This library is for bot script that uses webhook to receive bot updates.
- Refer [Telegram Bot](https://core.telegram.org/bots) to know how to create a Telegram bot.
- Refer [Telegram Bot API](https://core.telegram.org/bots/api) for more informations about available methods, available types and objects.
- Please refer to the [Telegram's Terms of Service](https://telegram.org/tos). Inappropiate usage might potentially get your account banned. Use this library as your own risk.

## Installation
This library requirs no installation. Manually download the library `.php` file and import into your script using `include` or `require` keyword.

## Quick Start
> *Before using the library... make sure you know how to set up and host a bot.*

**Here are the steps:**
1. Contact [@BotFather](https://t.me/botfather) to create a bot. Get the API token of the bot.
2. Setup a server and place your bot's script on the server (e.g., your PC or web hosting services).
3. Set a webhook by using [setWebhook](https://core.telegram.org/bots/api#setwebhook) method. Insert URL in your browser as below:
   `https://api.telegram.org/bot<token>/setWebhook?url=<bot_script_URL>`<br>
   where:<br>
   *`token`* : API token of the bot<br>
   *`bot_script_URL`* : URL of the script for the bot
4. Refer [here](https://core.telegram.org/bots) for more information.

**How do I start to code my bot?**
> *Some [code examples](Code%20Examples) are provided as the initial guidance in bot development. These codes are simple and newbie friendly, no more worries. Of course, make sure you know PHP! You may [learn PHP from W3Schools](https://www.w3schools.com/php/default.asp) or from other resources.*

## Documentations
*The full documentation for Telegram Bot PHP Library will be released in the future. Stay tuned.*
