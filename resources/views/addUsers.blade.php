<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            /* Estilos Tailwind CSS */
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css');

            /* Estilos personalizados */
            body {
                background-color: #f7fafc;
                font-family: 'Figtree', sans-serif;
                width: max-content;
                margin: auto;
                

            }

            header {
                margin: 10px 10px;
                display: flex;
                justify-content: space-between;
              
            }

            ;

            .container {
                min-height: 100vh;
               
                
            }

            .form-container {
                background-color: #fff;
                padding: 1.5rem;
                border-radius: 0.5rem;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                width: auto;
                max-width: 800px;
                
                
                
            }

            .form-title {
                font-size: 1.5rem;
                font-weight: 600;
                text-align: center;
                margin-bottom: 1.5rem;
            }

            .input1 {
                width: 30%;
                padding: 0.75rem;
                border: 1px solid #e2e8f0;
                border-radius: 0.375rem;
                margin-bottom: 1rem;
            }
            .input2 {
                width: 85%;
                padding: 0.75rem;
                border: 1px solid #e2e8f0;
                border-radius: 0.375rem;
                margin-bottom: 1rem;
            }
            .input3 {
                width: 30%;
                padding: 0.75rem;
                border: 1px solid #e2e8f0;
                border-radius: 0.375rem;
                margin-bottom: 1rem;
            }

            .form-button {
                background-color: #004c6c;
                color: #fff;
                padding: 0.75rem 1.5rem;
                border-radius: 0.375rem;
                cursor: pointer;
                margin: 20px 40%;
            }

            .link-button {
                background-color: #004c6c;
                color: #fff;
                padding: 0.75rem 1.5rem;
                border-radius: 0.375rem;
                cursor: pointer;
                width: max-content;
                height: min-content;
                justify-content: center;
            }

            .form-button:hover {
                background-color: #276496;
            }

            .link-button:hover {
                background-color: #276496;
            }
        </style>
    </head>

    <body>
        <div class="container">
        <div>
                <header>
                    <h3>Agregar Usuarios</h3> <a href="/api/usuarios" class="link-button">Volver al listado</a>
                </header>
            </div>
        <div class="form-container">
            

            

                <form action="api/addUser" method="post">
                    <label>Nombre</label>
                  
                    <input type="text" name="nombre" class="input1" placeholder="ingrese el Nombre">
                    
                    <label>Apellido</label>
                    
                    <input type="text" name="apellido" class="input1" placeholder="ingrese el Apellido">
                    <br>
                    <label>E-mail</label>
                    <br>
                    <input type="text" name="email" class="input2" placeholder="ingrese el E-mail">
                    <br>
                    <label>Contraseña</label>
                    <br>
                    <input type="text" name="contraseña" class="input3" placeholder="ingrese una contraseña">
                    <br>
                    <input type="submit" value="Guardar" class="form-button">
                </form>
            </div>
        </div>
    </body>

    </html>

</div>