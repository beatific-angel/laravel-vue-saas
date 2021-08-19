<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                    data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ return_if(on_page('account.dashboard'), ' active') }}"
                            href="{{ route('account.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ return_if(on_page('account.index') or on_page('account.profile.index') or on_page('account.password.index') or on_page('account.deactivate.index') or on_page('account.twofactor.index') , ' active') }}" href="#navbar-examples" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-examples">
                            <i class="fas fa-user"></i>
                            <span class="nav-link-text">Account</span>
                        </a>
                        <div class="collapse" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('account.index') }}">
                                        Account overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('account.profile.index') }}">
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.password.index'), ' active') }}"
                                        href="{{ route('account.password.index') }}">
                                        Change password
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.deactivate.index'), ' active') }}"
                                        href="{{ route('account.deactivate.index') }}">
                                        Deactivate account
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.twofactor.index'), ' active') }}"
                                        href="{{ route('account.twofactor.index') }}">
                                        {{-- <i class="fas fa-lock"></i> --}}
                                        Two factor authentication
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ return_if(on_page('account.subscription.swap.index') or on_page('account.subscription.cancel.index') or on_page('account.subscription.invoice.index') or on_page('account.subscription.card.index') or on_page('account.subscription.team.index'), ' active') }}" href="#navbar-components" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-components">
                            {{-- <i class="ni ni-ui-04 text-info"></i> --}}
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <span class="nav-link-text">Subscription</span>
                        </a>
                        @subscribed
                        @notpiggybacksubscription
                        <!-- Subscription Links -->
                        <div class="collapse" id="navbar-components">
                            <ul class="nav nav-sm flex-column">
                                @subscriptionnotcancelled
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.swap.index'), ' active') }}"
                                        href="{{ route('account.subscription.swap.index') }}">
                                        Change plan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.cancel.index'), ' active') }}"
                                        href="{{ route('account.subscription.cancel.index') }}">
                                        Cancel subscription
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.invoice.index'), ' active') }}"
                                        href="/account/subscription/invoice/invoices">
                                        Invoices
                                    </a>
                                </li>
                                @endsubscriptionnotcancelled

                                @subscriptioncancelled
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.resume.index'), ' active') }}"
                                        href="{{ route('account.subscription.resume.index') }}">
                                        Resume subscription
                                    </a>
                                </li>
                                @endsubscriptioncancelled
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.card.index'), ' active') }}"
                                        href="{{ route('account.subscription.card.index') }}">
                                        Update card
                                    </a>
                                </li>
                                @teamsubscription
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.subscription.team.index'), ' active') }}"
                                        href="{{ route('account.subscription.team.index') }}">
                                        Manage team
                                    </a>
                                </li>
                                @endteamsubscription
                            </ul>
                        </div>
                        @endnotpiggybacksubscription
                        @endsubscribed
                    </li>
                    @teamsubscription
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('account.team.my-team'), ' active') }}" href="#navbar-forms" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-forms">
                            <i class="fas fa-users"></i>
                            <span class="nav-link-text">Team</span>
                        </a>
                        <div class="collapse" id="navbar-forms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('account.team.i'), ' active') }}"
                                        href="{{ route('account.team.my-team') }}">
                                        <i class="fas fa-users-cog"></i>
                                        My team
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endteamsubscription
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('developer.index'), ' active') }}" href="#navbar-dev" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-forms">
                            <i class="fas fa-code"></i>
                            <span class="nav-link-text">Developer</span>
                        </a>
                        <div class="collapse" id="navbar-dev">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('developer.index'), ' active') }}"
                                        href="{{ route('developer.index') }}">
                                        Developer panel
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- Example Resources companies for tenant, uncomment if you want to test --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-tables">
                            <i class="fas fa-building"></i>
                            <span class="nav-link-text">Companies</span>
                        </a>
                        <div class="collapse" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                @foreach($user_companies as $company)
                                <li class="nav-item">
                                    <a href="{{ route('tenant.dashboard', $company) }}"
                                        class="nav-link">{{ $company->name }}
                                    </a>
                                </li>
                                @endforeach
                                <li class="nav-item">
                                    <!-- Create New Company Link -->
                                    <a class="nav-link" href="{{ route('account.companies.create') }}">
                                        New company
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <!-- View All Link -->
                                    <a class="nav-link" href="{{ route('account.companies.index') }}">
                                        View all
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    {{-- Example project using istenant trait --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ return_if(on_page('tenant.projects.index'), ' active') }}"
                            href="{{ route('tenant.projects.index') }}">
                            <i class="fas fa-store"></i>
                            <span class="nav-link-text">Projects</span>
                        </a>
                    </li> --}}
                    @notsubscribed
                    <li class="nav-item">
                        <a class="nav-link {{ return_if(on_page('plans.index') or on_page('plans.teams.index'), ' active') }}" href="#navbar-plans" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="navbar-forms">
                            <i class="fas fa-dollar-sign"></i>
                            <span class="nav-link-text">Pricing Plan</span>
                        </a>
                        <div class="collapse" id="navbar-plans">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link{{ return_if(on_page('plans.index'), ' active') }}"
                                            href="{{ route('plans.index') }}">
                                            <i class="far fa-user"></i>
                                            User Plan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link{{ return_if(on_page('plans.teams.index'), ' active') }}"
                                    href="{{ route('plans.teams.index') }}">
                                            <i class="fas fa-users"></i>
                                            Team Plan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                    </li>
                    @endnotsubscribed
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('ticket.index') or on_page('ticket.create'), ' active') }}" href="#navbar-tickets" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-forms">
                            <i class="fas fa-ticket-alt"></i>
                            <span class="nav-link-text">Tickets</span>
                        </a>
                        <div class="collapse" id="navbar-tickets">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('ticket.index'), ' active') }}"
                                        href="{{ route('ticket.index') }}">
                                        <i class="fas fa-clipboard-check"></i>
                                        My tickets
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link{{ return_if(on_page('ticket.create'), ' active') }}"
                                        href="{{ route('ticket.create') }}">
                                        <i class="far fa-plus-square"></i>
                                        New ticket
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('account.tokens.index'), ' active') }}" href="#navbar-maps" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-maps">
                            <i class="fas fa-plug"></i>
                            <span class="nav-link-text">API</span>
                        </a>
                        <div class="collapse" id="navbar-maps">
                            <ul class="nav nav-sm flex-column">
                                <a class="nav-link{{ return_if(on_page('account.tokens.index'), ' active') }}"
                                    href="{{ route('account.tokens.index') }}">
                                    API tokens
                                </a>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('account.mynotification.index'), ' active') }}" href="#navbar-notifications" data-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="navbar-notifications">
                            <i class="fas fa-bell"></i>
                            <span class="nav-link-text">Notification</span>
                        </a>
                        <div class="collapse" id="navbar-notifications">
                            <ul class="nav nav-sm flex-column">
                                <a class="nav-link{{ return_if(on_page('account.mynotification.index'), ' active') }}"
                                    href="{{ route('account.mynotification.index') }}">
                                    Notification
                                </a>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://saas-demo.creatydev.com/docs" target="blank__"
                            target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Getting started</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>