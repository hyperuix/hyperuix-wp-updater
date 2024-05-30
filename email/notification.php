<!doctype html>
<html>
<head>
<style>
    body { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 14px; color: #2f2f2f; }
    p { margin: 0 0 1em; line-height: 1.5em; }
</style>
</head>
<body>

<p>Hi <?= $name ?>,<br />
As part of our commitment at HYPERUIX to keep your website secure we have completed a routine review of your website and determined that the following items are out of date and should be updated:</p>

<hr style="margin: 20px 0; border: 0; border-bottom: 1px dotted #eee;" />

<p><?php echo nl2br($message); ?></p>

<hr style="margin: 20px 0; border: 0; border-bottom: 1px dotted #eee;" />

<p>It's important to keep your website up to date to ensure known security vulnerabilities are patched and secured.</p>
<p>If you would like us to update and patch your website to keep it secure, please contact us (by simply replying to this email) and we'll get it organised for you.</p>

<p>Kind regards,<br />
<a href="https://hyperuix.com.au" style="color: #c9fc01;">HYPERUIX</a></p>

<p><img src="https://staging.hyperuix.com.au/app/uploads/2024/03/logo.png" style="width: 130px; height: auto;" /></p>
</body>
</html>
