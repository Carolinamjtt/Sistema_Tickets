<template>
    <div>
      <div class="banner">
        <h1>{{ modulo }}</h1>
      </div>
    </div>    
    <div class="login-container">
      <div class="login-form">
        <h2>Iniciar sesión</h2>
        <form @submit.prevent="login">
          <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" v-model="username" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" v-model="password" required>
          </div>
          <div class="form-group">
            <label for="role">Rol</label>
            <select id="role" v-model="role" required>
              <option value="" disabled>Seleccione un rol</option>
              <option value="cliente">Cliente</option>
              <option value="jefe_soporte">Jefe de Soporte</option>
              <option value="auxiliar_soporte">Auxiliar de Soporte</option>
            </select>
          </div>
          <button type="submit" class="login-button">Iniciar sesión</button>
          <button type="button" class="register-button" @click="register">Registrarse</button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        modulo: 'BIENVENIDO',
        isLogin: true,
        username: '',
        password: '',
        role: ''
      };
    },
    methods: {
    handleSubmit() {
      if (this.isLogin) {
        this.login();
      } else {
        this.register();
      }
    },
    login() {
      // Aquí puedes implementar la lógica para iniciar sesión
      console.log('Iniciando sesión...');
      // Simplemente imprime los datos por ahora
      console.log('Nombre de usuario:', this.username);
      console.log('Contraseña:', this.password);
      console.log('Rol:', this.role);
    },
    register() {
      // Aquí puedes implementar la lógica para el registro de usuarios
      console.log('Registrando nuevo usuario...');
      // Simplemente imprime los datos por ahora
      console.log('Nombre de usuario:', this.username);
      console.log('Contraseña:', this.password);
      console.log('Rol:', this.role);
    }
  }
  };
  </script>
  
  <style scoped>
  .banner {
    background-color: #568CF7;
    color: white;
    padding: 20px;
    text-align: center;
    margin-bottom: 10px; /* Ajusta el margen inferior */
  }
  
  h1 {
    margin: 0;
    font-size: large;
  }
  .login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    height: calc(100vh - 100px); /* Resta el espacio del banner */
  }
  
  .login-form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 1);
    padding: 40px;
    width: 300px;
  }
  
  .login-form h2 {
    margin-bottom: 20px;
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 4px;
  }
  
  .login-button {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    width: 100%;
  }
  
  .login-button:hover {
    background-color: #0056b3;
  }
  
  .register-button {
    background-color: #28a745;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
  }
  
  .register-button:hover {
    background-color: #218838;
  }
  </style>
  