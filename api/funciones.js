const SERVER="http://192.168.2.209/ProyectoArduino/Proyecto-Arduino/api/index.php";

async function getRecursoDia(recurso){

    let fecha = new Date();

    let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate()+" 00:00:00";
    let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+(fecha.getDate()+1)+" 00:00:00";

    const datos= await fetch(SERVER+recurso+consulta1+consulta2);
    if(!datos.ok){
        throw `Error ${datos.status} ${datos.statusText}`
    }
    const datosFormateados= await datos.json();
    return datosFormateados;
}

async function getRecursoSemana(recurso){

    let fecha = new Date();
    
    let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+(fecha.getDate()-7)+" 00:00:00";
    let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate()+" 00:00:00";
   
    const datos= await fetch(SERVER+recurso+consulta1+consulta2);
    if(!datos.ok){
        throw `Error ${datos.status} ${datos.statusText}`
    }
    const datosFormateados= await datos.json();
    return datosFormateados;
}
async function getRecursoMes(recurso){

    let fecha = new Date();

    let consulta1 = "?fecha1="+fecha.getFullYear()+"-"+(fecha.getMonth()-1)+"-"+fecha.getDate()+" 00:00:00";
    let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate()+" 00:00:00";
   
    const datos= await fetch(SERVER+recurso+consulta1+consulta2);
    if(!datos.ok){
        throw `Error ${datos.status} ${datos.statusText}`
    }
    const datosFormateados= await datos.json();
    return datosFormateados;
}
async function getRecursoAno(recurso){

    let fecha = new Date();


    let consulta1 = "?fecha1="+(fecha.getFullYear()-1)+"-"+fecha.getMonth()+"-"+fecha.getDate()+" 00:00:00";
    let consulta2 = "&fecha2="+fecha.getFullYear()+"-"+fecha.getMonth()+"-"+fecha.getDate()+" 00:00:00";
   
    const datos= await fetch(SERVER+recurso+consulta1+consulta2);
    if(!datos.ok){
        throw `Error ${datos.status} ${datos.statusText}`
    }
    const datosFormateados= await datos.json();
    return datosFormateados;
}

window.addEventListener('load', async e =>{
    e.preventDefault();

    let recur=await getRecursoDia('/sensor/temperatura');
    console.log(recur+"uno");

    recur=await getRecursoSemana('/sensor');
    console.log(recur+"2");

    recur=await getRecursoMes('/sensor/temperatura');
    console.log(recur+"3");

    recur=await getRecursoAno('/sensor');
    console.log(recur);
});