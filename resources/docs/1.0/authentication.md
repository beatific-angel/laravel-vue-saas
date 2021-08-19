# Authentication

---

- [Registration](#section-1)
- [Login](#section-2)

SaaSWeb use the default Laravel Authentication and includes additional features such as email verification, forgot password etc ...

<a name="section-1"></a>

### Registration
Users can register for an account through your application visiting the `/register` route.


<a name="section-2"></a>

### Login
After a user has created an account through your application, this user will receive an email to verify the account, after that they can login by visiting the `/login` route. After successfully logging in the user will then be redirected to their dashboard.

> {warning} Email Verification and Forgot Password, your application must be configured to send email before these features can be used.

