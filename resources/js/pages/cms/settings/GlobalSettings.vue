<template>
    <div>
        <dashboardlayout>
            <v-card >
                <v-card-action>
                    <v-btn  color="primary" >Save</v-btn>
                </v-card-action>

               <v-card-text>
                    <v-form
                        ref="form"
                        v-model="valid"
                        :lazy-validation="lazy"
                        >
                        <v-row>
                            <v-col>
                                <v-text-field
                                    v-model="name"
                                    :rules="nameRules"
                                    :counter="10"
                                    label="Company Name"
                                    required
                                ></v-text-field>
                            </v-col>
                            <v-col>
                                <v-text-field
                                v-model="address"
                                :rules="nameRules"
                                :counter="10"
                                label="Address"
                                required
                                ></v-text-field>
                            </v-col>
                        </v-row>
                            <v-text-field
                                v-model="street"
                                :rules="nameRules"
                                :counter="10"
                                label="Street"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="phone"
                                :rules="nameRules"
                                :counter="10"
                                label="Phone"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="fax"
                                :rules="nameRules"
                                :counter="10"
                                label="Fax"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="fax"
                                :rules="nameRules"
                                :counter="10"
                                label="Fax"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="email"
                                :rules="emailRules"
                                label="E-mail"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="facebook"
                                :rules="emailRules"
                                label="FaceBook"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="facebook"
                                :rules="emailRules"
                                label="FaceBook"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="analytics_id"
                                :rules="emailRules"
                                label="Analytic Id"
                                required
                            ></v-text-field>

                            <v-text-field
                                v-model="analytics_id"
                                :rules="emailRules"
                                label="Analytic Id"
                                required
                            ></v-text-field>

                            <v-file-input
                                label="File input"
                                filled
                                prepend-icon="mdi-camera"
                            ></v-file-input>
                    </v-form>
                </v-card-text>
            </v-card>

        </dashboardlayout>
    </div>
</template>
<script>

export default {

    data: () => ({
      valid: false,
      firstname: '',
      lastname: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => v.length <= 10 || 'Name must be less than 10 characters',
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid',
      ],
    }),
}

// table->string('name');
// table->string('address');
// table->string('street');
// table->string('phone')->nullable();
// table->string('fax')->nullable();
// table->string('logo')->nullable();
// table->string('email')->nullable();
// table->string('facebook')->nullable();
// table->string('twitter')->nullable();
// table->string('disqus_shortname')->nullable();
// table->string('analytics_id')->nullable();
// table->unsignedInteger('file_id')->nullable();
// table->unsignedbigInteger('created_by');
// $table->unsignedbigInteger('updated_by')->nullable();

</script>

