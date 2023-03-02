// let temperaturas=[];
// let humedad=[];
// let luminosidad=[];
// let personas=[];

// resultado.foreach(elemen=>{
//   temperaturas.push(element.temperatura);
//   humedad.push(element.humedad);
//   luminosidad.push(element.luminosidad);
//   personas.push(element.personas);
// });
// ---- ANUAL ----

const c1 = document.getElementById("chart1").getContext("2d");
const chart1 = new Chart(c1, {
  type: "line",
  data: {
    labels: [
      "Enero",
      "Febrero",
      "Marzo",
      "Abril",
      "Mayo",
      "Junio",
      "Julio",
      "Agosto",
      "Septiembre",
      "Octubre",
      "Noviembre",
      "Diciembre",
    ],
    datasets: [
      {
        label: "Temperatura",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ff1a1a",
        //temperaturas,
        data: [
          2000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
          5000,
        ],
      },

      {
        label: "Humedad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#3399ff",
        //humedad,
        data: [
          3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
          5000,
        ],
      },

      {
        label: "Personas",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#1a1a1a",
        //personas,
        data: [
          3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
          5000,
        ],
      },
      {
        label: "Luminosidad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ffb31a",
        //luminosidad,
        data: [
          3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
          5000,
        ],
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    legend: {
      labels: {
        fontSize: 15,
        fontColor: "black",
        padding: 20,
        usePointStyle: true,
      },
    },
  },
});

// ---- MENSUAL ----

const c2 = document.getElementById("chart2").getContext("2d");
const chart2 = new Chart(c2, {
  type: "line",
  data: {
    labels: ["5", "10", "15", "20", "25", "30"],
    datasets: [
      {
        label: "Temperatura",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ff1a1a",
        data: [2000, 4000, 2000, 5000, 8000, 9000],
      },

      {
        label: "Humedad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#3399ff",
        data: [3000, 4000, 2000, 5000, 8000, 9000],
      },

      {
        label: "Personas",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#1a1a1a",
        data: [3000, 4000, 2000, 5000, 8000, 9000],
      },
      {
        label: "Luminosidad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ffb31a",
        data: [3000, 4000, 2000, 5000, 8000, 9000],
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    legend: {
      labels: {
        fontSize: 15,
        fontColor: "black",
        padding: 20,
        usePointStyle: true,
      },
    },
  },
});

// ---- SEMANAL ----

const c3 = document.getElementById("chart3").getContext("2d");
const chart3 = new Chart(c3, {
  type: "line",
  data: {
    labels: [
      "Lunes",
      "Martes",
      "Miercoles",
      "Jueves",
      "Viernes",
      "Sabado",
      "Domingo",
    ],
    datasets: [
      {
        label: "Temperatura",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ff1a1a",
        data: [2000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Humedad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#3399ff",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Personas",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#1a1a1a",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
      {
        label: "Luminosidad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ffb31a",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    legend: {
      labels: {
        fontSize: 15,
        fontColor: "black",
        padding: 20,
        usePointStyle: true,
      },
    },
  },
});

// ---- DIARIO ----

const c4 = document.getElementById("chart4").getContext("2d");
const chart4 = new Chart(c4, {
  type: "line",
  data: {
    labels: ["0", "3", "6", "9", "12", "15", "18", "20", "22", "24"],
    datasets: [
      {
        label: "Temperatura",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ff1a1a",
        data: [200, 400, 200, 200, 800, 900, 2000],
      },

      {
        label: "Humedad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#3399ff",
        data: [3000, 4000, 200, 500, 800, 900, 20 + 0],
      },

      {
        label: "Personas",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#1a1a1a",
        data: [3000, 4000, 2000, 500, 8000, 9000, 2000],
      },
      {
        label: "Luminosidad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ffb31a",
        data: [3000, 4000, 2000, 500, 8000, 900, 2000],
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true,
          },
        },
      ],
    },
    legend: {
      labels: {
        fontSize: 15,
        fontColor: "black",
        padding: 20,
        usePointStyle: true,
      },
    },
  },
});
