# Billing and Subscription

---

- [Stripe](#section-1)
- [Plan](#section-2)
- [Coupon](#section-3)
- [Subscription](#section-4)
- [Cancel subscription](#section-5)
- [Update card](#section-6)
- [Invoices](#section-7)

With SaaSWeb  you can charge your customers to access your application or features in your application. The script have all you need to bill like a pro.

SaaSWeb uses Stripe by default; however, new billing gateway will be add soon.

> {warning} You should configure your Stripe key in your .env configuration file in order to billing and subscription work properly. You can retrieve your Stripe API keys from the <a href="https://dashboard.stripe.com" target="__blank">Stripe control panel</a>
<a name="section-1"></a>

### Stripe

Setting up your app to work with Stripe is super simple. This is going to be the easiest way to configure your application to accept payments.

### Create a Free Stripe Account
It's easy to setup a free Stripe account. Visit <a href="https://stripe.com/register" target="__blank">https://stripe.com/register</a> and create an account.

<img src="{{ asset('img/screens/stripe-dashboard.png') }}">

### Adding Stripe API keys
Now, that you have your Stripe API keys you will need to add them to your application `.env` file. Find and update your stripe keys in the following variables.

> {warning} You can test out payments with your Test API keys, but you will need to activate your account before you can view your Live API keys. To toggle between test or live data, you'll need to toggle Viewing Test Data (see previous screenshot).

```php 
STRIPE_KEY=
STRIPE_SECRET=
CASHIER_CURRENCY=usd
CASHIER_CURRENCY_SYMBOL=$
```
> {warning} Notice, when you are ready to go live with accepting real payments you will need to update to live Stripe API keys.

### Stripe Test Credit Cards
Here is an example Stripe credit card numbers that you can use for testing purposes:
CARD NUMBER : `5555555555554444`
EXP DATE: `Any date in the future`
CVC: `Any 3 digit code`
ZIP: `Any 5 digit ZIP code`

Other Stripe credit card numbers can be found <a href="https://stripe.com/docs/testing" target="__blank"> here. </a>

<a name="section-2"></a>

### Plan
In SaaSWeb admin panel, create, edit and delete plans are prety easy.
> {info} No need to waste your time, go back and forth to create plan on Stripe dashboard. Just create plan and coupon once, they will automaticaly create on the fly on your stripe dashboard.

### Create Plan
To create a new plan you can visit `/admin/plans/create`

<img src="{{ asset('img/screens/plan_create.png') }}">

### List all Plan
To create a new plan you can visit `/admin/plans`

<img src="{{ asset('img/screens/plan.png') }}">

<a name="section-3"></a>

### Coupon
Create a coupon is so easy with SaaSWeb
### Create coupon
To create a new coupon you can visit `/admin/coupons/create`
<img src="{{ asset('img/screens/coupon_create.png') }}">

### List all Coupon
To create a new coupon you can visit `/admin/coupons`
<img src="{{ asset('img/screens/coupon.png') }}">

<a name="section-4"></a>

### Subscription
Any register user on your application can be subscripe for any available plans.
<img src="{{ asset('img/screens/user_plan.png') }}">
<br>
Subscription page
<img src="{{ asset('img/screens/user_subscription.png') }}">
<br>
### Change subscription
To change subscription plan user can go to  `/account/subscription/swap`
<img src="{{ asset('img/screens/change_plan.png') }}">

<a name="section-5"></a>

### Cancel subscription
User can cancel any subscription, to do si it can go to  `/account/subscription/cancel`
<img src="{{ asset('img/screens/cancel_subscription.png') }}">

<a name="section-6"></a>

### Update card
User can securely update his credit card information for future payments.

<img src="{{ asset('img/screens/update_card.png') }}">

<a name="section-7"></a>

### Invoices
In order to see the Invoices PDF, go to  `/account/subscription/invoice/invoices`
<img src="{{ asset('img/screens/invoice.png') }}">

<br>
> {info} SaaSWeb is using Laravel Cashier Billing under the hood, if you need additional configurations you may want to visit the <a href="https://laravel.com/docs/5.6/billing" target="__blank">Laravel Cashier </a> documentation.
