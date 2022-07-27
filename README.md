# Telegram-Bot-PHP-Library
Telegram Bot PHP Library is a library written in PHP, for faster deployment of a newly created Telegram bot. It supports chat bot development by making development easier, reducing complexity and making the code shorter.

- Receive incoming HTTPS POST requests (contains bot update data) sent from Telegram servers, and respond to these updates by interacting with Telegram Bot API to make bot 'alive'. This library is for bot script that uses webhook to receive bot updates.
- Refer [Telegram Bot](https://core.telegram.org/bots) to know how to create a Telegram bot.
- Refer [Telegram Bot API](https://core.telegram.org/bots/api) for more informations about available methods, available types and objects.
- Please refer to the [Telegram's Terms of Service](https://telegram.org/tos). Inappropiate usage might potentially get your account banned. Use this library as your own risk.
<br>

### Before using the library... make sure you know how to set up a bot.
**Here are the steps:**
1. Contact [@BotFather](https://t.me/botfather) to create a bot. Get the API Token of the bot.
2. Setup a server and place your bot's script on the server (e.g., your PC or web hosting services).
3. Set a webhook by using [setWebhook](https://core.telegram.org/bots/api#setwebhook) method. Insert URL in your browser as below:<br>
   `https://api.telegram.org/bot<token>/setWebhook?url=<bot_script_URL>`<br>
   where:<br>
   `<token>`: API token of the bot<br>
   `<bot_script_URL>`: URL of the script for the bot<br><br>
4. Refer [here](https://core.telegram.org/bots) for more information.
<br>

### How do I start to code my bot?
Some [code example](Code%20Examples/) is provided as a initial guidance in bot development. These codes are simple and newbie friendly, no more worries.
