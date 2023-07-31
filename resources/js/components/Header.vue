<template>
    <nav class="uk-navbar-container">
    <div class="uk-container">
        <div uk-navbar>

            <div class="uk-navbar-center">

                <div class="uk-navbar-center-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><router-link to="/">Home</router-link></li>
                                           </ul>
                </div>
                <router-link class="uk-navbar-item uk-logo" to="/">SP</router-link>

                <div class="uk-navbar-center-right">
                    <ul class="uk-navbar-nav">
                        <li><router-link to="/photo/create">Add-New</router-link></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</nav>
</template>

<script>
export default {
  name: 'Header'
}
</script>
