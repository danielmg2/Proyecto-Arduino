// ---- PRIMER GRAF ----

const c1 = document.getElementById("chart1").getContext("2d");
const chart1 = new Chart(c1, {
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
  },
});

// ---- TEMPERATURA ----

const c2 = document.getElementById("chart2").getContext("2d");
const chart2 = new Chart(c2, {
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
  },
});

// ---- LUMINOSIDAD ----

const c3 = document.getElementById("chart3").getContext("2d");
const chart3 = new Chart(c3, {
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
  },
});

// ---- PERSONAS ----

const c4 = document.getElementById("chart4").getContext("2d");
const chart4 = new Chart(c4, {
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
  },
});
