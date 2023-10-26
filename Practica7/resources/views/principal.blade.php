@extends('layouts.plantilla')

@section('titulo','Principal')

@section('contenido')
<div class="container">
    <div class="card text-center mt-4">
        <div class="card-header fw-bold fs-2">
        Mecanoscrito original con relatos inéditos de Cortázar, encontrado en una caja de bananos,
        se remata en US$ 36.000
        </div>
        <div class="card-body fs-4">
            <p class="card-text">Un mecanoscrito original de “Historias de cronopios y de famas”,
                el icónico libro de relatos del fallecido escritor argentino Julio Cortázar, 
                que incluye siete relatos inéditos, fue subastado en Montevideo en US$ 36.000.</p>
            <p class="card-text"> Las casas de subastas Zorrilla de Uruguay e Hilario de Argentina, 
                encargadas del remate de la obra, informaron que fue adquirida por un coleccionistas argentino.</p>
            <p class="card-text">Hasta acá podría ser una historia más de textos originales nunca publicados
                de un autor famoso. Y de algún modo lo es. No lo es, en cambio, el lugar donde encontraron los textos.</p>              
            <p class="card-text">Fue una tarde calurosa y húmeda, a comienzos de 2020,
                poco antes de que estallara la pandemia de covid-19. El hijo de un veterano 
                coleccionista montevideano -que pidió no revelar su nombre por motivos de privacidad- 
                le contó a CNN que trataba de ordenar el caos que dejó su padre, fallecido algunos meses antes.
                Cajas y más cajas, polvo, libros y antigüedades tiradas por toda la casa.</p>
            <p class="card-text">En un rincón había una pila de cajas de banana, de las que se
                usan para importar la fruta desde Ecuador o Brasil pero también para guardar libros. 
                Empezó a moverlas, a sacar de ahí papeles, pelusas, bolsas, libros viejos, novelas 
                baratas y recuerdos. A vaciarlas. Hasta que llegó al fondo de una de las cajas.</p>
            <p class="card-text">De pronto, entre los dobleces de un cartón húmedo, encontró un papel 
                amarillento con algunas letras. Leyó una palabra: “cronopios”. Abrió los ojos como dos
                platos y, recordó, se le pusieron los pelos de punta. Tembloroso, empezó a sacar 
                lentamente los papeles y leyó un título, el nombre de un escritor famoso, el de la 
                ciudad donde está enterrado y un año: “Historias de cronopios y de famas. Julio Cortázar.
                París, 1952”.</p>
            <p class="card-text">Se trataba de 60 hojas, con 46 relatos mecanografiados por Cortázar, 
                de los cuales 35 fueron publicados “casi sin variantes” en la primera edición de 1962 
                de “Historias de cronopios y de famas” (Editorial Minotauro, Buenos Aires), otros cuatro 
                se publicaron posteriormente y siete son inéditos, de acuerdo con el catálogo de Zorrilla 
                Subastas, uno de los organizadores del remate, junto con Hilario Subastas de Argentina. 
                Un tesoro literario que había permanecido oculto durante más de 70 años en unas cajas de banana.</p>
            <img src="{{ asset('images/bananas.jpg') }}" class="card-img-top" alt="IMAGEN">
            <p class="card-text"> La autentificación del material fue realizada por dos expertos en Cortázar:
                el académico Aldo Mazzucchelli -desde lo literario- y el coleccionista Lucio Aquilanti, 
                desde lo técnico.</p>
            <p class="card-text"> "Puedo afirmar, sin lugar a dudas, que se trata de un original del autor, 
                mecanoscrito, de extraordinaria trascendencia", escribió Aquilanti en su informe, donde 
                incluso concluyó que, para esos textos, el escritor utilizó una máquina de escribir Royal, 
                la misma con la que redactó buena parte de su obra. “Se trata de un original de época, 
                muy similar a otras piezas de pocos años después que he manejado durante años”, 
                agregó Aquilanti a CNN.</p>
            <p class="card-text"> "Desde el punto de vista literario, teniendo en cuenta sobre todo la época 
                y el contexto de composición, el estilo, el idiolecto del autor y los temas, no hay ninguna 
                razón sólida para pensar que estas páginas no sean auténticas", concluyó Aldo Mazzucchelli.</p>
            <p class="card-text"> Este jueves 12 de octubre esta versión original mecanografiada por el autor 
                saldrá a la venta en un remate conjunto de las casas de subastas Zorrilla (Uruguay) e 
                Hilario (Argentina), a un precio base de US$ 12.000.</p>
            <img src="{{ asset('images/mecanografia.jpg') }}" class="card-img-top" alt="IMAGEN2">
            <p class="card-text"> El catálogo de la subasta en la web indica que los originales están 
                “en muy buen estado” y en una caja especialmente diseñada para su conservación. Y agrega: 
                “El maravilloso tesoro de inéditos de Julio Cortázar se forma con los siguientes títulos: 
                “Inventario”, “Carta de un fama a otro fama”, “Mariposas automáticas”, “Los viajes y los 
                sueños”, “Diminuto unicornio”, “Rabia de espejo” y “Rey del mar”. La venta de los textos 
                mecanografiados por Cortazar no incluye los derechos de autor sobre la obra.</p>
            <p class="card-text">La génesis de esta obra, contaba Cortázar en entrevistas posteriores, 
                se remonta a 1951, cuando llegó a París. Un año después, durante un concierto en el Théâtre 
                des Champs-Élysées, experimentó -según contó luego en entrevistas- una epifanía. En ese 
                momento, visualizó a unas criaturas flotando ante él y las bautizó como “cronopios”, el 
                mismo nombre con el que él mismo fue apodado luego: “El gran cronopio”. En su lápida de 
                mármol blanco del Cementerio de Montparnasse se encuentra una escultura representando 
                varios cronopios.</p>
        </div>
        <div class="card-footer text-body-secondary">
            Por Darío Klein
            22:00 ET(02:00 GMT) 12 Octubre, 2023
        </div>
    </div>
</div>
@endsection