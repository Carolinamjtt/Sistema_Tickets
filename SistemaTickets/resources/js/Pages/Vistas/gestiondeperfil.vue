<template>
    <div>
      <div class="banner">
        <h1>{{ modulo }}</h1>
      </div>
      <div class="container">
        <div class="card">

  
          <div class="form-group">
            <div class="profile-photo-container">
              <label for="photo" class="p-sr-only">Foto de Perfil</label>
              <input ref="photoInput" id="photo" type="file" accept="image/*" @change="handlePhotoChange" class="input-file">
              <div class="photo-wrapper">
                <img v-if="previewPhoto" :src="previewPhoto" alt="Foto de Perfil" class="preview-photo">
                <img v-else src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" alt="Usuario Predeterminado" class="preview-photo default-user-icon">
              </div>
              <button @click="openFilePicker" class="file-picker-button">Seleccionar Foto</button>
            </div>
            
            <div class="field">
              <label for="firstname" class="p-sr-only">Nombre</label>
              <input id="firstname" type="text" v-model="user.firstname" placeholder="Nombre" class="text-input">
            </div>
  
            <div class="field">
              <label for="lastname" class="p-sr-only">Apellidos</label>
              <input id="lastname" type="text" v-model="user.lastname" placeholder="Apellidos" class="text-input">
            </div>
  
            <div class="field">
              <label for="email" class="p-sr-only">Correo</label>
              <input id="email" type="text" v-model="user.email" placeholder="Correo" class="text-input">
            </div>
  
            <div class="field">
              <label for="password" class="p-sr-only">Contraseña</label>
              <input id="password" type="password" v-model="user.password" placeholder="Contraseña" class="text-input">
            </div>
  
            <button @click="submitForm" class="submit-button">Guardar</button>
            <button @click="submitForm" class="submit-button">Modificar</button>
            <button @click="resetForm" class="submit-button">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
  data() {
    return {
      modulo: 'GESTIÓN DE USUARIOS',
      user: {
        firstname: '',
        lastname: '',
        email: '',
        password: '',
      },
      previewPhoto: null,
    };
  },
  methods: {
    handlePhotoChange(event) {
      const file = event.target.files[0];
      if (file) {
        this.previewPhoto = URL.createObjectURL(file);
      }
    },
    openFilePicker() {
      // Simular un clic en el input de archivo
      this.$refs.photoInput.click();
    },
    submitForm() {
      // Aquí puedes agregar la lógica para enviar el formulario
      console.log('Formulario enviado:', this.user);
    },
    resetForm() {
      // Aquí puedes agregar la lógica para restablecer el formulario
      this.user = {
        firstname: '',
        lastname: '',
        email: '',
        password: '',
      };
      this.previewPhoto = null;
    },
  },
};
  </script>
  
  <style scoped>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%
  }
  
  .card {
    
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 1);
    border-radius: 8px;
    overflow: hidden;
    align-items: center;
    width: 400px;
  }
  
  .banner {
    background-color: #568CF7;
    color: white;
    padding: 20px;
    text-align: center;
    margin-bottom: 50px; 
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
  
  .input-file {
    display: none;
  }
  
  .preview-photo {
    max-width: 100%;
    height: auto;
    margin-top: 10px;
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
  .file-picker-button {
    background-color: #568CF7;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
  }
  
  .file-picker-button:hover {
    background-color: #1147B2 ;
  }
  .profile-photo-container {
    position: relative;
    text-align: center;
  }
  
  .photo-wrapper {
    width: 150px;
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border-radius: 50%; /* Esto garantiza que el contenedor sea un círculo */
    margin: 0 auto; /* Centra el contenedor horizontalmente */
  }
  
  .preview-photo {
    max-width: 100%;
    max-height: 100%;
  }
  
  .default-user-icon {
    width: 100%;
    height: 100%;
  }
  </style>
  