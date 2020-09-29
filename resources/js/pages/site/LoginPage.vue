<template>
  	<v-container fluid fill-height align-center>
		<v-card
				class="mx-auto"
				height="50%"
				width="50%"
		>
			<v-toolbar flat color="blue-grey lighten-4" dark>
			<v-toolbar-title> SIGN IN </v-toolbar-title>
			</v-toolbar>
			<v-tabs vertical>
			<v-tab>
				SIGN IN
			</v-tab>
			<v-tab>
				SIGN UP
			</v-tab>
				<v-tab-item>
					<v-card>
						<v-card-text>
						<v-form
							ref="form"
							lazy-validation
						>
							<v-text-field
								v-model="email"
								label="E-mail"
								required
							></v-text-field>

							<v-text-field
								v-model="password"
								:append-icon="showpass ? 'mdi-eye' : 'mdi-eye-off'"
								:type="showpass ? 'text' : 'password'"
								label="Password"
								@click:append="showpass = !showpass"							
								required
							></v-text-field>

							<v-checkbox
								v-model="remeberMe"
								label="Remember Me"
								required
							></v-checkbox>
								
							<v-btn text
								color="primary"
								class="mr-4"
								@click="login"
							>
							Login
							</v-btn>

							<v-btn text
								color="secoundary"
								@click="backhome"
							>
								Back
							</v-btn>
							<v-btn text  small color="primary">
								Trouble in Login
							</v-btn>
						</v-form>
						</v-card-text>
					</v-card>							
				</v-tab-item>

				<v-tab-item>
				<v-card>	
					<v-card-text>
					<v-form
						ref="form"
						v-model="valid"
						lazy-validation
					>
						<v-text-field
							v-model="name"
							label="Full Name"
							required
						></v-text-field>

						<v-text-field
							v-model="registerEmail"
							label="E-mail"
							required
						></v-text-field>

						<v-text-field
							v-model="regPassword"
							:append-icon="regshowpass ? 'mdi-eye' : 'mdi-eye-off'"
							:type="showpass ? 'text' : 'password'"
							label="Password"
							@click:append="regshowpass = !regshowpass"							
							required
						></v-text-field>
						<v-text-field
							v-model="reRegPassword"
							:append-icon="regshowpass ? 'mdi-eye' : 'mdi-eye-off'"
							:type="showpass ? 'text' : 'password'"
							label="Password"
							@click:append="regshowpass = !regshowpass"							
							required
						></v-text-field>
														
						<v-btn text
							color="primary"
							class="mr-4"
							@click="register"
						>
						Register
						</v-btn>

					</v-form>
					</v-card-text>
				</v-card>						
				</v-tab-item>

			</v-tabs>
		</v-card>
  	</v-container>
</template>
<script>

export default {
    components:{
    
    },
    data: () => ({
	//  Login form varibles
	  	showpass: false,
	  	email:null,
	  	password:null,
	  	remeberMe: true,
	//  Registration variables
		regshowpass: false,
		name:null,
		registerEmail:null,
		regPassword:null,
		reRegPassword:null,

		  
    }),
	methods:{
		login(){
			console.log("log")
		},
		backhome(){
			window.location.href = '/'; 

		},
		register(){
			console.log('register')
		}



	},
	props:{
	
	}

}
</script>
