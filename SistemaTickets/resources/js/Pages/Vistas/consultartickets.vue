<template>
    <div>
      <div class="banner">
        <h1>{{ modulo }}</h1>
      </div>
      <div class="container">
        <div class="card">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th>ID del Ticket</th>
                  <th>Nombre del Solicitante</th>
                  <th>Departamento</th>
                  <th>Detalles</th>
                  <th>Clasificación</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <!-- Mostrar los tickets existentes -->
                <tr v-for="ticket in tickets" :key="ticket.id">
                  <td>{{ ticket.id }}</td>
                  <td>{{ ticket.nombredelsolicitante }}</td>
                  <td>{{ ticket.departamento }}</td>
                  <td>{{ ticket.detalles }}</td>
                  <td>{{ ticket.clasificacion }}</td>
                  <td>{{ ticket.estado }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        modulo: 'CONSULTAR TICKETS',
        // Supongamos que tienes una lista de tickets almacenados en un array llamado tickets
        tickets: [
          { id: '1', nombredelsolicitante: 'John Doe', departamento: 'IT', detalles: 'Problema con el servidor', clasificacion: 'Hardware', estado: 'Abierto' },
          { id: '2', nombredelsolicitante: 'Jane Smith', departamento: 'HR', detalles: 'Instalación de software', clasificacion: 'Software', estado: 'Cerrado' },
          // Agrega más tickets según sea necesario
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  /* Agrega estilos CSS según sea necesario */
  </style>
  