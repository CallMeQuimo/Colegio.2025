const contenido = document.getElementById('Contenido')
 async function obtenerDatos() {
    try {
      const response = await fetch('https://api.argentinadatos.com/v1/feriados/2025'); // 
      
      if (!response.ok) {
        throw new Error('Error en la solicitud'); // Lanzar un error si la respuesta no es exitosa
      }
      console.log(response)
      const data = await response.json(); // Convertir la respuesta a formato JSON
      
      // Hacer algo con los datos recibidos
      console.log(data);
         
      
  // const productosMapeados = data.map(producto => ({
  //         id: producto.id,
  //         title: producto.title,
  //         price: producto.price
  //       }));
    
       
   contenido.innerHTML = data.map(feriados => 
        `<div>
           <h2>Nombre: ${feriados.nombre}</h2>
           <p>Fecha: ${feriados.fecha}</p>
           <p>Tipo: ${feriados.tipo}</p>
         </div>`
      )
      // .join('');  


      // contenido.innerHTML = `Un dato random respecto a este articulo... su categoría es:  ${data[8].price}<br>
      // <img src=${data[0].image} style = "width = 20%" >
      // `
       } catch (error) {
      console.log(error); // Capturar y manejar cualquier error
    }


  }
  

  obtenerDatos();