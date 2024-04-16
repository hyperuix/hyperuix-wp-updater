# Hyperuix Wordpress Notifier

WordPress plugin that monitors installation for core, plugin and theme updates and emails the client when they are available.

## Installation into a Bedrock site

#### Install

```
# 1. Get it ready (to use a repo outside of packagist)
composer config repositories.hyperuix-wp-updater git https://github.com/hyperuix/hyperuix-wp-updater

# 2. Install the Plugin
composer require hyperuix/hyperuix-wp-updater
```

#### Activate / Configure

- Activate the plugin
- Settings > Update Watcher:
    - For now, please set the cron to `Other Cron` and manually setup a cron for once a month (to start 1 month after the site is launched)
    - Set the correct emails
    - Set the recipient's name
    - Only notify for active themes/plugins
