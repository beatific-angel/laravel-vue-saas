# Configurations

---

- [Stripe & Authy](#section-1)
- [Mail](#section-2)
- [Force HTTPS](#section-3)

SaaSWeb have some configs to help you up and runing your Software as a Service project.
<br>

<a name="section-1"></a>

### Configure Stripe key

You should configure your Stripe key in your .env configuration file in order to the script works properly. You can retrieve your Stripe API keys from the <a href="https://dashboard.stripe.com" target="__blank">Stripe control panel</a>

### Obtaining an Authy API Key
For using the Two factor authentication in your project you need to add your AUTHY_SECRET key. please go to `https://www.twilio.com/docs/authy/twilioauth-sdk/quickstart/obtain-authy-api-key` for help.


```php 
STRIPE_KEY=
STRIPE_SECRET=
CASHIER_CURRENCY=usd
CASHIER_CURRENCY_SYMBOL=$

AUTHY_SECRET=
FORCE_HTTPS=false
TAWKTO_ID=
```
<br>
<a name="section-2"></a>

### Configure your mail

> {warning} Email Verification and Forgot Password, your application must be configured to send email before these features can be used.

```php 
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=null
```
<br>
<a name="section-3"></a>

### Force HTTPS
When pushing the project to a platform or production environment, assets or urls may be broken if the platform enforces HTTPS.
To enable urls to use HTTPS: Set `FORCE_HTTPS` variable in `.env` file to `true`.
By default `FORCE_HTTPS is false`.

```php 
FORCE_HTTPS=flase
```
> {warning} If `FORCE_HTTPS` does not exist in your `.env`, just add it as a new variable and assign a boolean value `true` or `false`.
