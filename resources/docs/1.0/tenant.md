# Multi-Tenant SaaS Architecture

---

- [Single Database](#section-1)

Multi-tenant architectures are the industry standard for enterprise SaaS applications, it is a good choice for businesses that want to get started with fewer hardware requirements and easier onboarding. It is also ideal for customers who don’t have the internal resources needed to handle the maintenance requirements of single tenant SaaS environments.

<a name="section-1"></a>

### Single Database Multi-tenancy

When using the "single database" version, data from all tenants will be gathered into a single database and separated by columns containing tenantID's.

SaasWeb using this approach and Tenant relationships are handled automatically.

### Model setup
For using single databse multi-tenancy call `ForTenants` trait on a model

```php 
use CreatyDev\App\Tenant\Traits\ForTenants;

class Project extends Model
{
    use ForTenants;
}
```
### Tenants CRUD Operations
By adding `ForTenants` trait on a model. you can now call CRUD operations directly.

```php 
$todos = Todo::create([
    'name' => 'Todo name'
]);
$todos = Todo::get();
```
### Normal CRUD Operations
SaaSWeb gives you ability to fetch data to perform normal CRUD operations on models with `ForTenants` trait.
To do so, you can use `withoutForTenants` scope when fetching records associated with that model.

> {warning} For example this operations can be done on: admin dashboard.

```php 
$todos = Todo::withoutForTenants()->get();
```

<br>

### Routing

All `tenant` routes are under the routes folder in the `tenant.php` file.

> {info} Tenant routes placed separately, is much easier to know which routes are for tenants.