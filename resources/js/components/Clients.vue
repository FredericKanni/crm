
<template>
  <div>
 
<hr>

<table>
  <tr>
    <td v-for="(client,key) in clients" :key="key">{{client.nom}}</td>
  </tr>
  <tr>
    <td v-for="(client,key) in clients" :key="key">{{client.adresse}}</td>
  </tr>
 <tr>
    <td v-for="(client,key) in clients" :key="key">{{client.contacts}}</td>
  </tr>
</table>
<hr>

<form id="monformulaire">
    <p> 
<label for="">adresse :</label>
<input type="text" name="" id="">

    </p>
    <p>
<label for="">code_postal :</label>
<input type="text" name="" id="">

    </p>
<label for="">ville :</label>
<input type="text" name="" id="">
    <p>

    </p>


<input type=submit value ="valider">
</form>

<hr>
 <v-form ref="formAddUser" v-model="valid" lazy-validation v-if="!addUserBtn">
                            <v-layout row>
                                <v-flex xs4>
                                    <v-text-field v-model='nom'
                                                  label="Nom*"
                                                  :rules="[v => !!v ]"
                                                  required></v-text-field>
                                </v-flex>
                                <v-flex xs4>
                                    <v-text-field v-model='prenom'
                                                  label="Prénom*"
                                                  :rules="[v => !!v ]"
                                                  required></v-text-field>
                                </v-flex>
                                <v-btn class="btnAddUser" :disabled="!valid" @click="addUser()">Ajouter</v-btn>
                            </v-layout>
                        </v-form>

  </div>
 
</template>



<script src="./clients.js">
</script>


<style >
    table,
td {
    border: 1px solid #333;
}

input {
    border: 4px solid #333;
}
</style>