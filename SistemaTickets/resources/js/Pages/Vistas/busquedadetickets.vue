<template>
    <div>
      <div class="banner">
        <h1>{{ modulo }}</h1>
      </div>
  
      <div class="ticket-search">
  
        <div class="filters">
          <!-- Filtros por estatus, fecha y departamento -->
          <input v-model="filter.status" type="text" placeholder="Estatus">
          <input v-model="filter.date" type="date" placeholder="Fecha">
          <input v-model="filter.department" type="text" placeholder="Departamento">
        </div>
        
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>ID del Ticket</th>
                <th>Autor o Usuario</th>
                <th>Departamento</th>
                <th>Fecha</th>
                <th>Clasificación</th>
                <th>Detalles</th>
                <th>Estatus</th>
                <th>Acciones</th> <!-- Agregar columna de acciones -->
              </tr>
            </thead>
            <tbody>
              <!-- Mostrar los tickets filtrados -->
              <tr v-for="ticket in filteredTickets" :key="ticket.id">
                <td>{{ ticket.id }}</td>
                <td>{{ ticket.author }}</td>
                <td>{{ ticket.department }}</td>
                <td>{{ ticket.date }}</td>
                <td>{{ ticket.classification }}</td>
                <td>{{ ticket.details }}</td>
                <td>{{ ticket.status }}</td>
                <td>
                    <button @click="abrirModal(ticket)" class="action-button">Consultar</button>
                    <button @click="cancelarTicket(ticket)" class="action-button">Cancelar</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  
      <div v-if="mostrarModal" class="modal">
        <div class="modal-content">
          <span @click="mostrarModal = false" class="close">&times;</span>
          <!-- Aquí puedes mostrar la información detallada del ticket seleccionado -->
          <h2>{{ ticketSeleccionado.author }}</h2>
          <p>ID del Ticket: {{ ticketSeleccionado.id }}</p>
          <!-- Agrega el resto de la información del ticket -->
        </div>
      </div>
    </div>
  </template>
    
  <script>
export default {
  data() {
    return {
      modulo: 'MIS TICKETS',
      tickets: [
        { id: 1, author: 'Carolina M', department: 'Compras', date: '2024-02-12', classification: 'Hardware', details: 'Mantenimiento preventivo', status: 'En revisión' },
        { id: 2, author: 'Carolina M', department: 'Logística', date: '2024-02-10', classification: 'Software', details: 'Problemas con office 365', status: 'Innactivo' },
        { id: 3, author: 'Carolina M', department: 'Compras', date: '2024-02-12', classification: 'Hardware', details: 'Mantenimiento preventivo', status: 'Terminado' },
        { id: 4, author: 'Carolina M', department: 'Logística', date: '2024-02-10', classification: 'Software', details: 'Problemas con office 365', status: 'Innactivo' },
        { id: 5, author: 'Carolina M', department: 'Compras', date: '2024-02-12', classification: 'Hardware', details: 'Mantenimiento preventivo', status: 'En revisión' },
        { id: 6, author: 'Carolina M', department: 'Logística', date: '2024-02-10', classification: 'Software', details: 'Problemas con office 365', status: 'Innactivo' },
      ],
      filter: {
        status: '',
        date: '',
        department: ''
      },
        ticketSeleccionado: null,
        mostrarModal: false
    };
  },
  computed: {
    // Filtrar los tickets basados en los criterios de búsqueda
    filteredTickets() {
      return this.tickets.filter(ticket => {
        // Convertir los valores de los filtros y los tickets a minúsculas antes de comparar
        const filterStatus = this.filter.status.toLowerCase();
        const filterDate = this.filter.date.toLowerCase();
        const filterDepartment = this.filter.department.toLowerCase();
        const ticketStatus = ticket.status.toLowerCase();
        const ticketDate = ticket.date.toLowerCase();
        const ticketDepartment = ticket.department.toLowerCase();

        return (
          ticketStatus.includes(filterStatus) &&
          ticketDate.includes(filterDate) &&
          ticketDepartment.includes(filterDepartment)
        );
      });
    }
  },
  methods: {
    // Método para aplicar los filtros
    applyFilters() {
      // Aquí podrías agregar lógica adicional según sea necesario
      console.log('Filtros aplicados:', this.filter);
    },
    // Método para consultar un ticket
    consultarTicket(ticket) {
      console.log('Consultar ticket:', ticket);
      // Aquí puedes implementar la lógica para la consulta del ticket
    },
    // Método para cancelar un ticket
    cancelarTicket(ticket) {
      console.log('Cancelar ticket:', ticket);
      // Aquí puedes implementar la lógica para la cancelación del ticket
    },
    abrirModal(ticket) {
    this.ticketSeleccionado = ticket;
    this.mostrarModal = true;
  },
  abrirVentanaEmergente(ticket) {
    setTimeout(() => {
        const ventanaEmergente = window.open('', '_blank', 'width=600,height=400');
        ventanaEmergente.document.write(`
            <html>
            <head>
                <title>Información del Ticket</title>
                <!-- Aquí puedes incluir tus estilos CSS si es necesario -->
            </head>
            <body>
                <!-- Aquí puedes mostrar la información detallada del ticket seleccionado -->
                <h2>${ticket.author}</h2>
                <p>ID del Ticket: ${ticket.id}</p>
                <!-- Agrega el resto de la información del ticket -->
            </body>
            </html>
        `);
        ventanaEmergente.document.close();
    }, 100);
},
  }
};
</script>
  <style scoped>
  /* Estilos CSS para la tabla y los filtros */
  .ticket-search {
    padding: 20px; /* Añadir espacio alrededor de la ventana */
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
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  .filters {
    margin-bottom: 20px;
  }
  
  /* Separación entre los filtros y el botón */
  .filters input, .filters button {
    margin-left : 50px;
  }
  
  .table-container {
    overflow-x: auto; /* Agregar barra de desplazamiento horizontal si es necesario */
  }
  
  .aplicarfiltos {
    background-color: #568CF7;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px;
  }
  
  .aplicarfiltos:hover {
    background-color: #1147B2 ;
  }
  
  /* Estilos para los botones de acciones */
  .action-button {
    background-color: #FF5733;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
  }
  
  .action-button:hover {
    background-color: #FF8C66;
  }
  .ticket-search {
    padding: 20px; /* Añadir espacio alrededor de la ventana */
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
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  .filters {
    margin-bottom: 20px;
  }
  
  /* Separación entre los filtros y el botón */
  .filters input, .filters button {
    margin-left : 50px;
  }
  
  .table-container {
    overflow-x: auto; /* Agregar barra de desplazamiento horizontal si es necesario */
  }
  
  .aplicarfiltos {
    background-color: #568CF7;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px;
  }
  
  .aplicarfiltos:hover {
    background-color: #1147B2 ;
  }
  </style>
  
  