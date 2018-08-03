<template>
    <div class="uk-section">
        <div class="uk-container">
            <h2>Login</h2>
            <form method="POST" action="/login">
                <input type="hidden" name="_token" v-bind:value="$store.state.csrf">
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="user"></span>
                        <input type="text" class="uk-input" name="username" id="username">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="lock"></span>
                        <input type="password" class="uk-input" name="password" id="password">
                    </div>
                </div>
                <div class="uk-margin">
                    <button class="uk-button" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>

