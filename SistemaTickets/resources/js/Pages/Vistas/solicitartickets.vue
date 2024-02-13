<script>
export default {
  data() {
    return {
      modulo: 'SOLICITAR TICKETS',
      datos: {
        idticket: '', // Se generará automáticamente
        nombredelsolicitante: '',
        departamento: '',
        detalles: '',
        clasificacion: '',
      },
    };
  },
  created() {
    // Generar un ID único automáticamente cuando se crea el componente
    this.generateUniqueId();
  },
  methods: {
    submitForm() {
      // Aquí puedes agregar la lógica para enviar el formulario
      console.log('Formulario enviado:', this.datos);
    },
    resetForm() {
      // Aquí puedes agregar la lógica para restablecer el formulario
      this.datos = {
        idticket: '',
        nombredelsolicitante: '',
        departamento: '',
        detalles: '',
        clasificacion: '',
      };
      
      // Generar un nuevo ID único al restablecer el formulario
      this.generateUniqueId();
    },
    generateUniqueId() {
      // Generar un ID único (por ejemplo, usando un timestamp)
      this.datos.idticket = Date.now().toString();
    }
  },
};
</script>

<template>
    <div>
      <div class="banner">
        <h1>{{ modulo }}</h1>
      </div>
      <div class="container">
        <div class="card">

            <div class="form-group">
            <div class="field">
              <label for="firstname" class="p-sr-only">Id del ticket</label>
              <input id="firstname" type="text" v-model="datos.idticket" placeholder="Id del ticket" class="text-input">
            </div>
  
            <div class="field">
              <label for="lastname" class="p-sr-only">Nombre del solicitante</label>
              <input id="lastname" type="text" v-model="datos.nombredelsolicitante" placeholder="Nombre del solicitante" class="text-input">
            </div>
  
            <div class="field">
              <label for="email" class="p-sr-only">Departamento</label>
              <input id="email" type="text" v-model="datos.departamento" placeholder="Departamento" class="text-input">
            </div>
  
            <div class="field">
              <label for="password" class="p-sr-only">Clasiifcación del error : Software ó Hardware</label>
              <input id="password" type="password" v-model="datos.clasificacion" placeholder="Clasificación" class="text-input">
            </div>
            <div class="field">
                <label for="password" class="p-sr-only">Detalles</label>
                <input id="password" type="password" v-model="datos.detalles" placeholder="Detalles" class="text-input">
              </div>
  
            <button @click="submitForm" class="submit-button">Guardar</button>
            <button @click="submitForm" class="submit-button">Modificar</button>
            <button @click="resetForm" class="submit-button">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

  </template>
  
  
  
  <style scoped>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .card {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 1);
    border-radius: 8px;
    overflow: hidden;
    width: 400px;
  }
  
  .banner {
    background-color: #568CF7;
    color: white;
    padding: 20px;
    text-align: center;
    margin-bottom: 0px; 
  }
  
  h1 {
    margin: 0;
    font-size: large;
  }
  
  .form-group {
    padding: 20px;
  }
  
  .field {
    margin-bottom: 20px;
  }
  
  .text-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
  }
  
  .submit-button {
    background-color: #568CF7;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px;
  }
  
  .submit-button:hover {
    background-color: #1147B2 ;
  }
  
  </style>
  