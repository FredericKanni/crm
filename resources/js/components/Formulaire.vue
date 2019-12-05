<template>
  <div>
    <h1>{{variableEnfant}}</h1>

    <form id="monformulaire" @submit="formulaireClient" action method>
      <v-simple-table>
        <tr>
          <td>
            <label for="adresse">Adresse :</label>
          </td>
          <td>
            <input type="text" name="adresse" id="adresse" v-model="adresse" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="code_postal">Code postal:</label>
          </td>
          <td>
            <input type="text" name="code_postal" id="code_postal" v-model="code_postal" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="ville">Ville :</label>
          </td>
          <td>
            <input type="text" name="ville" id="ville" v-model="ville" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="nom">nom :</label>
          </td>
          <td>
            <input type="text" name="ville" id="nom" v-model="nom" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="nometp">nometp :</label>
          </td>
          <td>
            <input type="text" name="nometp" id="nometp" v-model="nometp" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="prenom">prenom :</label>
          </td>
          <td>
            <input type="text" name="prenom" id="prenom" v-model="prenom" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="tel">tel :</label>
          </td>
          <td>
            <input type="text" name="tel" id="tel" v-model="tel" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="mail">mail :</label>
          </td>
          <td>
            <input type="text" name="mail" id="mail" v-model="mail" />
          </td>
        </tr>

        <tr>
          <td>
            <label for="poste">poste :</label>
          </td>
          <td>
            <input type="text" name="poste" id="poste" v-model="poste" />
          </td>
        </tr>

        <tr>
          <input type="submit" value="valider" />
        </tr>
      </v-simple-table>
    </form>

    <hr />

    <v-form v-model="valid">
      <v-container>
        <v-row>
          <v-col cols="12" md="4">
            <v-text-field
              v-model="adresse"
              :rules="nameRules"
              :counter="20"
              label="Adresse"
              required
            ></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field
              v-model="code_postal"
              :rules="nameRules"
              :counter="20"
              label="Code postal"
              required
            ></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field v-model="ville" :rules="nameRules" :counter="20" label="Ville" required></v-text-field>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="12" md="4">
            <v-text-field v-model="nom" :rules="nameRules" :counter="20" label="nom" required></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field v-model="nometp" :rules="nameRules" :counter="20" label="nometp" required></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field v-model="prenom" :rules="nameRules" :counter="20" label="prenom" required></v-text-field>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="12" md="4">
            <v-text-field v-model="tel" :rules="nameRules" :counter="20" label="tel" required></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field v-model="mail" :rules="emailRules" :counter="20" label="mail" required></v-text-field>
          </v-col>

          <v-col cols="12" md="4">
            <v-text-field v-model="poste" :rules="nameRules" :counter="20" label="poste" required></v-text-field>
          </v-col>
        </v-row>



        <v-checkbox
          v-model="checkbox"
          :rules="[v => !!v || 'You must agree to continue!']"
          label="Do you agree?"
          required
        ></v-checkbox>


        <v-btn :disabled="!valid" color="success" class="mr-4" @click="formulaireClient">Validate</v-btn>

       


      </v-container>
    </v-form>
  </div>
</template>

<script src="./formulaire.js">
</script>