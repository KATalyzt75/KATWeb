if(pregunta.includes("pongo") || pregunta.includes("poner") || pregunta.includes("ponen") || pregunta.includes("pone")){
   ("Usa el comando !sr para poner una canción en el stream. @" + usuario);
}else if(pregunta.includes("canción") || pregunta.includes("cancion") || pregunta.includes("rola")){
   ("Usa el comando !currentsong para ver qué canción está sonando en este momento. @" + usuario);
}else if(pregunta.includes("playlist")){
   ("Usa el comando !songlist para ver la lista de canciones del Song Request. @" + usuario);
}else if(pregunta.includes("textura") || pregunta.includes("tp") || pregunta.includes("pack")){
   ("El pack de texturas que está utilizando es: [Algún link aquí o lo que sea]");
}else{
   ("MrDestructoid");
}
