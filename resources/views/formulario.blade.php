<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-[#DFE3E6] flex flex-col justify-center items-center">
    <div class=" w-[70%] bg-white h-[90%] justify-center items-center">
        <div class=" h-24 flex flex-row items-center px-8 justify-start w-full">
            <h1 class=" text-[24px]">Agregar Usuarios</h1>
        </div>
        <div class=" flex flex-col items-center justify-center px-[200px] py-[100px]">
            <form class="w-full  flex flex-col flex-wrap justify-center item-center gap-5" action="api/registrar"
                method="POST">
                <div class=" flex flex-row w-full my-5">
                    <label for="nombre" class="w-[50%] mx-3">
                        <h3 class=" text-[20px]">Nombre</h3>
                        <input class="w-full border border-black px-4 py-2" id="nombre" type="text" name="nombre"
                            placeholder="Ingresar el nombre" required>
                    </label>
                    <label for="apellido" class="w-[50%] mx-3">
                        <h3 class=" text-[20px]">Apellido</h3>
                        <input class="w-full border border-black px-4 py-2 " id="apellido" type="text"
                            name="apellido" placeholder="Ingresar el apellido" required>
                    </label>
                </div>
                <div class=" mx-3">
                    <label for="correo">
                        <h3 class=" text-[20px]">E-mail</h3>
                        <input class="w-full border border-black px-4 py-2 " id="correo" type="email"
                            name="correo" placeholder="Ingresa el E-mail" required>
                    </label>
                </div>
                <div class="ml-3 my-5">
                    <label for="contra">
                        <h3 class=" text-[20px]">Contraseña</h3>
                        <input class=" w-[48%] px-4 py-2 border border-black" type="password" id="contra"
                            name="contra" placeholder="Ingrese la contraseña" required>
                    </label>
                </div>
                <div class=" flex justify-center items-center">
                    <button type="submit" class="bg-[#004C6C] w-[240px] text-white h-10">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>