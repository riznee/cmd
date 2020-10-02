<template>
<div class="login-box">
	<div class="login-box-body">
		<div class="login-logo">
			<img src="images/logo.png" width="30%" alt="logo">
		</div>
		<p class="login-box-msg">
			<b></b>
		</p>
		<fieldset>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" name="username" placeholder="Username" class="form-control" autofocus="true" required="true" v-model="username">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" name="password" placeholder="password" class="form-control" required="true" v-model="password">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="button" class="btn btn-primary btn-block btn-flat" @click.prevent="login" ><i class="fa fa-sign-in"></i> Login</button>
				</div>
			</div>
		</fieldset>
	</div>
</div>
</template>


<script>
    import {http } from '../../plugins/axios.js';
	export default {
		methods: {
			login(){
				http.post('/login',{
					username: this.username,
					password: this.password
				})
				.then(response => {
					this.$router.push('/');
				}).catch(error => {
					console.log(error);
				})
			}
		},
		data(){
			return {
				username: "",
				password: ""
			}
		}
	}
</script>