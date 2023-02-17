// ---- HUMEDAD ----

const chartHumedadCanva = document
  .getElementById("chartHumedad")
  .getContext("2d");
const chartHumedad = new Chart(chartHumedadCanva, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Anual",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Mensual",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Semanal",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
      {
        label: "Diario",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "rgb(47, 128, 237)",
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
  },
});

// ---- TEMPERATURA ----

const chartTemperaturaCanva = document
  .getElementById("chartTemperatura")
  .getContext("2d");
const chartTemperatura = new Chart(chartTemperaturaCanva, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Anual",
        backgroundColor: "rgba(211, 61, 29,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Mensual",
        backgroundColor: "rgba(211, 61, 29,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Semanal",
        backgroundColor: "rgba(211, 61, 29,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
      {
        label: "Diario",
        backgroundColor: "rgba(211, 61, 29,0)",
        borderColor: "rgb(47, 128, 237)",
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
  },
});

// ---- LUMINOSIDAD ----

const chartLuminosidadCanva = document
  .getElementById("chartLuminosidad")
  .getContext("2d");
const chartLuminosidad = new Chart(chartLuminosidadCanva, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Anual",
        backgroundColor: "rgba(226, 208, 50,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Mensual",
        backgroundColor: "rgba(226, 208, 50,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Semanal",
        backgroundColor: "rgba(226, 208, 50,0)",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
      {
        label: "Diario",
        backgroundColor: "rgba(226, 208, 50,0)",
        borderColor: "rgb(47, 128, 237)",
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
  },
});

// ---- PERSONAS ----

const chartPersonasCanva = document
  .getElementById("chartPersonas")
  .getContext("2d");
const chartPersonas = new Chart(chartPersonasCanva, {
  type: "line",
  data: {
    labels: [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ],
    datasets: [
      {
        label: "Anual",
        backgroundColor: "black",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Mensual",
        backgroundColor: "black",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 6000, 2000, 5000, 8000, 9000, 2000],
      },

      {
        label: "Semanal",
        backgroundColor: "black",
        borderColor: "rgb(47, 128, 237)",
        data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
      },
      {
        label: "Diario",
        backgroundColor: "black",
        borderColor: "rgb(47, 128, 237)",
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
  },
});
