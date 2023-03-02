const SERVER="http://192.168.1.160/arduino/Proyecto-Arduino/api/index.php";

async function getRecursoDia(recurso){

  let fecha = new Date();

  let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate()+" 00:00:00";
  let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+(fecha.getDate()+1)+" 00:00:00";

  const datos= await fetch(SERVER+recurso+consulta1+consulta2);
  if(!datos.ok){
      throw `Error ${datos.status} ${datos.statusText}`
  }
  const datosFormateados= await datos.json();
  return datosFormateados;
}

async function getRecursoSemana(recurso){

  let fecha = new Date();
  
  let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+(fecha.getDate()-7)+" 00:00:00";
  let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate()+" 00:00:00";
 
  const datos= await fetch(SERVER+recurso+consulta1+consulta2);
  if(!datos.ok){
      throw `Error ${datos.status} ${datos.statusText}`
  }
  const datosFormateados= await datos.json();
  return datosFormateados;
}

async function getRecursoMes(recurso){

  let fecha = new Date();

  let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+(fecha.getMonth())+"-"+fecha.getDate()+" 00:00:00";
  let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate()+" 00:00:00";
 
  const datos= await fetch(SERVER+recurso+consulta1+consulta2);
  if(!datos.ok){
      throw `Error ${datos.status} ${datos.statusText}`
  }
  const datosFormateados= await datos.json();
  return datosFormateados;
}

async function getRecursoAno(recurso){

  let fecha = new Date();


  let consulta1 = "?fecha1="+(fecha.getFullYear()-1)+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate()+" 00:00:00";
  let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+(fecha.getMonth()+1)+"-"+fecha.getDate()+" 00:00:00";
 
  const datos= await fetch(SERVER+recurso+consulta1+consulta2);
  if(!datos.ok){
      throw `Error ${datos.status} ${datos.statusText}`
  }
  const datosFormateados= await datos.json();
  return datosFormateados;
}














