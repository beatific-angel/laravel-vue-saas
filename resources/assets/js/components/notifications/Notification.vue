<template>
<div>
    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="ni ni-bell-55"></i>
        <span v-if="notifications.length > 0" class="badge badge-md badge-circle badge-floating badge-danger border-white">{{ notifications.length }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
        <!-- Dropdown header -->
        <div class="px-3 py-3" v-if="notifications.length > 0">
            <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">{{ notifications.length }}</strong> new notifications.</h6>
        </div>
        <div class="px-3 py-3 text-center" v-else>
            <h6 class="text-sm text-muted m-0">You don't have any notification</h6>
            <br> <i class="far fa-bell" style="font-size:18px"></i>
        </div>
        <!-- List group -->
        <div class="list-group list-group-flush">
            <span v-for="(notification, index) in notifications" :key="index">
            <a :href="notification.data.url" class="list-group-item list-group-item-action">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <!-- Avatar -->
                        <i class="far fa-bell" style="font-size:18px"></i>
                    </div>
                    <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0 text-sm">{{ notification.data.subject }}</h4>
                            </div>
                        </div>
                        <p class="text-sm mb-0">{{ notification.data.body }}</p>
                        <div class="text-right text-muted">
                            <!-- <small>{{ new Date(notification.created_at) }}</small> -->
                            <a href="#" @click="markAsRead(notification.id)">
                                <span data-toggle="tooltip" data-placement="top" title="Mark as read">
                                    <i class="fas fa-eye text-info" style="font-size:14px; padding:5px"></i>
                                </span>
                            </a>
                            <a href="#" @click="deleteNotification(notification.id)">
                                <span data-toggle="tooltip" data-placement="top" title="Delete notification">
                                    <i class="fas fa-trash text-danger" style="font-size:14px; padding:5px"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            </span>
        </div>
        <!-- View all -->
        <a href="#!" v-if="notifications.length > 0" @click="markAllAsRead" class="dropdown-item text-center text-primary font-weight-bold py-3">
            Mark all as read
        </a>
    </div>
</div>
</template>
<script>
    export default {
        data() {
            return {
                notifications: []
            }
        },
        mounted () {
            this.getNotifications()
        },
        methods: {
            getNotifications() {
                axios.get('/account/notification').then((data) =>{
                    console.log(data.data)
                    this.notifications = data.data
                })
            },
            markAsRead(id) {
                axios.get('/account/notification/markasread/'+id).then((data) => {
                    this.getNotifications();
                })
            },
            markAllAsRead() {
                console.log('All read ...')
                axios.get('/account/notification/allasread').then((data) => {
                    this.getNotifications();
                })
            },
            deleteNotification(id) {
                console.log('All read ...')
                axios.delete('/account/notification/delete/'+id).then((data) => {
                    this.getNotifications();
                })
            }
        },

    }
</script>
<style scoped>
    .badge-circle.badge-md {
        width: 1rem;
        height: 1rem;
        position: relative;
        top: -12px;
        left: -12px;
    }
</style>