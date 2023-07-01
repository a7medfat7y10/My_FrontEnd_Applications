<template>
    <div id="login">
        <PasswordReset v-if="showPasswordReset" @close="togglePasswordReset()"></PasswordReset>

        <section>
            
            <!--Left Column col1-->
            <div class="col1">
              <h1>socialapp</h1>
              <p>Welcome to our socialapp, we hope you like it </p>
            </div>
            <!--End Col1-->

            <!--Right Column col2-->
            <div :class="{ 'signup-form': !showLoginForm }" class="col2">
                
                <!--login form-->
                <form v-if="showLoginForm" @submit.prevent>
                  <h1>Welcome Back</h1>
                  <div>
                    <label for="email1">Email</label>
                    <input type="text" v-model.trim="loginForm.email" placeholder="person@email.com" id="email1" />
                  </div>
                  <div>
                    <label for="password1">Password</label>
                    <input type="password" v-model.trim="loginForm.password" placeholder="******" id="password1" />
                  </div>
                  <button @click="login()" class="button">Log In</button>
                  <div class="extras">
                    <a @click="togglePasswordReset()">Forgot Password</a>
                    <a @click="toggleForm()">Create an Account</a>
                  </div>
                </form>
                <!--End Login Form-->

                <!--Sign up form-->
                <form v-else @submit.prevent>
                  <h1>Get Started</h1>
                  <div>
                    <label for="name">Name</label>
                    <input v-model.trim="signupForm.name" type="text" placeholder="Enter Your Name" id="name" />
                  </div>
                  <div>
                    <label for="title">Title</label>
                    <input v-model.trim="signupForm.title" type="text" placeholder="Your Title" id="title" />
                  </div>
                  <div>
                    <label for="email2">Email</label>
                    <input v-model.trim="signupForm.email" type="text" placeholder="Person@email.com" id="email2" />
                  </div>
                  <div>
                    <label for="password2">Password</label>
                    <input v-model.trim="signupForm.password" type="password" placeholder="minimum 6 characters" id="password2" />
                  </div>
                  <button @click="signup()" class="button">Sign Up</button>
                  <div class="extras">
                    <a @click="toggleForm()">Back to Log In</a>
                  </div>
                </form>
                <!--End Signup form-->
            
            </div>
            <!--End Col2-->

        </section>

    </div>
</template>

<script>
import PasswordReset from '@/components/PasswordReset'

export default {
  components: {
    PasswordReset
  },
  data() {

    return {
      showLoginForm: true,
      showPasswordReset: false,
      loginForm: {
        email: '',
        password: ''
      },
      signupForm: {
        name: '',
        title: '',
        email: '',
        password: ''
      }
    }
  },
  methods: {
    toggleForm() {
      this.showLoginForm = !this.showLoginForm
    },
    togglePasswordReset() {
      this.showPasswordReset = !this.showPasswordReset
    },
    login() {
      this.$store.dispatch('login', {
        email: this.loginForm.email,
        password: this.loginForm.password
      })
    },
    signup() {
      this.$store.dispatch('signup', {
        email: this.signupForm.email,
        password: this.signupForm.password,
        name: this.signupForm.name,
        title: this.signupForm.title
    })
}
  }
}
</script>

<style scoped lang="scss">

</style>