let dia;
window.addEventListener("load", async (event) => {
  event.preventDefault();
  
  
  
  const temperaturas=[];
  let humedad=[];
  let luminosidad=[];
  let personas=[];


  //DIA
  let recur=await getRecursoDia('/sensor');
  console.log("DIA");
  console.log(recur);


  for(let i=0; i<recur.length; i++){
    console.log(recur[i]);
    temperaturas.push(recur[i].temperatura.toString());
    humedad.push(recur[i].humedad.toString());
    luminosidad.push(recur[i].luminosidad.toString());
    personas.push(recur[i].personas.toString());
  }

  console.log("temperaturas" +temperaturas);
  console.log("humedad" +humedad);
  console.log("personas" +personas);
  console.log("luminosidad" +luminosidad);
  

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
          data:temperaturas,
        },

        {
          label: "Humedad",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#3399ff",
          data: humedad,
        },

        {
          label: "Personas",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#1a1a1a",
          data: personas,
        },
        {
          label: "Luminosidad",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#ffb31a",
          data: luminosidad,
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
    





//SEMANA
  recur=await getRecursoSemana('/sensor');
  console.log(recur+"2");
  for(let i=0; i<recur.length; i++){
    console.log(recur[i]);
    temperaturas.push(recur[i].temperatura.toString());
    humedad.push(recur[i].humedad.toString());
    luminosidad.push(recur[i].luminosidad.toString());
    personas.push(recur[i].personas.toString());
  }

  console.log("temperaturas semana " +temperaturas);
  console.log("humedad semana " +humedad);
  console.log("personas semana " +personas);
  console.log("luminosidad semana " +luminosidad);

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
            data: temperaturas,
          },
    
          {
            label: "Humedad",
            backgroundColor: "rgba(161, 198, 247, 0)",
            borderColor: "#3399ff",
            data: humedad,
          },
    
          {
            label: "Personas",
            backgroundColor: "rgba(161, 198, 247, 0)",
            borderColor: "#1a1a1a",
            data: personas,
          },
          {
            label: "Luminosidad",
            backgroundColor: "rgba(161, 198, 247, 0)",
            borderColor: "#ffb31a",
            data:luminosidad,
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





  //MES
  recur=await getRecursoMes('/sensor');
  console.log(recur+"3");



  for(let i=0; i<recur.length; i++){
    console.log(recur[i]);
    temperaturas.push(recur[i].temperatura.toString());
    humedad.push(recur[i].humedad.toString());
    luminosidad.push(recur[i].luminosidad.toString());
    personas.push(recur[i].personas.toString());
  }

  console.log("temperaturas mes " +temperaturas);
  console.log("humedad mes " +humedad);
  console.log("personas mes " +personas);
  console.log("luminosidad mes " +luminosidad);




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
        data: temperaturas,
      },

      {
        label: "Humedad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#3399ff",
        data: humedad,
      },

      {
        label: "Personas",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#1a1a1a",
        data: personas,
      },
      {
        label: "Luminosidad",
        backgroundColor: "rgba(161, 198, 247, 0)",
        borderColor: "#ffb31a",
        data: luminosidad,
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






//AÑO
  recur=await getRecursoAno('/sensor');
  console.log(recur);



  for(let i=0; i<recur.length; i++){
    console.log(recur[i]);
    temperaturas.push(recur[i].temperatura.toString());
    humedad.push(recur[i].humedad.toString());
    luminosidad.push(recur[i].luminosidad.toString());
    personas.push(recur[i].personas.toString());
  }

  console.log("temperaturas año " +temperaturas);
  console.log("humedad año " +humedad);
  console.log("personas año " +personas);
  console.log("luminosidad año " +luminosidad);






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
          data: temperaturas,
        },
  
        {
          label: "Humedad",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#3399ff",
          //humedad,
          data: humedad,
        },
  
        {
          label: "Personas",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#1a1a1a",
          //personas,
          data: personas,
        },
        {
          label: "Luminosidad",
          backgroundColor: "rgba(161, 198, 247, 0)",
          borderColor: "#ffb31a",
          //luminosidad,
          data: luminosidad,
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



});



  document.getElementById("1").addEventListener("click", (event) => {
    event.preventDefault();
    console.log("1");
  });
  document.getElementById("2").addEventListener("click", (event) => {
    event.preventDefault();
  });
  document.getElementById("3").addEventListener("click", (event) => {
    event.preventDefault();
  });
  document.getElementById("4").addEventListener("click", (event) => {
    event.preventDefault();
  });




// ---- ANUAL ----

const c1 = document.getElementById("chart1").getContext("2d");
// const chart1 = new Chart(c1, {
//   type: "line",
//   data: {
//     labels: [
//       "Enero",
//       "Febrero",
//       "Marzo",
//       "Abril",
//       "Mayo",
//       "Junio",
//       "Julio",
//       "Agosto",
//       "Septiembre",
//       "Octubre",
//       "Noviembre",
//       "Diciembre",
//     ],
//     datasets: [
//       {
//         label: "Temperatura",
//         backgroundColor: "rgba(161, 198, 247, 0)",
//         borderColor: "#ff1a1a",
//         //temperaturas,
//         data: [
//           2000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
//           5000,
//         ],
//       },

//       {
//         label: "Humedad",
//         backgroundColor: "rgba(161, 198, 247, 0)",
//         borderColor: "#3399ff",
//         //humedad,
//         data: [
//           3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
//           5000,
//         ],
//       },

//       {
//         label: "Personas",
//         backgroundColor: "rgba(161, 198, 247, 0)",
//         borderColor: "#1a1a1a",
//         //personas,
//         data: [
//           3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
//           5000,
//         ],
//       },
//       {
//         label: "Luminosidad",
//         backgroundColor: "rgba(161, 198, 247, 0)",
//         borderColor: "#ffb31a",
//         //luminosidad,
//         data: [
//           3000, 4000, 2000, 5000, 8000, 9000, 2000, 9000, 2000, 9000, 2000,
//           5000,
//         ],
//       },
//     ],
//   },
//   options: {
//     scales: {
//       yAxes: [
//         {
//           ticks: {
//             beginAtZero: true,
//           },
//         },
//       ],
//     },
//     legend: {
//       labels: {
//         fontSize: 15,
//         fontColor: "black",
//         padding: 20,
//         usePointStyle: true,
//       },
//     },
//   },
// });




















