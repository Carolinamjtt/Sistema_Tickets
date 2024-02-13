<template>
    <div>
      <div class="banner">
        <h1>Control de Tickets</h1>
      </div>
      <div class="container">
        <button class="button" @click="changeStatus">
          <img class="image" src="https://cdn-icons-png.flaticon.com/512/1621/1621507.png" alt="Ejemplo de imagen">
          <h2>Cambiar Estatus</h2>
        </button>
        <button class="button" @click="communicate">
          <img class="image" src="https://www.pngmart.com/files/16/Chat-Icon-Transparent-Background.png" alt="Ejemplo de imagen">
          <h2>Comunicar</h2>
        </button>
        <button class="button" @click="showDetails">
          <img class="image" src="https://cdn-icons-png.flaticon.com/512/64/64673.png" alt="Ejemplo de imagen">
          <h2>Detalle</h2>
        </button>
        <button class="button" @click="generateReport">
          <img class="image" src="https://cdn-icons-png.flaticon.com/512/1018/1018272.png" alt="Ejemplo de imagen">
          <h2>Reporte</h2>
        </button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      changeStatus() {
        // Lógica para cambiar el estatus
        console.log('Cambiando estatus');
      },
      communicate() {
        // Lógica para comunicar
        console.log('Comunicando');
      },
      showDetails() {
        // Lógica para mostrar detalles
        console.log('Mostrando detalles');
      },
      generateReport() {
        // Lógica para generar un reporte
        console.log('Generando reporte');
      }
    }
  };
  </script>
  
  <style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
  }
  
  .banner {
    background-color: #800020;
    color: white;
    padding: 10px;
    text-align: center;
  }
  
  .container {
    text-align: center;
    margin: 20px;
  }
  
  .button {
    width: 250px;
    height: 250px;
    background-color: #f0f0f0;
    margin: 10px;
    display: inline-block;
    padding: 20px;
    border: 1px solid #ddd;
    cursor: pointer;
    transition: transform 0.2s;
  }
  
  .button:hover {
    transform: scale(1.05);
  }
  
  .image {
    width: 100px;
    height: 100px;
    margin-bottom: 20px;
  }
  </style>