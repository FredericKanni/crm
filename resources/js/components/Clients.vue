
<template>
  <div>
    <formulaire v-bind:variableEnfant="variableParent" v-on:formulaireClient="addClient($event)"></formulaire>
    <hr />

     <v-simple-table>

<td>
nom
</td>
<td>
ville
</td>
<td>
contact
</td>

      <tr v-for="(client,key) in clients" :key="key">
        <td>{{client.nom}}</td>
        <td>{{client.adresse.ville}}</td>
        <td>{{client.contacts[0].nom}}</td>
      </tr>
       </v-simple-table>
    <hr />
  </div>
</template>



<script src="./clients.js">
</script>


<style >
table,
td {
  border: 1px solid #333;
}


</style>


